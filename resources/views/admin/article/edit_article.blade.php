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
        <h2 class="h5 mb-0">Edit Article</h2>
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
                        <form method="post" action="{{route('update_article')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$article->id}}">
                            <!-- <div class="form-group" style="margin-top: 15px;">
                                <label>Meta Title</label>
                                <input type="text" name="metatitle" value="{{$blog->metatitle}}" class="form-control" placeholder="">  
                            </div>
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input type="text" name="metakeywords" value="{{$blog->metakeywords}}" class="form-control" placeholder=""> 
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="metadescription" class="form-control" rows="4" cols="50">{{$blog->metadescription}}</textarea> 
                            </div> -->
                            <div class="form-group">
                                <label class="form-label">Title*</label>
                                <input name="title" type="text" class="form-control" value="{{$article->title}}" required>
                            </div>
                            <!-- <div class="form-group">
                                <label class="form-label">Tags*</label>
                                <input name="tags" type="text" class="form-control" value="{{$blog->tags}}" required>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="form-label">Thumbnail* (Size: 500 X 340)</label>
                                <input class="form-control" name="thumbnail" type="file">
                                <input name="thumbnail_oldimage" type="hidden" value="{{$blog->thumbnail}}">
                                @if($blog->thumbnail)
                                    <img src="<?php echo url("public/upload/".$blog->thumbnail);?>" width="100">
                                @endif
                            </div> -->
                            <div class="form-group">
                                <label class="form-label">Multiple Images* (Size: 960 X 600)</label>
                                <input class="form-control" name="images[]" type="file" multiple>
                                <div class="row">
                                    @foreach ($article_images as $item)
                                        <div class="col-3">
                                            <img src= "{{URL::to('thumbnail/'.$item->image)}}" width="100">
                                            <a href="{{url('delimg/'.$item->article_id.'/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                        </div>  
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control add_editor" rows="4" cols="50">{{$article->description}}</textarea>
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