<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class LocationController extends Controller
{
    // It's for all locations
    public function index() {
        $location = Location::orderBy("id", "DESC")->paginate(20); // location is the model name
        return view("dashboard.location.index", compact("location"));
    }


    // create location and save DB

    public function create() {
        $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
      
        // @dd($location);
        // $tags = Tag::orderBy("name", "ASC")->get();
        return view("dashboard.location.add", compact("categories"));  // , "tags"
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "string", "max:255"],
            "image" => ["nullable", "image"],
            "slug" => ["required", "string", "max:255", "unique:pages,slug"],
            "category" => ["required", "exists:categories,id"],
            // "tags" => ["nullable", "array"],
            "content" => ["required", "string"],
            
            "status" => ["required", Rule::in(["0", "1"])],
            
        ]);
        if (Arr::has($validated, "image")) {
            $image = $request->file("image");
            $imageName = md5(time().rand(11111, 99999)).".".$image->extension();
            $image->move(public_path("uploads/location"), $imageName);
        }
        $location = Location::create([          
            "title" => $validated["title"],
            "image" => Arr::has($validated, "image") ? $imageName : null,
            "slug" => Str::slug($validated["slug"]),
            "category_id" => $validated["category"],
            "content" => $validated["content"],
            "status" => $validated["status"],
        ]);

        // if (Arr::has($validated, "tags")) {
        //     foreach ($validated["tags"] as $tag) {
        //         $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
        //         $page->tags()->attach([$tag->id]);
        //     }
        // }
        return redirect()->route("dashboard.location.index")->with("success", "Location created!");
    }



// Edit and Update 


    public function edit(string $id) {
        $location = Location::find($id);
        if ($location) {
            $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
            // $tags = Tag::orderBy("name", "ASC")->get();
            return view("dashboard.location.edit", compact("location", "categories"));
         
        }
        return back()->withErrors("Page not exists!");
    }  

    public function update(Request $request, string $id) {
        $location = Location::find($id);
        
        if ($location) {
            $validated = $request->validate([
                "title" => ["required", "string", "max:255"],
                "slug" => ["required", "string", "max:255", Rule::unique("location", "slug")->ignore($location->id)],
                "content" => ["required", "string"],
                // "tags" => ["nullable", "array"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $location->title = $validated["title"];
            $location->slug = Str::slug($validated["slug"]);
            $location->content = $validated["content"];            
            $location->status = $validated["status"];
            $location->save();
            // if (Arr::has($validated, "tags")) {
            //     $tagArr = [];
            //     foreach ($validated["tags"] as $tag) {
            //         $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
            //         $tagArr[] = $tag->id;
            //     }
            //     $page->tags()->sync($tagArr);
            // } else {
            //     $page->tags()->sync([]);
            // }
            return redirect()->route("dashboard.location.index")->with("success", "Page updated!");
        }
        return redirect()->route("dashboard.location.index")->withErrors("Page not exists!");
    }

// End of Edit and Update 


// restore location from Database

public function trashed() {
    $location = Location::onlyTrashed()->orderBy("id", "DESC")->paginate(20);
    return view("dashboard.location.trashed", compact("location"));
}

public function restore($id) {
    $location = Location::onlyTrashed()->find($id);
    if ($location) {
        $location->restore();
        return back()->with("success", "Location restored!");
    }
    return back()->withErrors("Location not exists!");
}

// Delete location from the database
public function delete($id) {
    $location = Location::onlyTrashed()->find($id);
    if ($location) {
        $location->forceDelete();
        return back()->with("success", "Location deleted!");
    }
    return back()->withErrors("Location not exists!");
}


public function destroy(string $id) {
    $location = Location::find($id);
    if ($location) {
        $location->delete();
        return back()->with("success", "Location deleted!");
    }
    return back()->withErrors("Page not exists!");
}


   
}
