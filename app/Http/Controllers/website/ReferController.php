<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Refer;
use Illuminate\Http\Request;

class ReferController extends Controller
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
                'phone' => $request->phone,
                'referedName'=>$request->referedName,
                'referedEmail'=>$request->referedEmail,
                'referedPhone'=>$request->referedPhone,
            ];
            $query = Refer::create($data);
            if($query)
            {
                return redirect()->back()->with('success', 'Refered Sent Successfully');
            }
            else{
                return redirect()->back()->with('error','something went wrong');
            }

        }
}
