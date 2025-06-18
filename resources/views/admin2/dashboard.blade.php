 @include('admin.header')
    <div class="content">
      <div class="row">
        <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        User Type
                      </th>
                      <th class="text-right">
                        Edit
                      </th>
                       <th class="text-right">
                        Delete
                      </th>
                    </thead>

                       <tbody>
                     @if($users)
                     @foreach ($users as $key=>$data)
                      <tr>
                        <td>
                        {!! ucfirst($data->id) !!}
                         
                        </td>
                        <td>
                         {!! ucfirst($data->name) !!}
                        
                        </td>
                        <td>
                         {!! ucfirst($data->phone) !!}
                         
                        </td>
                        <td>
                         {!! ucfirst($data->email) !!}
                         
                        </td>
                        <td>
                         {!! ucfirst($data->usertype) !!}
                      
                        </td>
                        
                        <td class="text-right">
                         <a href="/update/{{$data->id}}" class="btn btn-success">Edit</a>
                        </td>

                        
                        
                        <td class="text-right">
                         <a href="/dashboard" class="btn btn-danger">delete</a>
                        </td>
                      </tr>

                     
                      @endforeach
                          @else
                              <tr>Data not found</tr>
                          @endif
                   
                    </tbody>

                   
                  </table>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>
        </div>
      </div>
 
    

     @include('admin.footer')