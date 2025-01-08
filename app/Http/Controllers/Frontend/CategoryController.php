<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slug) {
        $category = Category::where("slug", $slug)->where("status", true)->first();
        if ($category) {
            $str = Str::class;
            $posts = $category->posts()->with(["category", "user"])->where("status", true)->orderBy("id", "DESC")->paginate(10);
            return view("frontend.course.index", compact("category", "posts", "str"));
        }
        return abort(404);
    }

    public function showCategoryPages($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->with('pages')->firstOrFail();
        $categories = Category::all();

        return view('frontend.category.index', compact('category', 'categories'));
    }
    public function showCategoryPage($categorySlug, $pageSlug)
    {
        // Fetch the category by slug
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Fetch the page by slug and ensure it belongs to the fetched category
        $page = Page::where('slug', $pageSlug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        // Fetch all pages for the sidebar
        $pages = $category->pages;
       
 // return view('frontend.course.index', compact('category', 'categories'));
        return view('frontend.course.index', compact('category', 'page', 'pages'));
    }
}
