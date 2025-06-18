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

                      <a href="{{ url('blog/blogcreate')}}" class="btn btn-success"> Add Blog</a>
                      <table class="table">
                        <thead class="text-primary">
                          <th>
                            S.no
                          </th>
                          <th>
                            Image
                          </th>

                          <th>
                            Title
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Image1
                          </th>
                          <th>
                            Image2
                          </th>
                          <th>
                            Image3
                          </th>
                          
                          <th class="text-right">
                            Action
                          </th>
                        </thead>
                        
                        <tbody>
                          @if($blogs)
                              @foreach ($blogs as $key=>$data)
                                  <tr>
                                    <td>
                                     {{$key + 1}}
                                    </td>
                                    <td>
                                       <img src="{{ asset('/uploads/blog/' . $data->headerphoto ) }}" height="100" width="100" onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'">
                                    </td>
                                    <td>
                                     {!! ucfirst($data->title) !!}
                                    </td>
                                    <td>
                                     {!! ucfirst($data->description) !!}
                                    </td>
                                    <td>
                                       <img src="{{ asset('/uploads/blog/' . $data->photo1 ) }}" height="100" width="100" onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'">
                                    </td>
                                    <td>
                                       <img src="{{ asset('/uploads/blog/' . $data->photo2 ) }}" height="100" width="100" onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'">
                                    </td>
                                    <td>
                                       <img src="{{ asset('/uploads/blog/' . $data->photo3 ) }}" height="100" width="100" onerror="this.src='{{ asset('/uploads/image/noimage.png' ) }}'">
                                    </td> 


                                    
                                    <td class="text-right">
                                     <a href="{{ url('blog/blogedit/'.$data->id ) }}" class="btn btn-success">Edit</a>
                                     <a href="{{ url('blog/delete/'.$data->id ) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                  </tr>
                              @endforeach
                          @else
                              <tr>Data not found</tr>
                          @endif
                       
                        </tbody>

                      </table>
                      {{ $blogs->links() }}
                    </div>

                  </div>
                </div>
                
              </div>
           
            </div>
          </div>
        </div>
      </div>
     @include('admin.footer') 