 @include('admin.header')

 
     
      <div class="content">
       
        <div class="row">
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Image List</h4>
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>
                            S.no
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Type
                          </th>
                          <th class="text-right">
                            Action
                          </th>
                        </thead>
                        
                        <tbody>
                          @if($datas)
                              @foreach ($datas as $key=>$data)
                                  <tr>
                                    <td>
                                     {{$key + 1}}
                                    </td>
                                    <td>
                                       <img src="{{ asset('/uploads/image/' . $data->image ) }}" height="100" width="100" onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'">
                                    </td>
                                    <td>
                                     {{ ucfirst($data->type) }}
                                    </td>
                                    
                                    <td class="text-right">
                                     <a href="{{ url('image/edit/'.$data->id ) }}" class="btn btn-success">Edit</a>
                                     <a href="{{ url('image/delete/'.$data->id ) }}" class="btn btn-danger">delete</a>
                                    </td>
                                  </tr>
                              @endforeach
                          @else
                              <tr>Data not found</tr>
                          @endif
                       
                        </tbody>

                      </table>
                      {{ $datas->links() }}
                    </div>

                  </div>
                </div>
                
              </div>
           
            </div>
          </div>
        </div>
      </div>
     @include('admin.footer') 