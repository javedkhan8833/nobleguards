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
            'description'=>'required',
            'image'=>'required'
        ]);

        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ];
            if($request->hasFile('image'))
            {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/sliders', $imageName);
            $data['image'] = $imageName;
        }
        else{
            $data['image']=''  ;
        }

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
            'title'=>'required',
            'description'=>'required',
        ]);
        if($data)
        {
           $query = Slider::where('id',$id)->update($data);
           if($query)
           {
            return redirect()->route('admin.slider.index')->with('success','record updated successfully');
           }
        else{
               return redirect()->route('admin.slider.index')->with('error','something went wrong');
           }
        }
    }
    public function delete($id)
    {
        $slider = Slider::find($id);
        if($slider->image)
        {
            if(Storage::exists('public/sliders/'.$slider->image))
            {
                $delete = Storage::delete('public/sliders/'.$slider->image);
            }
            $slider->delete();
            return redirect()->route('admin.slider.index')->with('success','Slider deleted successfully');

        }
    }
}
