<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Unibanner;

class UnibannerController extends Controller
{
    public function index($slug = null)
    {
        $banners = Unibanner::active()
            ->orderBy("title", "ASC")
            ->limit(10)
            ->get();

        if ($banners->isEmpty()) {
            abort(404, "No banners found.");
        }

        return view("frontend.course.universitylogo", compact("banners"));
    }
}
