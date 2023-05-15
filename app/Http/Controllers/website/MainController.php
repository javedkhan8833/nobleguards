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
    public function selectCourse()
    {
        return view('website.pages.courses');
    }
    public function initial()
    {
        return view('website.pages.firstpage');
    }
    public function referFriend()
    {
        return view('website.pages.refer_a_friend');
    }

}
