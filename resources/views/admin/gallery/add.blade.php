@extends('admin.layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">       
    <div class="col-md-10">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Add Image</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
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
                        </div>
                    </div>
                    <div class="card-body text-center">
                        {{-- <a href="{{route('listslide')}}"><input name="add" class="btn btn-danger ml-2" value="Cancel"></input></a> --}}
                        <button type="submit" name="add" class="btn btn-info mr-2">Add Image</button>    
                    </div>
                </div>
            </form>
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