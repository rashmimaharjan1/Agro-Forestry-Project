@extends('home-master')
@section('content')

<div class="hero text-center">
		<div class="herodiv">
			<h1>Something Inspiring</h1>
			<a href="#" class="btn btn-header">Read More</a>
		</div>
	</div>

{{-- end of heaer --}}
<div class="container content-wrapper">
	{{-- our features --}}
	<div class="container-fluid padtb mtb">
		<div class="container">
			<div class="feature-wrapper">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
						<div class="icon-div mtb">
							<i class="fas fa-globe-europe"></i>
						</div>
						<p class="p-em">We Connect You to Experts</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.kolor sit amet, consectetur adipisicing elit.k</p>
						
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center">
						<div class="icon-div mtb">
							<i class="fas fa-globe-europe"></i>
						</div>
						<p class="p-em">We Connect You to Experts</p>
						<p>Lorem ipsum dolorolor sit amet, consectetur adipisicing elit.k sit amet, consectetur adipisicing elit.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
{{-- sign up section --}}
<div class="container-fluid bg-gray">
	<div class="container mtb ">
		<div class="sign-wrapper">
			<div class="sign-content mt text-center">
				<div class="icon-divsign mtb">
					<i class="fas fa-2x fa-globe-europe"></i>
				</div>
				<h2>Sign Up Now!!</h2>
				<div class="row sign-imp">
					<div class="col-md-6 col-lg-6 col-sm-6 col-6 offset-md-3 offset-sm-3">
						<div class="icon-div ">
							<i class="fas fa-globe-europe"></i>
						</div>
						
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, impedit.</p>
					</div>
				</div>
				<div class="row sign-imp">
					<div class="col-md-6 col-lg-6 col-sm-6 col-6 offset-md-3 offset-sm-3">
						<div class="icon-div ">
							<i class="fas fa-globe-europe"></i>
						</div>
						
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, impedit.</p>
					</div>
				</div>
			</div>
			<div class="sign-btn text-center mb">
				<a href="#" class="btn btn-sign">Sign Up Here</a>
				<p>We will connect to you to our experts, sign up here and explore your business.</p>
			</div>
		</div>
	</div>
</div>
{{-- about us  --}}
<div class="container mtb">
	<div class="about-wrapper">
		<div class="row">
			<div class="col-md-5">
				<div class="about-image">
					<img src="{{ url('public/images/san.jpg')}}" class="img-fluid">
				</div>
			</div>
			<div class="col-md-7 about-content">
				<h2>Be Familiar With US and Know About Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, possimus!sit amet, consectetur adipisicing elit. Consequuntur excepturi </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur excepturi dolor ipsa laboriosam reprehenderit corporis repellendus fugit totam pariatur eum?sit amet, consectetur adipisicing elit. Consequuntur excepturi sit amet, consectetur adipisicing elit. Consequuntur excepturi </p>
			</div>
		</div>
	</div>
