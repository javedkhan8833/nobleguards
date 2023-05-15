@extends('admin.layouts.layout')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Noble Guards</h4>
        <p class="card-description">
           Noble Guards Slider Form
        </p>
        <form class="forms-sample" action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Slider Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Slider Name">
            @error('name')
                <span class="text text-danger"> {{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" rows="4"></textarea>
          </div>
          @error('description')
              <span class="text text-danger"> {{$message}}</span>
          @enderror

          <div class="form-group">
            <label for="exampleInputName1">Slider Image</label>
            <input type="file" name="image" class="form-control"  placeholder="Slider image">
            @error('image')
                <span class="text text-danger"> {{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
