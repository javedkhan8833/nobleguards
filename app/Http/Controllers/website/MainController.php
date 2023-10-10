<?php

namespace App\Http\Controllers\website;

use App\Models\Faq;
use App\Models\about;
use App\Models\Refer;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $about = about::first();
        $faqs  = Faq::all();
        $sliders = Slider::all();
        // dd($faqs);
        // if($about->count() == 0)
        // {
        //     return view('website.pages.home');
        // }
        // else
        // {
        //     return view('website.pages.home',compact('about'));
        // }
        return view('website.pages.home',compact('about','faqs','sliders'));
    }
    public function about()
    {
        $aboutus = about::first();
        return view('website.pages.about',compact('aboutus'));
        // if($aboutus->count() == 0)
        // {
        //     return view('website.pages.about',compact('aboutus'));
        // }
        // else
        // {
            // }
    }
    public function contact()
    {
        return view('website.pages.contactus');
    }

    public function faq()
    {
        $faqs  = Faq::all();
        return view('website.pages.faq',compact('faqs'));
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
    public function reg_form()
    {
        return view('website.pages.register');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
                'name' =>'required',
                'sure_name' =>'required',
                'phone_number'=>'required',
                'email' =>'required',
                'city'=>'required',
                'gender'=>'required',
                'course'=>'required',
                'address'=>'required',
            ]);
            $data = [
                'name' => $request->name,
                'sure_name'=>$request->sure_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'city'=>$request->city,
                'gender'=>$request->gender,
                'course'=>$request->course,
                'address'=>$request->address,
            ];
            $query = Register::create($data);
            if($query)
            {
                return back()->with('success', 'Registered Successfully');
            }
            else{
                return back()->with('error','something went wrong');
            }

    }
    public function courses_list()
        {
            $data = Register::all();
            return view('admin.pages.courses.courseslist',compact('data'));

        }

}
