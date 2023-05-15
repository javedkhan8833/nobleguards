@extends('admin.layouts.layout')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">About Noble Guards</h4>
        <p class="card-description">
           Noble Guards Basic Details
        </p>
        <form class="forms-sample" action="{{route('admin.about.update',$edit->id)}}" method="post">
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
          <div class="form-group">
            <label for="exampleTextarea1">Our Aim</label>
            <textarea class="form-control" name="aim"  rows="4">{{$edit->aim}}</textarea>
          </div>
          @error('aim')
              <span class="text text-danger"> {{$message}}</span>
          @enderror
          <div class="form-group">
            <label for="exampleTextarea1">Our Values</label>
            <textarea class="form-control" name="values"    rows="4">{{$edit->values}}</textarea>
          </div>
          @error('values')
              <span class="text text-danger"> {{$message}}</span>
          @enderror
          <div class="form-group">
            <label for="exampleTextarea1">Why Noble Guards?</label>
            <textarea class="form-control" name="why"  rows="4">{{$edit->why}}</textarea>
          </div>
          @error('why')
              <span class="text text-danger"> {{$message}}</span>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
