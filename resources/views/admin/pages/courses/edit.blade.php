@extends('admin.layouts.layout')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Courses</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Courses List </li>
                </ol>
            </div>
            <h4 class="page-title">Course Form</h4>
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
                                <form action="{{route('admin.course.update',$data->id)}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Course Name</label>
                                        <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                        @error('name')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Course Title</label>
                                        <textarea name="title" class="form-control" id="example-textarea" rows="5">{{$data->title}}</textarea>
                                        @error('title')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Course Sub-Title</label>
                                        <textarea name="sub_title" class="form-control" id="example-textarea" rows="5">{{$data->sub_title}}</textarea>
                                        @error('sub_title')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="row">

                                        <div class="mb-3 col-md-5">
                                        <label for="inputState" class="form-label">Duration</label>

                                        <select name="duration" class="form-select">
                                            <option>Select Course Duration</option>
                                            @for($i=1;$i<=15;$i++)
                                            <option @if($i.' Day'==$data->duration) {{'selected'}} @endif>{{$i}} Day</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-5">
                                        <label for="simpleinput" class="form-label">Course Price</label>
                                        <input type="number" name="price" step="1" class="form-control" value="{{$data->price}}">
                                        @error('price')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-2 mt-2">
                                        <label for="inputState" class="form-label">Date Confirmation</label>
                                        {{-- <select name="tbc" class="form-select">
                                            <option>Select Your Choice</option>
                                            <option>To be Confired</option>
                                            <option>Confirm</option>
                                        </select> --}}
                                        <label for="toggleCheckbox">Yes Confirmed</label>
                                        <input type="radio" name="is_confirmed" value="1" id="toggleCheckbox" class="toggleCheckbox" @if(!$data->dates->isEmpty() && count($data->dates)>1) {{'checked'}} @endif>
                                        <label for="toggleCheckbox">To be Confirm</label>
                                        <input type="radio" name="is_confirmed" value="0" id="toggleCheckbox" class="toggleCheckbox" @if($data->dates->isEmpty() || count($data->dates)==1) {{'checked'}} @endif>
                                    </div>

                                    </div>
                                    <div id="dates" style="@if(!$data->dates->isEmpty() && count($data->dates)>1) {{'display: block'}} @else {{'display: none'}} @endif" >
                                        <table class="table table-hover" id="participantTable">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th>Select Date</th>
                                                        <th><button class="btn btn-large btn-success add" type="button">Add</button> </th>
                                                    </tr>
                                                </thead>
                                                @if(!$data->dates->isEmpty() && count($data->dates)>1)
                                                    @foreach ( $data->dates as $kk => $row )


                                                    <tr class="participantRow">
                                                        <td>&nbsp;</td>
                                                        <td><input type="date" value="{{$row->upcoming_date}}" name="upcoming_date[]"  class="form-control upcomingdates"></td>
                                                        <td><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                    </tr>
                                                    @endforeach
                                                @else

                                                <tr class="participantRow">
                                                    <td>&nbsp;</td>
                                                    <td><input type="date" name="upcoming_date[]"  class="form-control upcomingdates"></td>
                                                    {{-- <td>
                                                        <select name="" id="" class="required-entry">
                                                            <option value=""></option>
                                                        </select>
                                                    </td> --}}
                                                    <td><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                </tr>
                                                @endif


                                        </table>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('admin.course.index')}}" class="btn btn-light">Cancel</a>
                                </form>
                            </div> <!-- end tab-content-->

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div>
</div>

<script>
    // upcoming dates form appearence
    $(document).ready(function() {
  $(".toggleCheckbox").click(function() {
    console.log($(this).val());
    if ($(this).val()=="1") {

      $("#dates").show();
    } else {
      $("input.upcomingdates").val('');
      $("#dates").hide();
    }
  });
});

var row = `<tr class="participantRow">
                                                    <td>&nbsp;</td>
                                                    <td><input type="date" name="upcoming_date[]"  class="form-control upcomingdates"></td>
                                                    <td><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                </tr>`;


$(document).on('click','.remove',function(){
$(this).closest('tr').remove();
});

$(".add").on('click', function () {
    $("#participantTable").append(row);
});

</script>
@endsection
