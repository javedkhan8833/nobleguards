<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Upcoming;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::with(["dates"])->get();
        return view('admin.pages.courses.index',compact('data'));
    }

    public function create()
    {
        return view('admin.pages.courses.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $course_id = Course::insertGetId([
            'name'=>$request->name,
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'duration'=>$request->duration,
            'price'=>$request->price
        ]);

            // $datesArray = [];
            $datesArray = $request->upcoming_date;
            // dd($datesArray,$course_id);
            foreach($datesArray as $date)
            {
            $data = Upcoming::create([
                    'is_confirmed'=>$request->is_confirmed,
                    'upcoming_date'=>$date,
                    'course_id'=>$course_id
            ]);
            }
           return redirect()->route('admin.course.index')->with('success', 'Course Added successfully');

    }

}
