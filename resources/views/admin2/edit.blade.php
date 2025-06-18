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
                      @foreach($users as $key=>$data)
                      <tr>
                        <td>
                         {{$data->id}}
                        </td>
                        <td>
                         {{$data->name}}
                        </td>
                        <td>
                         {{$data->phone}}
                        </td>
                        <td>
                         {{$data->email}}
                        </td>
                        <td>
                         {{$data->usertype}}
                        </td>
                        
                        <td class="text-right">
                         <a href="/update/{{$user->id}}" class="btn btn-success">Edit</a>
                        </td>

                        
                        
                        <td class="text-right">
                         <a href="/dashboard" class="btn btn-danger">delete</a>
                        </td>
                      </tr>

                     
                     @endforeach
                   
                    </tbody>


                    <tbody>
                          @if($galleries)
                              @foreach ($galleries as $key=>$data)
                                  <tr>
                                    <td>
                                     {{$key + 1}}
                                    </td>
                                    <td>
                                       <img src="{{ asset('/uploads/gallary/' . $data->photo ) }}" height="100" width="100" onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'">
                                    </td>
                                    <td>
                                     {!! ucfirst($data->caption) !!}
                                    </td>
                                    <td>
                                     {!! ucfirst($data->type) !!}
                                    </td>
                                    
                                    
                                    <td class="text-right">
                                     <a href="{{ url('/gallary/gallaryedit/'.$data->id ) }}" class="btn btn-success">Edit</a>
                                     <a href="" class="btn btn-danger">Delete</a>
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