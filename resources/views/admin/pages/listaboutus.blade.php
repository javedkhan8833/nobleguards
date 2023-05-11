@extends('admin.layouts.layout')

@section('content')

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">About Us</h4>
            <p class="card-description float-md-right">
                <a href="{{route('admin.about.create')}}" class="btn btn-primary">Add About Us</a>
            </p>
            <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Title
                </th>
                <th>
                  Description
                </th>
                <th>
                  Aim
                </th>
                <th>
                  Values
                </th>
                <th>
                    Why?
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
                        {{$val->aim}}
                    </td>
                    <td>
                        {{$val->values}}
                    </td>
                    <td>
                        {{$val->why}}
                    </td>
                    <td>
                        <a href="{{route('admin.about.edit',$val->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('admin.about.delete',$val->id)}}" class="btn btn-danger">Delete</a>
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
