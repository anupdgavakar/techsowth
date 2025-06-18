@extends('admin.layout')
@section('content')

<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Add Download</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <!-- Basic Form-->
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <form method="post" action="{{route('create_download')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Title*</label>
                                <input name="title" type="text" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4" cols="50"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Download File*</label>
                                <input class="form-control" name="file" type="file" required>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection