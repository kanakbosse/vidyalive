<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class PageController extends Controller
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
        $page = Page::where('slug', $pageSlug)
            ->where('category_id', $category->id)
            ->first();
    
        // Handle the case where the page is not found
        if (!$page) {
            abort(404, 'Page not found.');
        }
    
        // Fetch all pages in the 'page' category for the sidebar
        $pages = $category->pages;
    
        return view('frontend.course.index', compact('category', 'page', 'pages'));
    }
    public function index() {
        $pages = Page::orderBy("id", "DESC")->paginate(20);
        return view("dashboard.page.index", compact("pages"));
    }

    public function status($id) {
        $page = Page::find($id);
        if ($page) {
            $page->status = $page->status ? "0" : "1";
            $page->save();
            $alert = $page->status ? "Page published!" : "Page drafted!";
            return back()->with("success", $alert);
        }
        return back()->withErrors("Page not exists!");
    }

    public function create() {
        $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
        $tags = Tag::orderBy("name", "ASC")->get();
        return view("dashboard.page.add", compact("categories", "tags"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "string", "max:255"],
            "slug" => ["required", "string", "max:255", "unique:pages,slug"],
            "category" => ["required", "exists:categories,id"],
            "tags" => ["nullable", "array"],
            "content" => ["required", "string"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        $page = Page::create([          
            "title" => $validated["title"],
            "slug" => Str::slug($validated["slug"]),
            "category_id" => $validated["category"],
            "content" => $validated["content"],
            "status" => $validated["status"],
        ]);

        if (Arr::has($validated, "tags")) {
            foreach ($validated["tags"] as $tag) {
                $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
                $page->tags()->attach([$tag->id]);
            }
        }
        return redirect()->route("dashboard.pages.index")->with("success", "Page created!");
    }
    public function edit(string $id) {
        $page = Page::with(["tags"])->withCount(["tags"])->find($id);
        if ($page) {
            $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
            $tags = Tag::orderBy("name", "ASC")->get();
            return view("dashboard.page.edit", compact("page", "categories", "tags"));
         
        }
        return back()->withErrors("Page not exists!");
    }  

    public function update(Request $request, string $id) {
        $page = Page::find($id);
        
        if ($page) {
            $validated = $request->validate([
                "title" => ["required", "string", "max:255"],
                "slug" => ["required", "string", "max:255", Rule::unique("pages", "slug")->ignore($page->id)],
                "content" => ["required", "string"],
                "tags" => ["nullable", "array"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $page->title = $validated["title"];
            $page->slug = Str::slug($validated["slug"]);
            $page->content = $validated["content"];            
            $page->status = $validated["status"];
            $page->save();
            if (Arr::has($validated, "tags")) {
                $tagArr = [];
                foreach ($validated["tags"] as $tag) {
                    $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
                    $tagArr[] = $tag->id;
                }
                $page->tags()->sync($tagArr);
            } else {
                $page->tags()->sync([]);
            }
            return redirect()->route("dashboard.pages.index")->with("success", "Page updated!");
        }
        return redirect()->route("dashboard.pages.index")->withErrors("Page not exists!");
    }
    
    public function destroy(string $id) {
        $page = Page::find($id);
        if ($page) {
            $page->delete();
            return back()->with("success", "Page deleted!");
        }
        return back()->withErrors("Page not exists!");
    }

    public function trashed() {
        $pages = Page::onlyTrashed()->orderBy("id", "DESC")->paginate(20);
        return view("dashboard.page.trashed", compact("pages"));
    }

    public function restore($id) {
        $page = Page::onlyTrashed()->find($id);
        if ($page) {
            $page->restore();
            return back()->with("success", "Page restored!");
        }
        return back()->withErrors("Page not exists!");
    }

    public function delete($id) {
        $page = Page::onlyTrashed()->find($id);
        if ($page) {
            $page->forceDelete();
            return back()->with("success", "Page deleted!");
        }
        return back()->withErrors("Page not exists!");
    }
}
