@extends('admin.layouts.layout')

@section('content')

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contacted Customers List</h4>
            {{-- <p class="card-description float-md-right">
                <a href="{{route('admin.faq.create')}}" class="btn btn-primary">Add FAQ</a>
            </p> --}}
            <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                    Subject
                </th>
                <th>
                    Message
                </th>

                {{-- <th colspan="2">
                    Action
                </th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                <tr class="table-info">
                    <td>
                        {{$val->id}}
                    </td>
                    <td>
                        {{$val->name}}
                    </td>
                    <td>
                        {{$val->email}}
                    </td>
                    <td>
                        {{$val->subject}}
                    </td>
                    <td>
                        {{$val->message}}
                    </td>
                    {{-- <td>
                        <a href="{{route('admin.faq.edit',$val->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('admin.faq.delete',$val->id)}}" class="btn btn-danger">Delete</a>
                    </td> --}}
                </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
