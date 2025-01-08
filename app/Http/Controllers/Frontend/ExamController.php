<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Exam;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function index($slug) {
        $exam = Exam::whereStatus(true)->whereSlug($slug)->first();
        if ($exam) {
            return view("frontend.home.index", compact("exam"));
            return $exam;
        }
        return abort(404);
    }
    public function showExam($slug)
    {
        $exam = Exams::whereStatus(true)
        ->whereSlug($slug)
        ->limit(10)
        ->get();
        $exams= Exams::all();
      

        // return view('frontend.home.program', compact('exam', 'exams'));
    }
   
}
