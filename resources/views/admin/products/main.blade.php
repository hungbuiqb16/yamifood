@extends('admin.layouts.layout')
@section('content')
<section class="content">
      <div class="container-fluid">
           <div class="clearfix mb-4">
                <a href="{{ route('addproduct') }}"><button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add product</button></a>
            </div>     
            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List product</h3>

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
                        <th style="width: 10%">Name</th>
                        <th style="width: 20%">Image</th>
                        <th style="width: 29%">Description</th>  
                        <th style="width: 10%">Menu</th>  
                        <th style="width: 7%">Price</th>           
                        <th style="width: 18%">Action</th>
                    </tr>
                  </thead>
                        @foreach($product as $value)
                        <tbody>
                          <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td><img src="uploads/products/{{$value->image}}" style="height: 100px; width: auto; display: block; margin: auto;"></td>
                            <td>{{$value->desc}}</td>
                            <td>
                                @if($value->id_menu == 1)
                                   {{'Drinks'}}
                                @elseif($value->id_menu == 2)
                                   {{'Lunch'}}
                                @else
                                   {{'Dinner'}}
                                @endif

                            </td>
                            <td>{{$value->price}}</td>         
                            <td>
                                <a href="{{{('dashboard/product/edit/'.$value->id)}}}">
                                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                </a>
                                <a href="{{{('dashboard/product/delete/'.$value->id)}}}" onclick="return confirm('Xóa sản phẩm này?')">
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