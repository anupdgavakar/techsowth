
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/gallary/gallarystore') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              
                  <div class="form-group">
                  <label >Image</label>
                  <input type="file" class="form-control" name="photo" accept="image/*" required="required" id="fileupload"> 

                  
                  </div>
                  
                  

                  <br>
                  <br>

                  <label >Caption</label>
                  <textarea type="text" class="form-control" name="caption"  required="required"> </textarea>

                  <br>
                  <br>
                  
                  
                  <div class="form-group">
                  <label >Type</label>
                  <select name="type" class="form-control" required="required">

                    <option value="Shabari Mata Kanya Vasatigruh">Shabari Mata Kanya Vasatigruh</option>  
                    <option value="Palavarchi Shala">Palavarchi Shala</option>
                    <option value="Sankrutik Dal">Sankrutik Dal</option>  
                    <option value="Kridakul">Kridakul</option>                 
                     <option value="Eklavya Prarthmik ashram Shala">Eklavya Prarthmik ashram Shala</option>  
                    <option value="Ansarwada Seva Prakalpa">Ansarwada Seva Prakalpa</option>
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