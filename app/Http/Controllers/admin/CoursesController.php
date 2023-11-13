<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use DB;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::with(["dates"])->get();
        return view('admin.pages.courses.index', compact('data'));
    }
    public function edit($id,Request $request)
    {

        $data = Course::with(["dates"])->where('id',$id)->first();
        // dd($data);
        return view('admin.pages.courses.edit', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.courses.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $course_id = Course::insertGetId([
            'name' => $request->name,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'duration' => $request->duration,
            'price' => $request->price
        ]);

        // $datesArray = [];
        $datesArray = $request->upcoming_date;
        // dd($datesArray,$course_id);
        foreach ($datesArray as $date) {
            $data = Upcoming::create([
                'is_confirmed' => $request->is_confirmed,
                'upcoming_date' => $date,
                'course_id' => $course_id
            ]);
        }
        return redirect()->route('admin.course.index')->with('success', 'Course Added successfully');
    }
    public function update($id,Request $request)
    {
        // dd($request->all());
        $record = Course::find($id);
        $record->name= $request->name;
        $record->title= $request->title;
        $record->sub_title= $request->sub_title;
        $record->duration= $request->duration;
        $record->price= $request->price;
        $record->save();
        // [
        //     'name' => $request->name,
        //     'title' => $request->title,
        //     'sub_title' => $request->sub_title,
        //     'duration' => $request->duration,
        //     'price' => $request->price
        // ]

        // $datesArray = [];
        $datesArray = $request->upcoming_date;
        Upcoming::where('course_id',$id)->delete();
        if($request->is_confirmed=='0')
        {
            $data = Upcoming::create([
                'is_confirmed' => $request->is_confirmed,
                'upcoming_date' => '',
                'course_id' => $id
            ]);
        }
        else
        {


        // dd($datesArray,$course_id);
        foreach ($datesArray as $date) {
            $data = Upcoming::create([
                'is_confirmed' => $request->is_confirmed,
                'upcoming_date' => $date,
                'course_id' => $id
            ]);
        }
        }
        return redirect()->route('admin.course.index')->with('success', 'Course Added successfully');
    }
    public function delete($id)
    {

        try {
            DB::beginTransaction();
            $course = Course::whereId($id)->first();
            Upcoming::where("course_id", $course->id)->delete();
            $course->delete();
            DB::commit();
            return  back()->with('success', 'Course deleted successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            return back()->with('danger', "Something went wrong");
        }
    }
}
