<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
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
