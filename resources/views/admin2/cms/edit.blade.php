
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/cms/update/'.$result->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              

               
                  <div class="form-group">
                  <label >Title</label>
                    <input type="text" class="form-control" name="title" value="{!! ucfirst($result->title) !!}" required="required"> 

                  
                  </div>
                  <div class="form-group">
                  <label >Image</label>
                  <img src="{{ asset('/uploads/cms/' . $result->image ) }}" width="20%"  onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'" /><br>
                  <input type="file" class="form-control" name="image" accept="image/*">

                  
                  </div>

                  <div class="form-group">
                  <label >Type</label>
                  <select name="type" class="form-control">
                    <option value="cms" {{ $result->type == 'cms' ? 'selected' : '' }}>Cms</option>
                  </select>

                  <button type="submit"class="btn btn-success"> Update</button>
                  <button href="{{ url('cms/list') }}" class="btn btn-danger">Cancal </button>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     

@include('admin.footer')