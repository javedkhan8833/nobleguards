@extends('admin.layouts.layout')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">FAQ's of Noble Guards</h4>
        <p class="card-description">
            Frequnetly Asked Questions Sbout Noble Guards
        </p>
        <form class="forms-sample" action="{{route('admin.faq.update',$edit->id)}}" method="post">
            @csrf
            <input type="hidden" value="{{$edit->id}}">
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" name="title"  value="{{$edit->title}}" class="form-control"  placeholder="Title">
            @error('title')
                <span class="text text-danger"> {{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" name="description" rows="4">{{$edit->description}}</textarea>
          </div>
          @error('description')
              <span class="text text-danger"> {{$message}}</span>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
