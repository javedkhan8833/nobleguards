@extends('admin.layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">FAQs</a></li>
                    <li class="breadcrumb-item active">FAQs</li>
                </ol>
            </div>
            <h4 class="page-title">FAQs</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">

                    <div class="col-sm-8">
                        <div class="text-sm-start">
                            {{-- <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog-outline"></i></button> --}}
                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="{{route('admin.faq.create')}}"
                            class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add FAQ</a>
                    </div>
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
                              Question ?
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

                        @foreach ($data as  $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{$value->description }}</td>

                                <td class="d-flex gap-2 pb-4">
                                    <a href="{{ route('admin.faq.edit', $value->id) }}" class="action-icon"> <i
                                            class="mdi mdi-square-edit-outline"></i></a>
                                    <form action="{{ route('admin.faq.delete', $value->id) }}" method="post">
                                        @csrf

                                        <button type="submit" class="action-icon" style="border: none"
                                            onclick="return confirm('Are you sure to delete this?')"> <i
                                                class="mdi mdi-delete"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

@endsection
