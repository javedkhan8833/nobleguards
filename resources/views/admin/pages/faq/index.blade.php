@extends('admin.layouts.layout')

@section('content')

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Frequently Ask Questions</h4>
            <p class="card-description float-md-right">
                <a href="{{route('admin.faq.create')}}" class="btn btn-primary">Add FAQ</a>
            </p>
            <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Question
                </th>
                <th>
                  Answer
                </th>

                <th colspan="2">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                <tr class="table-info">
                    <td>
                        {{$val->id}}
                    </td>
                    <td>
                        {{$val->title}}
                    </td>
                    <td>
                        {{$val->description}}
                    </td>
                    <td>
                        <a href="{{route('admin.faq.edit',$val->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('admin.faq.delete',$val->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
