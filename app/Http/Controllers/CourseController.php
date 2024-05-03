<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; 

class CourseController extends Controller
{
    public function getcourses(){
        return view('index');
    }

    public function savecourses(Request $request){
        $course = new Course();
        $course->coursename = $request->coursename;
        $course->details = $request->details;
        $course->save();
        return redirect('/course');
    }

    public function index() {
        $courses = Course::all(); 
        return view('courses', ['courses' => $courses]); 
    }
}
