<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug) {
        $page = Page::whereStatus(true)->whereSlug($slug)->first();
        if ($page) {
            return view("frontend.page.index", compact("page"));
            return $page;
        }
        return abort(404);
    }
   
  
}
