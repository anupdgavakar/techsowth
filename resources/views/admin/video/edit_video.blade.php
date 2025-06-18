@extends('admin.layout')
@section('content')

<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Edit Video</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <!-- Basic Form-->
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <form method="post" action="{{route('update_video')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$video->id}}">
                            <div class="form-group">
                                <label class="form-label">Video URL*</label>
                                <p>Example: https://www.youtube.com/embed/OizDu5FZ48k</p>
                                <textarea name="url" class="form-control" rows="4" cols="50">{{$video->url}}</textarea>
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