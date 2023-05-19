<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view('admin.pages.courses.index',compact('data'));
    }

    public function create()
    {
        return view('admin.pages.courses.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }

}
