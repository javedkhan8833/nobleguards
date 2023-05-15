@extends('admin.layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">About us</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">About Us Form</li>
                </ol>
            </div>
            <h4 class="page-title">ABOUT U</h4>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">About Noble Guards</h4>
                    <p class="text-muted font-14">

                    </p>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="forms-sample" action="{{ route('admin.about.store') }}" method="post">
                                        @csrf

                                        <div class="form-floating mb-3">
                                            <input type="text" name="title" class="form-control" id="floatingInput"
                                                placeholder="Input Your Title Here" />
                                            <label for="floatingInput">Title</label>
                                        </div>
                                        @error('title')
                                            <span class="text text-danger"> {{ $message }}</span>
                                        @enderror
                                        <div class="form-floating">
                                            <textarea class="form-control" name="description" placeholder="Writer your Description here" id="floatingTextarea"
                                                style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Description</label>
                                        </div>
                                        @error('description')
                                            <span class="text text-danger"> {{ $message }}</span>
                                        @enderror

                                        <div class="form-floating">
                                            <textarea class="form-control" name="aim" placeholder="Writer your Aim here" id="floatingTextarea"
                                                style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Aim</label>
                                        </div>
                                        @error('aim')
                                            <span class="text text-danger"> {{ $message }}</span>
                                        @enderror
                                        <div class="form-floating">
                                            <textarea class="form-control" name="values" placeholder="Writer Our Values here" id="floatingTextarea"
                                                style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Our Values</label>
                                        </div>
                                        @error('values')
                                            <span class="text text-danger"> {{ $message }}</span>
                                        @enderror
                                        <div class="form-floating">
                                            <textarea class="form-control" name="why" placeholder="Writer Our Values here" id="floatingTextarea"
                                                style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Why Noble Guards?</label>
                                        </div>
                                        @error('why')
                                            <span class="text text-danger"> {{ $message }}</span>
                                        @enderror
                                        <br>
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                        <a href="{{route('admin.about.index')}}" class="btn btn-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
