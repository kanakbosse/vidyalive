<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function index($slug) {
        $location = Location::all();
        if ($location) {
            // $str = Str::class;
            // $posts = $banner->posts()->with(["banner", "user"])->where("status", true)->orderBy("id", "DESC")->paginate(10);
            return view("frontend.home.index", compact("location"));
        }
        return abort(404);
    }
}
