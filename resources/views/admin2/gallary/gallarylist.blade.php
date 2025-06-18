
@include('admin.header')
     
           
      <div class="content">
       
        <div class="row">
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Blog List</h4>
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">

                      <a href="{{ url('/gallary/addgallary')}}" class="btn btn-success"> Add Gallary Image</a>
                      <table class="table">
                        <thead class="text-primary">
                          <th>
                            S.no
                          </th>
                          <th>
                            Image
                          </th>

                          <th>
                            Caption
                          </th>
                          <th>
                            Type
                          </th>
                          
                          
                          <th class="text-right">
                            Action
                          </th>
                        </thead>
                        
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
                      {{ $galleries->links() }}
                    </div>

                  </div>
                </div>
                
              </div>
           
            </div>
          </div>
        </div>
      </div>
     

@include('admin.footer')