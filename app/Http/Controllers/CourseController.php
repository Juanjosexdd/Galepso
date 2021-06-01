<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course.index');
    }

    public function show(Course $course)
    {
        // Declaramos una variable similares para acceder a todos los
        // cursos que comparten la misma categoria que el curso en cuestion
        //
        $similares = Course::where('category_id', $course->category_id)
                           ->where('id', '!=', $course->id)   
                           ->where('status', 3)
                           ->latest('id')    
                           ->take(5)         
                           ->get();
        return view('course.show', compact('course','similares'));
    }

    public function enrolled(Course $course)
    {
        $course->studens()->attach(auth()->user()->id);
        return redirect()->route('courses.status', $course);
    }
}
