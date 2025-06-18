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
        <h2 class="h5 mb-0">Edit Blog</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <!-- Basic Form-->
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="h4 mb-0">Edit About Us</h3>
                    </div> -->
                    <div class="card-body pt-3">
                        <form method="post" action="{{route('update_blog')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$blog->id}}">
                            
                            <div class="form-group">
                                <label class="form-label">Title*</label>
                                <input name="title" type="text" class="form-control" value="{{$blog->title}}" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Multiple Images* (Size: 960 X 600)</label>
                                <input class="form-control" name="images[]" type="file" multiple>
                                <div class="row">
                                    @foreach ($blog_images as $item)
                                        <div class="col-3">
                                            <img src= "{{URL::to('thumbnail/'.$item->image)}}" width="100">
                                            <a href="{{url('delimg/'.$item->blog_id.'/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                        </div>  
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control add_editor" rows="4" cols="50">{{$blog->description}}</textarea>
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