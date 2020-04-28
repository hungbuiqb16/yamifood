@include('index.layouts.header')
@include('index.layouts.slide')

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="{{asset('index/images/about-img.jpg')}}" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span>Yamifood Restaurant</span></h1>
					<h4>Little Story</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-left">
				<p class="lead ">
					" If you're not the one cooking, stay out of the way and compliment the chef. "
				</p>
				<span class="lead">Michael Strahan</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box" id="menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Special Menu</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".drinks">Drinks</button>
						<button data-filter=".lunch">Lunch</button>
						<button data-filter=".dinner">Dinner</button>
					</div>
				</div>
			</div>
		</div>
			
		<div class="row special-list">

			{{-- drinks --}}
			@foreach($pd_drinks as $value)
			<div class="col-lg-4 col-md-6 special-grid drinks">
				<div class="gallery-single fix">
					<img src="uploads/products/{{$value->image}}" class="img-fluid" alt="Image">
					<div class="why-text">
						<h4>{{ $value->name}}</h4>
						<p>{{ $value->desc}}</p>
						<h5> ${{$value->price}}</h5>
					</div>
				</div>
			</div>
			@endforeach

			{{-- lunch --}}
			@foreach($pd_lunch as $value)			
			<div class="col-lg-4 col-md-6 special-grid lunch">
				<div class="gallery-single fix">
					<img src="uploads/products/{{$value->image}}" class="img-fluid" alt="Image">
					<div class="why-text">
						<h4>{{$value->name}}</h4>
						<p>{{$value->desc}}</p>
						<h5> ${{$value->price}}</h5>
					</div>
				</div>
			</div>
			@endforeach
			
			{{-- dinnder --}}
			@foreach($pd_dinner as $value)
			<div class="col-lg-4 col-md-6 special-grid dinner">
				<div class="gallery-single fix">
					<img src="uploads/products/{{$value->image}}" class="img-fluid" alt="Image">
					<div class="why-text">
						<h4>{{$value->name}}</h4>
						<p>{{$value->desc}}</p>
						<h5> ${{$value->price}}</h5>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->
<div class="gallery-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				@foreach($gallery as $value)
				<div class="col-sm-12 col-md-4 col-lg-4">
					<a class="lightbox" href="uploads/gallery/{{$value->image}}">
						<img class="img-fluid" src="uploads/gallery/{{$value->image}}" alt="Gallery Images">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- End Gallery -->

<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Customer Reviews</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						@foreach($preview as $value)
						<div class="carousel-item text-center @if($value->id == 1) {{'active'}} @endif">
							<div class="img-box p-1 border rounded-circle m-auto">
								<img class="d-block w-100 rounded-circle" src="uploads/previews/{{$value->avatar}}" alt="">
							</div>
							<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">{{$value->name_customer}}</strong></h5>
							<h6 class="text-dark m-0">{{$value->job_customer}}</h6>
							<p class="m-0 pt-3">{{$value->content}}</p>
						</div>
						@endforeach
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- End Customer Reviews -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-volume-control-phone"></i>
				<div class="overflow-hidden">
					<h4>Phone</h4>
					<p class="lead">
						+84 123-456-4590
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-envelope"></i>
				<div class="overflow-hidden">
					<h4>Email</h4>
					<p class="lead">
						hungbuiqb16@gmail.com
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<i class="fa fa-map-marker"></i>
				<div class="overflow-hidden">
					<h4>Location</h4>
					<p class="lead">
						40 Hoa An, Cam Le St, VN
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Contact info -->

@include('index.layouts.footer')