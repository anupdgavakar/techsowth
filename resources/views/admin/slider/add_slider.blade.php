@extends('admin.layout')
@section('content')



<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Add Slider</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <!-- Basic Form-->
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <form method="post" action="{{route('create_slider')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Title*</label>
                                <input name="title" type="text" class="form-control" value="" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description*</label>
                                <input name="description" type="text" class="form-control" value="" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Single Images* (Size: 960 X 600)</label>
                                <input class="form-control" name="images[]" type="file" multiple required>
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