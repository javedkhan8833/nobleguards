<?php

namespace App\Http\Controllers\admin;

use App\Models\Refer;
use App\Models\Course;
use App\Models\Contact;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function dashboard()
    {
        $totalCourses = Course::count();
        $registeredMembers = Register::count();
        $contacted = Contact::count();
        $refered_students = Refer::count();
        return view('admin.pages.dashboard',compact('totalCourses','registeredMembers','contacted','refered_students'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    public function contact()
    {
        $data = Contact::all();
        return view('admin.pages.contactus.index',compact('data'));
    }

    public function singleContactView()
    {
        return view('admin.pages.contactus.singleemail');
    }

    public function delete($id)
    {
        $del = Contact::find($id)->delete();
        return redirect()->route('admin.contactus.contacted')->with('success', 'record deleted successfully');

    }


}
