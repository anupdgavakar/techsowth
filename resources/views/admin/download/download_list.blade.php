@extends('admin.layout')
@section('content')

<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Download List</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="h4 mb-0">Download List</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{route('add_download')}}" class="btn btn-secondary">Add Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($downloads as $val)
                                    <tr>
                                        <td>{{$val->title}}</td>
                                        <td>{{$val->description}}</td>
                                        <td style="width: 160px;">
                                            <a href="<?php echo url("edit_download/".$val->id) ?>" class="btn btn-primary"> Edit</a>
                                            <a href="<?php echo url("destroy_download/".$val->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td class="text-center" colspan="4">No data found</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection