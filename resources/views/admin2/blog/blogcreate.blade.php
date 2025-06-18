
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/blog/blogstore') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">

                  <label >Title</label>
                  <input type="text" class="form-control" name="title"  required="required"> 

                  
                  </div>
                  <br>
                  <br>

                  
                  <label >Header Image</label>
                  <input id="fileupload" type="file" name="headerimage" />

                  <br>
                  <br>

                  <label >Description</label>
                  <textarea type="text" class="form-control" name="description"  required="required"> </textarea>

                  <br>
                  <br>
                  
                  
                   <label > Image 1</label>
                  <input id="fileupload" type="file" name="photo1"/>

                  <br>
                  <br>

                   <label > Image 2 </label>
                  <input id="fileupload" type="file" name="photo2"/>

                  <br>
                  <br>


                   <label > Image 3</label>
                  <input id="fileupload" type="file" name="photo3"/>

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