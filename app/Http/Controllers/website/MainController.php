<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }
    public function about()
    {
        return view('website.pages.about');
    }
    public function contact()
    {
        return view('website.pages.contactus');
    }
    public function store(Request $request)
        {
            dd('hi');
            // dd($request->all());
            $data = $request->validate([
                'name' =>'required',
                'email' =>'required',
                'subject'=>'required',
                'message'=>'required',
            ]);

        }
    public function selectCourse()
    {
        return view('website.pages.courses');
    }
    public function initial()
    {
        return view('website.pages.firstpage');
    }

}
