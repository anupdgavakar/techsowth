
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="{{ url('/gallary/gallaryupdate/'.$result->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              
                  <div class="form-group">
                    <label >Photo</label>
                    <img src="{{ asset('/uploads/gallary/' . $result->photo ) }}" width="10%"  onerror="this.src='{{ asset('/uploads/image/noimage.png') }}'" /><br>
                    <input type="file" class="form-control" name="image" accept="image/*">
                  </div>
                  <br>
                  

                  <label >Caption</label>
                  <input type="text" class="form-control" name="caption"  required="required" value="{!! ucfirst($result->caption) !!}"></input>

                  
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
                  <button href="" class="btn btn-danger">Cancal </button>
                  
                  </div>


                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     


@include('admin.footer')