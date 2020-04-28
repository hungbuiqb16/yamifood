@extends('admin.layouts.layout')
@section('content')
<section class="content">
      <div class="container-fluid">
           <div class="clearfix mb-4">
                <a href="{{ route('addpreview') }}"><button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add preview</button></a>
            </div>     
            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List preview</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered" style="width: 100%">
                  <thead>
                    <tr>
                        <th style="width: 3%">#ID</th>
                        <th style="width: 15%">Customer Name</th>
                        <th style="width: 11%">Avatar</th>
                        <th style="width: 35%">Content</th>  
                        <th style="width: 14%">Jobs</th>  
                        <th style="width: 7%">Status</th>           
                        <th style="width: 18%">Action</th>
                    </tr>
                  </thead>
                        @foreach($preview as $value)
                        <tbody>
                          <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name_customer}}</td>
                            <td><img src="uploads/previews/{{$value->avatar}}" style="height: 100px; width: auto; display: block; margin: auto;"></td>
                            <td>{{$value->content}}</td>
                            <td>{{$value->job_customer}}</td>
                            <td>
                            @if($value->status == 0)
                                 <a href="{{url('dashboard/preview/updatepreviewstatus/'.$value->id)}}"><span class="badge badge-success">Active</span></a>
                            @else
                                 <a href="{{url('dashboard/preview/updatepreviewstatus/'.$value->id)}}"><span class="badge badge-dark">Inactive</span></a>
                            @endif    
                            </td>         
                            <td>
                                <a href="{{{('dashboard/preview/edit/'.$value->id)}}}">
                                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                </a>
                                <a href="{{{('dashboard/preview/delete/'.$value->id)}}}" onclick="return confirm('Delete this item?')">
                                    <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                </a>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                </table>
              </div>
             <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
            </div>
      </div>
</section>
@endsection