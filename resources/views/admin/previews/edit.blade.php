@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">       
    <div class="col-md-10">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Preview</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach($preview as $value)
            <form class="form-horizontal" role="form" action="{{url('/dashboard/preview/update/'.$value->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Customer Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="name_customer" value="{{$value->name_customer}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Avatar</label>
                        <div class="col-md-9">
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar">
                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                              </div>
                            </div>
                            <img src="/uploads/previews/{{$value->avatar}}" class="mt-2" alt="" style="width: auto; height: 100px">
                            <br>
                            <span>{{$value->avatar}}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 control-label">Content</label>
                         <div class="col-md-9">
                            <textarea id="editor1" name="content" rows="10" cols="80">{{$value->content}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Jobs</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name=" job_customer" value="{{$value->job_customer}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="status">
                                <option value="0" <?php if($value->status == 0) echo 'selected';?>>Active</option>
                                <option value="1" <?php if($value->status == 1) echo 'selected';?>>Inactive</option>
                            </select>
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