</div>
{{-- team --}}
<div class="container-fluid bg-gray">
	<div class="container team-wrapper">
		<div class="row ">
			
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="executive-con">
					<div class="executive-card">
						<div class="executive-front">
							<div class="executive-title">
								<h5>Pratima Subedi</h5>
								<h6>Designation</h6>
								
								<div class="executive-photo">
									<img class="img-fluid" src="{{url('public/images/g1.jpg')}}">
								</div>
								
							</div>
							<div class="executive-back text-center">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								</p>
								<div class="executive-social-icons">
									<i class="fas fa-globe-europe fa-2x"></i>
									<i class="fas fa-globe-europe fa-2x"></i>
									<i class="fas fa-globe-europe fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="executive-con">
					<div class="executive-card">
						<div class="executive-front">
							<div class="executive-title">
								<h5>Pratima Subedi</h5>
								<h6>Designation</h6>
								
								<div class="executive-photo">
									<img class="img-fluid" src="{{url('public/images/g1.jpg')}}">
								</div>
								
							</div>
							<div class="executive-back text-center">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								</p>
								<div class="executive-social-icons">
									<i class="fas fa-globe-europe fa-2x"></i>
									<i class="fas fa-globe-europe fa-2x"></i>
									<i class="fas fa-globe-europe fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="executive-con">
					<div class="executive-card">
						<div class="executive-front">
							<div class="executive-title">
								<h5>Pratima Subedi</h5>
								<h6>Designation</h6>
								
								<div class="executive-photo">
									<img class="img-fluid" src="{{url('public/images/g1.jpg')}}">
								</div>
								
							</div>
							<div class="executive-back text-center">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								</p>
								<div class="executive-social-icons">
									<i class="fas fa-globe-europe fa-2x"></i>
									<i class="fas fa-globe-europe fa-2x"></i>
									<i class="fas fa-globe-europe fa-2x"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</div>
{{-- farm list --}}
<div class="container-fluid bg-green">
	<div id="wrapper">
		<div id="carousel">
			<img src="{{url('public/images/san.jpg')}}" width="100%" height="560" />
			<img src="{{ url('public/images/shoes.jpg')}}" width="100%" height="560" />
			<img src="{{url('public/images/san.jpg')}}" width="100%" height="560" />
			<img src="{{ url('public/images/san.jpg')}}" width="100%" height="560" />
		</div>
		<div id="overlay">
			<div id="description">
				<h3>Farm List Title</h3>
				<p>The Chechen leader, Ramzan Kadyrov, has held a star-studded party in his capital Grozny - but denied it was anything to do with his 35th birthday.</p>
				<p>Oscar-winning actor Hilary Swank and action star Jean-Claude van Damme have been criticised for attending the lavish party. Kadyrov is linked to a grim record of abuse. When stars get paid to turn up to party with him, it trivializes the suffering of countless victims of human rights abuses.</p>
				<div class="farm-div">
					<a href="#" class="farm-btn">Read More</a>
				</div>
				<div id="pager"></div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-gray">
	<div class="container ">
	<div class="product-wrapper">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-12 col-lg-5">
				<div class="product-image">
					<img src="{{ url('public/images/san.jpg')}}" class="img-fluid">
				</div>
				
			</div>
			<div class="col-md-7 col-sm-12 col-12 col-lg-7 product-content">
				<h2>The Story of  Our Product</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, possimus!sit amet, consectetur adipisicing elit. Consequuntur excepturi </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur excepturi dolor ipsa laboriosam reprehenderit corporis repellendus fugit totam pariatur eum?sit amet, consectetur adipisicing elit. Consequuntur excepturi sit amet, consectetur adipisicing elit. Consequuntur excepturi </p>
				<div class="product-adiv text-right">
					<a href="#" class="btn product-btn">Read More</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="container">
	<div class="product-wrapper">
		<div class="row">
			
			<div class="col-md-7 col-sm-12 col-12 col-lg-7 product-content">
				<h2>The Story of  Our Product</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, possimus!sit amet, consectetur adipisicing elit. Consequuntur excepturi </p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur excepturi dolor ipsa laboriosam reprehenderit corporis repellendus fugit totam pariatur eum?sit amet, consectetur adipisicing elit. Consequuntur excepturi sit amet, consectetur adipisicing elit. Consequuntur excepturi </p>
				<a href="#" class="btn product-btn">Read More</a>
			</div>
			<div class="col-md-5 col-sm-12 col-12 col-lg-5">
				<div class="product-image">
					<img src="{{ url('public/images/san.jpg')}}" class="img-fluid">
				</div>
				
			</div>
		</div>
	</div>
</div>
{{-- counter --}}
<div class="container-fluid wedo-counter mt">
	<div class="container">
		<div class="">
			<div class="row ">
				<div class="col-md-3 col-lg-3 col-sm-12 col-12 number-count">
					<div class="row text-center">
						<div class="col-md-3 col-sm-3">
							<i class="fas fa-globe-europe count-icon fa-3x" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-sm-9">
							<span class="count">5</span>
							<label>Projects</label>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-12 number-count">
					<div class="row text-center">
						<div class="col-md-3 col-sm-3">
							<i class="fa fa-user count-icon fa-3x" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-sm-9">
							<span class="count">10</span>
							<label>Satisfied Clients</label>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-12 number-count">
					<div class="row text-center">
						<div class="col-md-3 col-sm-3">
							<i class="fas fa-globe-europe count-icon fa-3x" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-sm-9">
							<span class="count">300</span>
							<label>Working Days</label>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12 col-12 number-count">
					<div class="row text-center">
						<div class="col-md-3 col-sm-3">
							<i class="fa fa-users count-icon fa-3x" aria-hidden="true"></i>
						</div>
						<div class="col-sm-9 col-sm-9">
							<span class="count">7</span>
							<label>Members</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- blog --}}
<div class="container-fluid bg-gray pad-0">
	<div class="owl-carousel owl-theme">
		<div class="item">
			{{-- blog content --}}
			<div class="row">
				<div class="col-md-6">
					<div class="blog-img">
						<img src="{{url('public/images/shoes.jpg')}}" class="img-responsive" alt="blog1-image">
					</div>
				</div>
				<div class="col-md-6">
					<div class="blog-pad">
						<div class="blog-title-pad">
							<h4>Title of the Blog</h4>
							<span class="font-italic">Baisakh 24, 2075</span>
						</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. </p> <p>Duis aute irure dolor in reprehenderit in voluptate velit esse voluptate velit esse</p>
					</div>
					<div class="blog-btn text-right">
						<a href="{{url('blogpage-detail')}}" class="btn ">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			{{-- blog content --}}
			<div class="row">
				<div class="col-md-6">
					<div class="blog-img">
						<img src="{{url('public/images/san.jpg')}}" class="img-responsive" alt="blog1-image">
					</div>
				</div>
				<div class="col-md-6">
					<div class="blog-pad">
						<div class="blog-title-pad">
							<h4>Title of the Blog</h4>
							<span class="font-italic">Baisakh 24, 2075</span>
						</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. </p> <p>Duis aute irure dolor in reprehenderit in voluptate velit esse voluptate velit esse</p>
					</div>
					<div class="blog-btn text-right">
						<a href="{{url('blogpage-detail')}}" class="btn ">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


{{-- acheivement --}}
<div class="contianer-fluid mtb">
	<div class="container">
			<div class="achievement-wrapper text-center">
				<div class="icon-divsign mtb">
				<i class="fas fa-2x fa-globe-europe"></i>
			</div>
			<h2>Check Out Our Acheivement We have achieved in past years</h2>

			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card__content">
							
							<div class="card__front">
								<h3 class="card__title">The Fair</h3>
								<p class="card__subtitle">Time for some fun</p>
							</div>
							
							<div class="card__back">
								<p class="card__body">This would be some longer text that gives a description of the things from the other side I guess</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card__content">
							
							<div class="card__front">
								<h3 class="card__title">The Fair</h3>
								<p class="card__subtitle">Time for some fun</p>
							</div>
							
							<div class="card__back">
								<p class="card__body">This would be some longer text that gives a description of the things from the other side I guess</p>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
</div>

{{-- company --}}
<div class="container-fluid bg-gray mt">
	<div class="company-head">
		<h2>Some of Our Partnership Companies with Communicate With</h2>
		<div class="row">
			<div class="company-wrapper col-md-3 col-lg-3 col-12 col-sm-12">
				<div class="company-image">
					<img src="{{ url('public/images/logo2.png') }}">
				</div>
			</div>
			<div class="company-wrapper col-md-3 col-lg-3 col-12 col-sm-12">
				<div class="company-image">
					<img src="{{ url('public/images/logo2.png') }}">
				</div>
			</div>
			<div class="company-wrapper col-md-3 col-lg-3 col-12 col-sm-12">
				<div class="company-image">
					<img src="{{ url('public/images/logo2.png') }}">
				</div>
			</div>
			<div class="company-wrapper col-md-3 col-lg-3 col-12 col-sm-12">
				<div class="company-image">
					<img src="{{ url('public/images/logo2.png') }}">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection