<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function store(Request $request)
        {
            // dd($request->all());
            // $data = $request->validate([
            //     'name' =>'required',
            //     'email' =>'required',
            //     'subject'=>'required',
            //     'message'=>'required',
            // ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject'=>$request->subject,
                'message'=>$request->message
            ];
            $query = Contact::create($data);
            if($query)
            {
                return redirect()->back()->with('success', 'Message Sent Successfully');
            }
            else{
                return redirect()->back()->with('error','something went wrong');
            }

        }
}
