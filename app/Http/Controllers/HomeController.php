<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('status', '3')->latest('id')->get()->take(8);
        //return $courses;
        //return Course::find(1)->rating;
        return view('welcome', compact('courses') );
    }
}
