@extends('admin.layouts.layout')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">FAQ's of Noble Guards</h4>
        <p class="card-description">
           Frequnetly Asked Questions Sbout Noble Guards
        </p>
        <form class="forms-sample" action="{{route('admin.faq.store')}}" method="post">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Question</label>
            <input type="text" name="title" class="form-control"  placeholder="Qustion?">
            @error('title')
                <span class="text text-danger"> {{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Answer</label>
            <textarea class="form-control" name="description" rows="4"></textarea>
          </div>
          @error('description')
              <span class="text text-danger"> {{$message}}</span>
          @enderror
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
