
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/main/update/'.$result->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              

               
                  <div class="form-group">
                  <label >Title</label>
                    <input type="text" class="form-control" name="title" value="{!! ucfirst($result->title) !!}" required="required"> 

                  
                  </div>
                  <div class="form-group">
                      <label >Content</label>
                      <textarea id="message" name="content" rows="10" cols="50" onKeyPress class="form-control">{!! ucfirst($result->content) !!}</textarea>
                  </div>
                  <div class="form-group">
                    <label >Image</label>
                    <img src="{{ asset('/uploads/main/' . $result->image ) }}" width="20%"  onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'" /><br>
                    <input type="file" class="form-control" name="image" accept="image/*">
                  </div>

                  <div class="form-group">
                    <label >Image Second</label>
                    <img src="{{ asset('/uploads/main/' . $result->image_second ) }}" width="20%"  onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'" /><br>
                    <input type="file" class="form-control" name="image_second" accept="image/*">
                  </div>

                  <div class="form-group">
                    <label >Image Third</label>
                    <img src="{{ asset('/uploads/main/' . $result->image_third ) }}" width="20%"  onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'" /><br>
                    <input type="file" class="form-control" name="image_third" accept="image/*">
                  </div>

                  <div class="form-group">
                  <label >Type</label>
                  <select name="type" class="form-control">
                    <option value="main" {{ $result->type == 'main' ? 'selected' : '' }}>Main</option> 
                  </select>

                  <button type="submit"class="btn btn-success"> Update</button>
                  <button href="{{ url('main/list') }}" class="btn btn-danger">Cancal </button>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     

@include('admin.footer')