<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Unibanner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class UnibannerController extends Controller
{
    public function index() {
        $banner = Unibanner::orderBy("title", "ASC")->paginate(20);
        return view("dashboard.unibanner.index", compact("banner"));
    }

    public function create() {
        return view("dashboard.unibanner.add");
    }
    

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "string", "max:150"],
            "slug" => ["required", "max:150", "unique:categories,slug"],
            "image" => ["nullable", "image"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        if (Arr::has($validated, "image")) {
            $image = $request->file("image");
            $imageName = md5(time().rand(11111, 99999)).".".$image->extension();
            $image->move(public_path("uploads/unibanner"), $imageName);
        }
        Unibanner::create([
            "title" => $validated["title"],
            "slug" => $validated["slug"],
            "image" => Arr::has($validated, "image") ? $imageName : null,
            "status" => $validated["status"],
        ]);
        return redirect()->route("dashboard.unibanner.index")->with("success", "banner created!");
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id) {

    }

    public function edit(string $id) {
        $banner = Unibanner::find($id);
        if ($banner) {
            return view("dashboard.unibanner.edit", compact("banner"));
        }
        return back()->withErrors("banner not exists!");
    }

    public function update(Request $request, string $id) {
        $banner = Unibanner::find($id);
        if ($banner) {
            $validated = $request->validate([
                "title" => ["required", "string", "max:150"],
                "slug" => ["required", "max:150", Rule::unique("categories", "slug")->ignore($id)],
                "image" => ["nullable", "image"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $banner->title = $validated["title"];
            $banner->slug = $validated["slug"];
            $banner->status = $validated["status"];
            if (Arr::has($validated, "image")) {
                $image = $request->file("image");
                $imageName = md5(time().rand(11111, 99999)).".".$image->extension();
                $image->move(public_path("uploads/unibanner"), $imageName);
                if ($banner->image) {
                    if (File::exists(public_path("uploads/unibanner/".$banner->image))) {
                        File::delete(public_path("uploads/unibanner/".$banner->image));
                    }
                }
                $banner->image = $imageName;
            }
            $banner->save();
            return redirect()->route("dashboard.unibanner.index")->with("success", "university Logo updated!");
        }
        return back()->withErrors("university Logo not exists!");
    }




    

    public function destroy(string $id) {
        $banner = Unibanner::find($id);
        if ($banner) {
            $banner->delete();
            return back()->with("success", "university Logo deleted!");
        }
        return back()->withErrors("university Logo not exists!");
    }

    public function restore($id) {
        $banner = Unibanner::onlyTrashed()->find($id);
        if ($banner) {
            $banner->restore();
            return back()->with("success", "university Logo restored!");
        }
        return back()->withErrors("university Logo not exists!");
    }

    public function status($id) {
        $banner = Unibanner::find($id);
        if ($banner) {
            $banner->status = $banner->status ? "0" : "1";
            $banner->save();
            $alert = $banner->status ? "university Logo Activated!" : "university Logo Inactivated!";
            return back()->with("success", $alert);
        }
        return back()->withErrors("university Logo not exists!");
    }

    public function trashed() {
      $banner = Unibanner::orderBy("title", "ASC")->paginate(20);
        return view("dashboard.unibanner.trashed", compact("banner"));
    }

    public function delete($id) {
        $banner = Unibanner::onlyTrashed()->find($id);
        if ($banner) {
            if (File::exists(public_path("uploads/unibanner/".$banner->image))) {
                File::delete(public_path("uploads/unibanner/".$banner->image));
            }
            $banner->posts()->forceDelete();
            $banner->forceDelete();
            return back()->with("success", "university Logo deleted!");
        }
        return back()->withErrors("university Logo not exists!");
    }

}
