@extends('admin.layout')
@section('content')

<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Speaker List</h2>
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
                                <h3 class="h4 mb-0">Speaker List</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{route('add_speaker')}}" class="btn btn-secondary">Add Speaker</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <!-- <th>Image</th> -->
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($speaker as $val)
                                    <tr>
                                        <!-- <td><img src="<?php echo url("public/upload/".$val->thumbnail);?>" width="60px"></td> -->
                                        <td>{{$val->title}}</td>
                                        <td style="width: 160px;">
                                            <a href="<?php echo url("edit_speaker/".$val->id) ?>" class="btn btn-primary"> Edit</a>
                                            <a href="<?php echo url("destroy_speaker/".$val->id)?>" class="btn  btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete</a>
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