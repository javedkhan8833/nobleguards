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
                                <form action="{{route('admin.course.store')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Course Name</label>
                                        <input type="text" name="name" class="form-control">
                                        @error('name')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Course Title</label>
                                        <textarea name="title" class="form-control" id="example-textarea" rows="5"></textarea>
                                        @error('title')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Course Sub-Title</label>
                                        <textarea name="sub_title" class="form-control" id="example-textarea" rows="5"></textarea>
                                        @error('sub_title')
                                        <span class="text text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="row">

                                        <div class="mb-3 col-md-5">
                                        <label for="inputState" class="form-label">Duration</label>
                                        <select name="duration" class="form-select">
                                            <option>Select Course Duration</option>
                                            <option>1 Day</option>
                                            <option>2 Day</option>
                                            <option>3 Day</option>
                                            <option>4 Day</option>
                                            <option>5 Day</option>
                                            <option>6 Day</option>
                                            <option>7 Day</option>
                                            <option>8 Day</option>
                                            <option>9 Day</option>
                                            <option>10 Day</option>
                                            <option>11 Day</option>
                                            <option>12 Day</option>
                                            <option>13 Day</option>
                                            <option>14 Day</option>
                                            <option>15 Day</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-5">
                                        <label for="simpleinput" class="form-label">Course Price</label>
                                        <input type="number" name="price" step="1" class="form-control">
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
                                        <input type="checkbox"  id="toggleCheckbox">
                                        <label for="toggleCheckbox">To be Confirm:</label>
                                        <input type="checkbox" name="tbc" id="toggleCheckbox">
                                    </div>

                                    </div>
                                    <div id="dates" style="display: none;">
                                        {{-- <label>Please indicate the number of attendees in your group including yourself.
                                            <select id="participants" class="input-mini required-entry">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                            </select></label> --}}

                                        <table class="table table-hover" id="participantTable">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th>Name</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tr class="participantRow">
                                                    <td>&nbsp;</td>
                                                    <td><input type="date" name="upcomingDates[]"  class="form-control"></td>
                                                    {{-- <td>
                                                        <select name="" id="" class="required-entry">
                                                            <option value=""></option>
                                                        </select>
                                                    </td> --}}
                                                    <td><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                </tr>
                                                <tr id="addButtonRow">
                                                    <td colspan="4"><center><button class="btn btn-large btn-success add" type="button">Add</button></center></td>
                                                </tr>
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
  $("#toggleCheckbox").change(function() {
    if ($(this).is(":checked")) {
      $("#dates").show();
    } else {
      $("#dates").hide();
    }
  });
});

    /* Variables */

var p = $("#participants").val();
var row = $(".participantRow");

/* Functions */
function getP(){
  p = $("#participants").val();
}

function addRow() {
  row.clone(true, true).appendTo("#participantTable");
}

function removeRow(button) {
  button.closest("tr").remove();
}
/* Doc ready */
$(".add").on('click', function () {
  getP();
  if($("#participantTable tr").length < 17) {
    addRow();
    var i = Number(p)+1;
    $("#participants").val(i);
  }
  $(this).closest("tr").appendTo("#participantTable");
  if ($("#participantTable tr").length === 3) {
    $(".remove").hide();
  } else {
    $(".remove").show();
  }
});
$(".remove").on('click', function () {
  getP();
  if($("#participantTable tr").length === 3) {
    //alert("Can't remove row.");
    $(".remove").hide();
  } else if($("#participantTable tr").length - 1 ==3) {
    $(".remove").hide();
    removeRow($(this));
    var i = Number(p)-1;
    $("#participants").val(i);
  } else {
    removeRow($(this));
    var i = Number(p)-1;
    $("#participants").val(i);
  }
});
$("#participants").change(function () {
  var i = 0;
  p = $("#participants").val();
  var rowCount = $("#participantTable tr").length - 2;
  if(p > rowCount) {
    for(i=rowCount; i<p; i+=1){
      addRow();
    }
    $("#participantTable #addButtonRow").appendTo("#participantTable");
  } else if(p < rowCount) {
  }
});
</script>
@endsection
