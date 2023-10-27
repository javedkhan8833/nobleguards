<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $data = Slider::all();
        return view('admin.pages.slider.index',compact('data'));
    }
    public function create()
    {
        return view('admin.pages.slider.create');
    }
    public function store(Request $request)
    {

        $validation = $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            // 'image'=>'required'
        ]);

        $data = [
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
            // 'created_at'=>date('Y-m-d H:i:s'),
            // 'updated_at'=>date('Y-m-d H:i:s')
        ];
         $query = Slider::insert($data);  //insert function return true or fals (bolean)

        if($query)
        {
            return redirect()->route('admin.slider.index')->with('success','slider Added successfully');
        }
        else{
            return redirect()->route('admin.slider.index')->with('error','something went wrong');
        }
    }
    public function edit($id)
    {
        $edit = Slider::find($id);
        return view('admin.pages.slider.edit',compact('edit'));

    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);
           $query = Slider::where('id',$id)->update($data);
           if($query)
           {
            return redirect()->route('admin.slider.index')->with('success','record updated successfully');
           }
        else{
               return redirect()->route('admin.slider.index')->with('error','something went wrong');
           }

    }
    public function delete($id)
    {
        $slider = Slider::find($id);
            $slider->delete();
            return redirect()->route('admin.slider.index')->with('success','Slider deleted successfully');
    }
}
