@extends('admin.layout')
@section('content')



<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Edit Slider</h2>
    </div>
</div>

<section class="pt-4">
    <div class="container-fluid">
        <div class="row gy-4">
            <!-- Basic Form-->
            <div class="col-sm-6 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <form method="post" action="{{route('update_slider')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$slider->id}}">
                            <div class="form-group">
                                <label class="form-label">Title*</label>
                                <input name="title" type="text" class="form-control" value="{{$slider->title}}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label">Description*</label>
                                <input name="description" type="text" class="form-control" value="{{$slider->description}}" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label">Image* (Size: 960 X 600)</label>
                                <input class="form-control" name="images[]" type="file" multiple required>
                                <div class="row">
                                    @foreach ($slider_images as $item)
                                        <div class="col-3">
                                            <img src= "{{URL::to('thumbnail/'.$item->image)}}" width="100">
                                            <a href="{{url('del_slider_img/'.$item->slider_id.'/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                        </div>  
                                    @endforeach
                                </div>
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