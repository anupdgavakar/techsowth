
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/blog/blogupdate/'.$result->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">

                  <label >Title</label>
                  <input type="text" class="form-control" name="title"  required="required" value="{!! ucfirst($result->title) !!}"> 

                  
                  </div>
                  <br>
                  <br>

                  
                  <div class="form-group">
                    <label >Header Image</label>
                    <img src="{{ asset('/uploads/blog/' . $result->headerphoto ) }}" width="10%"  onerror="this.src='{{ asset('/uploads/image/noimage.png') }}'" /><br>
                    <input type="file" class="form-control" name="image" accept="image/*">
                  </div>
                  <br>
                  <br>

                  <label >Description</label>
                  <textarea type="text" class="form-control" name="description"  required="required" value="{!! ucfirst($result->description) !!}"></textarea>

                  <br>
                  <br>
                  
                  
                  <div class="form-group">
                    <label >Photo 1</label>
                    <img src="{{ asset('/uploads/blog/' . $result->photo1 ) }}" width="10%"  onerror="this.src='{{ asset('/uploads/image/noimage.png') }}'" /><br>
                    <input type="file" class="form-control" name="photo1" accept="image/*">
                  </div>
                  <br>
                  <br>

                  <div class="form-group">
                    <label >Photo 2</label>
                    <img src="{{ asset('/uploads/blog/' . $result->photo2 ) }}" width="10%"  onerror="this.src='{{ asset('/uploads/image/noimage.png') }}'" /><br>
                    <input type="file" class="form-control" name="photo2" accept="image/*">
                  </div>
                  <br>
                  <br>


                   <div class="form-group">
                    <label >Photo 3</label>
                    <img src="{{ asset('/uploads/blog/' . $result->photo3 ) }}" width="10%"  onerror="this.src='{{ asset('/uploads/image/noimage.png') }}'" /><br>
                    <input type="file" class="form-control" name="photo3" accept="image/*">
                  </div>
                  <br>
                  <br>



                  <div class="form-group">
                  
                  

                  <button type="submit"class="btn btn-success"> Submit</button>
                  <button href="{{ url('blog/bloglist') }}" class="btn btn-danger">Cancal </button>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     


@include('admin.footer')