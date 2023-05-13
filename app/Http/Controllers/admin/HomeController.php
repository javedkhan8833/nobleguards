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
}
