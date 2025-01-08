<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index($slug) {
        $banner = Banner::where("slug", $slug)->where("status", true)->first();
        if ($banner) {
            $str = Str::class;
            $posts = $banner->posts()->with(["banner", "user"])->where("status", true)->orderBy("id", "DESC")->paginate(10);
            return view("frontend.home.banner", compact("banner", "posts", "str"));
        }
        return abort(404);
    }
}
