@extends('admin.layout')
@section('content')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<style>
    .tox-notifications-container {
        display: none !important;
    }
</style>

<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Add Gallery</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <!-- Basic Form-->
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <form method="post" action="{{route('create_gallery')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Title*</label>
                                <input name="title" type="text" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Multiple Images* (Size: 960 X 600)</label>
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

<script>
    tinymce.init({
        selector: '.add_editor',
        menubar:false,
        statusbar: false
    });
</script>

@endsection