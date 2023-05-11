<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = about::all();
        return view('admin.pages.listaboutus',compact('data'));
    }
    public function create()
    {
        return view('admin.pages.about');
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'title'=>'required',
            'description'=>'required',
            'aim'=>'required',
            'values'=>'required',
            'why'=>'required'
        ]);
        if($data)
        {
            $query = about::create($data);
            if($query)
            {
                return redirect()->route('admin.about.index')->with('success','recored added successfully');
            }
            else{
                return redirect()->route('admin.about.index')->with('error','something went wrong');
            }
        }
    }
    public function edit($id)
    {
        $edit = about::find($id);
        return view('admin.pages.edit',compact('edit'));
    }
    public function delete($id)
    {
        about::find($id)->delete();
        return redirect()->route('admin.about.index')->with('success', 'record deleted successfully');

    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([

            'title'=>'required',
            'description'=>'required',
            'aim'=>'required',
            'values'=>'required',
            'why'=>'required'
        ]);

        if($data)
        {
            $query = about::where('id', $id)->update($data);
            if($query)
            {
                return redirect()->route('admin.about.index')->with('success','recored added successfully');
            }
            else{
                return redirect()->route('admin.about.index')->with('error','something went wrong');
            }
        }

    }
}
