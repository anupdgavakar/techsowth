
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/image/update/'.$result->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              

               

                  <div class="form-group">
                  <label >Image</label>
                  <img src="{{ asset('/uploads/image/' . $result->image ) }}" width="20%"  onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'" /><br>
                  <input type="file" class="form-control" name="image" accept="image/*">

                  
                  </div>

                  <div class="form-group">
                  <label >Type</label>
                  <select name="type" class="form-control">
                    <option value="slider" {{ $result->type == 'slider' ? 'selected' : '' }}>Slider</option>  
                    <option value="banner" {{ $result->type == 'banner' ? 'selected' : '' }}>Banner</option>
                  </select>

                  <button type="submit"class="btn btn-success"> Update</button>
                  <button href="{{ url('image/list') }}" class="btn btn-danger">Cancal </button>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     

@include('admin.footer')