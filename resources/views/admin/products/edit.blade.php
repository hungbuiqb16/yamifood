@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">       
    <div class="col-md-10">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach($product as $value)
            <form class="form-horizontal" role="form" action="{{url('/dashboard/product/update/'.$value->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="name" value="{{$value->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Menu</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="idmenu">
                                <option value="1">Drinks</option>
                                <option value="2">Lunch</option>
                                <option value="3">Dinner</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Image</label>
                        <div class="col-md-9">
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                              </div>
                            </div>
                            <img src="/uploads/products/{{$value->image}}" class="mt-2" alt="" style="width: auto; height: 100px">
                            <br>
                            <span>{{$value->image}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 control-label">Description</label>
                         <div class="col-md-9">
                            <textarea id="editor1" name="desc" rows="10" cols="80">{{$value->desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="price" value="{{$value->price}}">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        {{-- <a href="{{route('listslide')}}"><input name="add" class="btn btn-danger ml-2" value="Cancel"></input></a> --}}
                        <button type="submit" name="add" class="btn btn-info mr-2">Save</button>    
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@push('ckeditor')
    <script src="{{URL::asset('admin/dist/js/ckeditor/ckeditor.js')}}"></script>
@endpush
@endsection