
@include('admin.header')
     
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">

        
             
              <div class="card-body">
                <form action="/update/{{$users->id}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              

               

                  <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" value="{{$users->name}}" name="username">
                  
                  </div>

                  <div class="form-group">
                  <label >Give role</label>
                  <select name="usertype" class="form-control">
                    <option value="admin">Admin</option>  
                    <option value="vendor">Vendor</option>
                  </select>

                  <button type="submit"class="btn btn-success"> Update</button>
                  <button href="/dashboard" class="btn btn-danger">Cancal </button>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
       
        </div>
      </div>
     

@include('admin.footer')