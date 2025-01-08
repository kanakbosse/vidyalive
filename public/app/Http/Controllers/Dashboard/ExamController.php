<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\Exam;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ExamController extends Controller
{
    public function show($examSlug)
    {
        // Fetch the category with slug 'exam'
        $category = Category::where('slug', 'exam')->first();
    
        // Handle the case where the category is not found
        if (!$category) {
            abort(404, 'Category not found.');
        }
    
        // Fetch the exam with the given slug and ensure it belongs to the 'exam' category
        $exam = Exam::where('slug', $examSlug)
            ->where('category_id', $category->id)
            ->first();
    
        // Handle the case where the exam is not found
        if (!$exam) {
            abort(404, 'exam not found.');
        }
    
        // Fetch all exams in the 'exam' category for the sidebar
        $exams = $category->exams;
    
        return view('frontend.course.index', compact('category', 'exam', 'exams'));
    }
    public function index() {
        $exams = Exam::orderBy("id", "DESC")->paginate(20);
        return view("dashboard.exams.index", compact("exams"));
    }

    public function status($id) {
        $exam = Exam::find($id);
        if ($exam) {
            $exam->status = $exam->status ? "0" : "1";
            $exam->save();
            $alert = $exam->status ? "exam published!" : "exam drafted!";
            return back()->with("success", $alert);
        }
        return back()->withErrors("exam not exists!");
    }

    public function create() {
        $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
        $tags = Tag::orderBy("name", "ASC")->get();
        return view("dashboard.exams.add", compact("categories", "tags"));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "title" => ["required", "string", "max:255"],
            "slug" => ["required", "string", "max:255", "unique:exams,slug"],
            "category" => ["required", "exists:categories,id"],
            "image" => ["nullable", "image"],
            "Participating_college" => ["required", "string", "max:255"],
            "Exam_Date" => ["required", "string", "max:255"],
            "Exam_Level" => ["required", "string", "max:255"],            
            "tags" => ["nullable", "array"], 
            "content" => ["required", "string"],
            "status" => ["required", Rule::in(["0", "1"])],
        ]);
        if (Arr::has($validated, "image")) {
            $image = $request->file("image");
            $imageName = md5(time().rand(11111, 99999)).".".$image->extension();
            $image->move(public_path("uploads/location"), $imageName);
        }
        $exam = Exam::create([          
            "title" => $validated["title"],
            "slug" => Str::slug($validated["slug"]),
            "category_id" => $validated["category"],
            "image" => Arr::has($validated, "image") ? $imageName : null,
            "Participating_college" => $validated["Participating_college"],
            "Exam_Date" => $validated["Exam_Date"],
            "Exam_Level" => $validated["Exam_Level"],
            
            "content" => $validated["content"],
            
            "status" => $validated["status"],
        ]);

        if (Arr::has($validated, "tags")) {
            foreach ($validated["tags"] as $tag) {
                $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
                $exam->tags()->attach([$tag->id]);
            }
        }
        return redirect()->route("dashboard.exams.index")->with("success", "exam created!");
    }
    public function edit(string $id) {
        $exam = Exam::with(["tags"])->withCount(["tags"])->find($id);
        if ($exam) {
            $categories = Category::where("status", true)->orderBy("title", "ASC")->get();
            $tags = Tag::orderBy("name", "ASC")->get();
            return view("dashboard.exams.edit", compact("exam", "categories", "tags"));
         
        }
        return back()->withErrors("exam not exists!");
    }  

    public function update(Request $request, string $id) {
        $exam = Exam::find($id);
        
        if ($exam) {
            $validated = $request->validate([
                "title" => ["required", "string", "max:255"],
                "slug" => ["required", "string", "max:255", Rule::unique("exams", "slug")->ignore($exam->id)],
                "Participating_college" => ["required", "string"],
                "Exam_Level" => ["required", "string"],                
                "Exam_Date" => ["required", "string"],                
                "content" => ["required", "string"],               
                "tags" => ["nullable", "array"],
                "status" => ["required", Rule::in(["0", "1"])],
            ]);
            $exam->title = $validated["title"];
            $exam->slug = Str::slug($validated["slug"]);
            $exam->Participating_college = $validated["Participating_college"];
            $exam->Exam_Date = $validated["Exam_Date"];
            $exam->Exam_Level = $validated["Exam_Level"];
            
            $exam->content = $validated["content"];            
            $exam->status = $validated["status"];
            $exam->save();
            if (Arr::has($validated, "tags")) {
                $tagArr = [];
                foreach ($validated["tags"] as $tag) {
                    $tag = Tag::firstOrCreate(["name" => Str::lower($tag)]);
                    $tagArr[] = $tag->id;
                }
                $exam->tags()->sync($tagArr);
            } else {
                $exam->tags()->sync([]);
            }
            return redirect()->route("dashboard.exams.index")->with("success", "exam updated!");
        }
        return redirect()->route("dashboard.exams.index")->withErrors("exam not exists!");
    }
    
    public function destroy(string $id) {
        $exam = Exam::find($id);
        if ($exam) {
            $exam->delete();
            return back()->with("success", "exam deleted!");
        }
        return back()->withErrors("exam not exists!");
    }

    public function trashed() {
        $exams = Exam::onlyTrashed()->orderBy("id", "DESC")->paginate(20);
        return view("dashboard.exams.trashed", compact("exams"));
    }

    public function restore($id) {
        $exam = Exam::onlyTrashed()->find($id);
        if ($exam) {
            $exam->restore();
            return back()->with("success", "exam restored!");
        }
        return back()->withErrors("exam not exists!");
    }

    public function delete($id) {
        $exam = Exam::onlyTrashed()->find($id);
        if ($exam) {
            $exam->forceDelete();
            return back()->with("success", "exam deleted!");
        }
        return back()->withErrors("exam not exists!");
    }
}
