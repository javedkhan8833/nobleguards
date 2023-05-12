<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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
}
