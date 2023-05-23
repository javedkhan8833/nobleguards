<?php

namespace App\Http\Controllers\website;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function detail()
    {
        $aboutus =about::first();
        return view('website.pages.about',compact('aboutus'));
    }
}
