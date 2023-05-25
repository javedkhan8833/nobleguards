<?php

namespace App\Http\Controllers\website;

use App\Models\Faq;
use App\Models\about;
use App\Models\Refer;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $about = about::first();
        $faqs  = Faq::all();

        // if($about->count() == 0)
        // {
        //     return view('website.pages.home');
        // }
        // else
        // {
        //     return view('website.pages.home',compact('about'));
        // }
        return view('website.pages.home',compact('about','faqs'));
    }
    public function about()
    {
        $aboutus = about::first();
        if($aboutus->count() == 0)
        {
            return view('website.pages.about',compact('aboutus'));
        }
        else
        {
            return view('website.pages.about',compact('aboutus'));
        }
    }
    public function contact()
    {
        return view('website.pages.contactus');
    }
    public function selectCourse()
    {
        $data = Course::with(["dates"])->get();
        return view('website.pages.courses',compact('data'));
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

    public function referedlist()
    {
        $data = Refer::all();
        return view('admin.pages.refered.index',compact('data'));
    }
    public function faqs()
    {

        return view('admin.website.pages.home');
    }
    public function terms()
    {
        return view('website.pages.terms');
    }

}
