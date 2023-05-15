@extends('admin.layouts.layout')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Sliders</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Frequently Asks Questions? </li>
                </ol>
            </div>
            <h4 class="page-title">Slider Form</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="input-types-preview">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{route('admin.slider.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Slider Name</label>
                                        <input type="text" name="name" id="simpleinput" class="form-control">
                                        @error('name')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" id="example-textarea" rows="5"></textarea>
                                        @error('description')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Upload Image</label>
                                        <input type="file" name="image" example-fileinput" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('admin.slider.index')}}" class="btn btn-light">Cancel</a>
                                </form>
                            </div> <!-- end tab-content-->

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div>
</div>
@endsection
