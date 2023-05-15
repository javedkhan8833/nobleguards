@extends('admin.layouts.layout')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">FAQs</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Frequently Asks Questions? </li>
                </ol>
            </div>
            <h4 class="page-title">FAQs Form</h4>
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
                                <form action="{{route('admin.faq.update',$edit->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$edit->id}}">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Question ?</label>
                                        <input type="text" name="title" value="{{$edit->title}}" id="simpleinput" class="form-control">
                                        @error('title')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Answer</label>
                                        <textarea name="description" class="form-control" id="example-textarea" rows="5">{{$edit->description}}</textarea>
                                        @error('description')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{route('admin.faq.index')}}" class="btn btn-light">Cancel</a>
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
