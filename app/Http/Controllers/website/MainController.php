<?php

namespace App\Http\Controllers\website;

use App\Models\Refer;
use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class MainController extends Controller
{
    public function index()
    {
        $about = about::first();
        $faqs  = Faq::all();
        // dd($faqs);
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

}
