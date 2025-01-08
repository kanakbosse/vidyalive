<?php
namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\uni;
use App\Models\Unipage;
use App\Models\Tab;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class UniPageController extends Controller
{  
    public function show($pageSlug)
    {
        // Fetch the category with slug 'page'
        $category = Category::where('slug', 'page')->first();
    
        // Handle the case where the category is not found
        if (!$category) {
            abort(404, 'Category not found.');
        }
    
        // Fetch the page with the given slug and ensure it belongs to the 'page' category
        $unipage = Unipage::where('slug', $pageSlug)
            ->where('category_id', $category->id)
            ->first();
    
        // Handle the case where the page is not found
        if (!$unipage) {
            abort(404, 'Page not found.');
        }
    
        // Fetch all pages in the 'page' category for the sidebar
        $unipages = $category->unipages;
    
        return view('frontend.course.index', compact('category', 'unipage', 'unipages'));
    }
    public function index() {
        $unipages = Unipage::orderBy("id", "DESC")->paginate(20);
        return view("dashboard.unipage.index", compact("unipages"));
    }

    public function status($id) {
        $unipage = Unipage::find($id);
        if ($unipage) {
            $unipage->status = $page->status ? "0" : "1";
            $unipage->save();
            $alert = $unipage->status ? "Page published!" : "Page drafted!";
            return back()->with("success", $alert);
        }
        return back()->withErrors("University not exists!");
    }

    public function create() {
        $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
        $tags = Tag::orderBy("name", "ASC")->get();
        return view("dashboard.unipage.add", compact("categories", "tags"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "string", "max:255"],
            "slug" => ["required", "string", "max:255", "unique:pages,slug"],
            "category" => ["required", "exists:categories,id"],
            'tabs.*.name' => 'required|string|max:255',
            'tabs.*.content' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            "tags" => ["nullable", "array"],
            "content" => ["required", "string"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        $unipage = Unipage::create([          
            "title" => $validated["title"],
            "slug" => Str::slug($validated["slug"]),
            "category_id" => $validated["category"],
            "content" => $validated["content"],
            "status" => $validated["status"],
        ]);
        // Save tabs
    if ($request->has('tabs')) {
        foreach ($request->tabs as $tabData) {
            $unipage->tabs()->create($tabData);
        }
    }

    // Save images
    if ($request->hasFile('images')) {
       
        foreach ($request->file('images') as $image) {
            $imageName = md5(time().rand(11111, 99999)).".".$image->extension();
              $image->move(public_path("uploads/imagess"), $imageName);         
            $unipage->images()->create(['image_path' =>  $imageName]);
            // $image->move(public_path("uploads/imagess"), $unipage);
        }
    }
    
        if (Arr::has($validated, "tags")) {
            foreach ($validated["tags"] as $tag) {
                $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
                $unipage->tags()->attach([$tag->id]);
            }
        }
        return redirect()->route("dashboard.unipages.index")->with("success", "University Added!");
    }
 
 
    public function edit(string $id) {
        $unipage = Unipage::with(["tags"])->withCount(["tags"])->find($id);
        if ($unipage) {
            $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
            $tags = Tag::orderBy("name", "ASC")->get();
            return view("dashboard.unipage.edit", compact("unipage", "categories", "tags"));
         
        }
        return back()->withErrors("University not exists!");
    }  
 
    public function update(Request $request, string $id) {
        $unipage = Unipage::find($id);
        
        if ($unipage) {
            $validated = $request->validate([
                "title" => ["required", "string", "max:255"],
                "slug" => ["required", "string", "max:255", Rule::unique("unipages", "slug")->ignore($unipage->id)],
                "content" => ["required", "string"],
                'tabs.*.name' => 'required|string|max:255',
                'tabs.*.content' => 'required|string',
                'images' => ['nullable', 'array'], // Ensure it's an array
                'images.*' => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif', 'max:2048'], // Validate each item in the array
           
                "tags" => ["nullable", "array"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $unipage->title = $validated["title"];
            $unipage->slug = Str::slug($validated["slug"]);
            $unipage->content = $validated["content"];            
            $unipage->status = $validated["status"];
            $unipage->save();
             // Update tabs
        $unipage->tabs()->delete();
        if ($request->has('tabs')) {
            foreach ($request->tabs as $tabData) {
                $unipage->tabs()->create($tabData);
            }
        }

        // Update images
        if ($request->hasFile('images')) {
            $unipage->images()->delete();
            if ($request->hasFile('images')) {
       
                foreach ($request->file('images') as $image) {
                    $imageName = md5(time().rand(11111, 99999)).".".$image->extension();
                      $image->move(public_path("uploads/imagess"), $imageName);         
                    $unipage->images()->create(['image_path' =>  $imageName]);
                    // $image->move(public_path("uploads/imagess"), $unipage);
                }
            }
            
        }

            if (Arr::has($validated, "tags")) {
                $tagArr = [];
                foreach ($validated["tags"] as $tag) {
                    $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
                    $tagArr[] = $tag->id;
                }
                $unipage->tags()->sync($tagArr);
            } else {
                $unipage->tags()->sync([]);
            }
            return redirect()->route("dashboard.unipages.index")->with("success", "University Updated!");
        }
        return redirect()->route("dashboard.unipages.index")->withErrors("University not exists!");
    }
    
    public function destroy(string $id) {
        $unipage = Unipage::find($id);
        if ($unipage) {
            $unipage->delete();
            return back()->with("success", "University deleted!");
        }
        return back()->withErrors("University not exists!");
    }

    public function trashed() {
        $unipages = Unipage::onlyTrashed()->orderBy("id", "DESC")->paginate(20);
        return view("dashboard.unipage.trashed", compact("unipages"));
    }

    public function restore($id) {
        $unipage = Unipage::onlyTrashed()->find($id);
        if ($unipage) {
            $unipage->restore();
            return back()->with("success", "University restored!");
        }
        return back()->withErrors("University not exists!");
    }

    public function delete($id) {
        $unipage = Unipage::onlyTrashed()->find($id);
        if ($unipage) {
            $unipage->forceDelete();
            return back()->with("success", "University deleted!");
        }
        return back()->withErrors("University not exists!");
    }
}
