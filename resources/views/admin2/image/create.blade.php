
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/image/store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              

               <div class="form-group">
                  

                  <div class="form-group">
                  <label >Image</label>
                  <input type="file" class="form-control" name="image" accept="image/*" required="required"> 

                  
                  </div>

                  <div class="form-group">
                  <label >Type</label>
                  <select name="type" class="form-control" required="required">
                    <option value="slider">Slider</option>  
                    <option value="banner">Banner</option>
                  </select>

                  <button type="submit"class="btn btn-success"> Submit</button>
                  <button href="{{ url('image/list') }}" class="btn btn-danger">Cancal </button>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     

@include('admin.footer')