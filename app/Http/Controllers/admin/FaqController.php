<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::all();
        return view('admin.pages.faq.index',compact('data'));
    }
    public function create()
    {
        return view('admin.pages.faq.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);
        if($data)
        {
            $query = Faq::create($data);
        }
        if($query)
        {
            return redirect()->route('admin.faq.index')->with('success','Faq Added successfully');
        }
        else{
            return redirect()->route('admin.faq.index')->with('error','something went wrong');
        }
    }
    public function edit($id)
    {
        $edit = Faq::find($id);
        return view('admin.pages.faq.edit',compact('edit'));

    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        if($data)
        {
           $query = Faq::where('id',$id)->update($data);
           if($query)
           {
            return redirect()->route('admin.faq.index')->with('success','record updated successfully');
           }
        else{
               return redirect()->route('admin.faq.index')->with('error','something went wrong');
           }
        }
    }
    public function delete($id)
    {
        Faq::find($id)->delete();
        return redirect()->route('admin.faq.index')->with('success','record deleted successfully');
    }
}
