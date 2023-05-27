@extends('admin.layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Couses</a></li>
                    <li class="breadcrumb-item active">Couses</li>
                </ol>
            </div>
            <h4 class="page-title">Couses</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">

                    {{-- <div class="col-sm-8">
                        <div class="text-sm-start">
                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-4 text-sm-end">
                        <a href="{{route('admin.course.create')}}"
                            class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Course</a>
                    </div> --}}
                    <!-- end col-->
                </div>
                {{-- <x-alert></x-alert> --}}
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>
                              #
                            </th>
                            <th>
                              Name
                            </th>
                            <th>
                               Sure Name
                            </th>
                            <th>
                                Phone
                            </th>
                              <th>
                                Email
                              </th>
                              <th>
                                Gender
                              </th>
                              <th>
                                Course Name
                              </th>
                            <th>
                                Address
                            </th>
                          </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as  $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->sure_name }}</td>
                                <td>{{ $value->phone_number }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{$value->city }}</td>
                                <td>{{$value->gender }}</td>
                                <td>{{$value->course }}</td>
                                <td>{{$value->address }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

@endsection
