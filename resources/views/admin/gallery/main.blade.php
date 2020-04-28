@extends('admin.layouts.layout')
@section('content')
<section class="content">
      <div class="container-fluid">
           <div class="clearfix mb-4">
                <a href="{{ route('addimage') }}"><button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add image</button></a>
            </div>     
           <div class="row">
                @foreach($gallery as $value)
                <div class="col-md-4 col-sm-6 text-center">
                    <a href="#" class="portfolio-link">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <a href="{{('dashboard/gallery/delete/'.$value->id)}}" class="del-btn" onclick="return confirm('Delete this item?')"><i class="fas fa-trash-alt fa-4x"></i></a>
                            
                        </div>
                            <img src="uploads/gallery/{{$value->image}}" alt="" class="img-fluid">
                    </div>
                    </a>
                    <div class="portfolio-caption mt-4">
{{--                         <h4 class="font-weight-bold">Threads</h4>
                        <p class="text-muted">Illustration</p> --}}
                    </div>
                </div>
                @endforeach                                           
            </div>
      </div>
</section>
@endsection