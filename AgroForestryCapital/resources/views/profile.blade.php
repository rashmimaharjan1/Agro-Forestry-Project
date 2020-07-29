@extends('home-master')
@section('content')
<div class="container  content-wrapper ">
	<div class="profile-header-wrapper">
		<div class="row">
			<div class="col-12 col-md-4 col-sm-12 col-lg-4">
				<div class="profile-image">
					<img src="{{ url('public/images/shoes.jpg') }}" class="img-fluid">
					<div class="overlay overlayRight">
						<a href="#" class="text">upload</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 col-sm-12 col-lg-4 profile-info1">
				<h3>Rashmi Maharjan</h3>
				<div class="points-earned">
					<span>20</span>
					<p>Points Earned</p>
				</div>
				
				<p>
					{{-- About me --}}
				Student at Kantipur Enginnering College</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem fugiat suscipit saepe quam fuga dolorum laboriosam blanditiis omnis et perferendis.</p>
				<a href="#">Edit </a>
			</div>
			<div class="col-12 col-md-4 col-sm-12 col-lg-4 ">
				
				<div class="profile-info">
					<ul class="list-unstyled text-uppercase">
						<li><a href="#" ><i class="fas fa-user fa-2x"></i> RAshmi Maharjan</a></li>
						<li><a href="#" ><i class="fas fa-map fa-2x"></i> Thecho. Latitpur, Nepal</a></li>
						<li class="text-lowercase"><a href=""mailto:rashmimaharjan1@gmail.com ><i class="fas fa-envelope fa-2x"></i> rashmimaharjan1@gmail.com</a></li>
						<li><a href="#" ><i class="fas fa-mobile fa-2x"></i> 9860666666</a></li>
						<li><a href="#" ><i class="fas fa-sort-numeric-down fa-2x"></i> 2075202020</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid  tab-wrapper">
	<div id="content" class="clearfix">
		<nav id="profiletabs" class="justify-content-center">
			<ul class="clearfix">
				<li><a href="#bio" class="sel">Bio</a></li>
				<li><a href="#plants">Plants</a></li>
				<li><a href="#projects">Project List</a></li>
				<li><a href="#farmlist">Farm List</a></li>
			</ul>
		</nav>
		
		<section class="" id="bio">
			<div class="tablist">
				<div class="embed-responsive embed-responsive-16by9">
					{{-- cv display here --}}
					<iframe class="embed-responsive-item" src="{{ url('public/files/crackfileforoffice2016.txt') }}" allowfullscreen></iframe>
				</div>
				
			</div>
		</section>
		<section class="hidden" id="plants">
			<div class="tablist">
				<div class="productlist-header">
					<div class="row text-center">
						<div class="col-md-5  col-sm-3 col-lg-5	"style="opacity: 1!important">
							<h5 class="text-uppercase">Plant</h5>
						</div>
						<div class="col-md-2  col-sm-4 col-lg-2"style="opacity: 1!important">
							<h5 class="text-uppercase">Type</h5>
						</div>
						
						<div class="col-md-5 col-sm-5 col-lg-5"style="opacity: 1!important">
							<h5 class="text-uppercase">Description</h5>
						</div>
						
					</div>
				</div>
				<div class="productlist-headerinfo">
					<div class="row">
						<div class="col-md-5" style="opacity: 1!important">
							<div class="farm-image" >
								<img src="{{ url('public/images/san.jpg') }}">
							</div>
							<h5 class="farm-name" >Plant Name</h5>
							
						</div>
						
						<div class="col-md-2 text-center" style="opacity: 1!important">
							<i class="fas fa-spa fa-2x"></i>
							<p >Type of Projects</p>
						</div>
						<div class="col-md-5" style="opacity: 1!important">
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
							<a href="{{ url('productlistDetails') }} {{-- map link here --}}" target="_blank">Read More</a>
						</div>
						
					</div>
				</div>
			</section>
			<section class="hidden" id="projects">
				<div class="tablist">
					<div class="productlist-header">
						<div class="row text-center">
							<div class="col-md-5  col-sm-3 col-lg-5	"style="opacity: 1!important">
								<h5 class="text-uppercase">Product</h5>
							</div>
							<div class="col-md-2  col-sm-4 col-lg-2"style="opacity: 1!important">
								<h5 class="text-uppercase">Type</h5>
							</div>
							
							<div class="col-md-5 col-sm-5 col-lg-5"style="opacity: 1!important">
								<h5 class="text-uppercase">Description</h5>
							</div>
							
						</div>
					</div>
					<div class="productlist-headerinfo">
						<div class="row">
							<div class="col-md-5" style="opacity: 1!important">
								<div class="farm-image" style>
									<img src="{{ url('public/images/san.jpg') }}">
								</div>
								<h5 class="farm-name" >Product Name</h5>
								
							</div>
							
							<div class="col-md-2 text-center" style="opacity: 1!important">
								<i class="fas fa-spa fa-2x"></i>
								<p >Type of Projects</p>
							</div>
							<div class="col-md-5" style="opacity: 1!important">
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
								<a href="{{ url('productlistDetails') }} {{-- map link here --}}" target="_blank">Read More</a>
							</div>
							
						</div>
					</div>
					
				</section>
				<section class="hidden" id="farmlist">
					<div class="tablist">
						<div class="farmlist-header">
							<div class="row text-center">
								<div class="col-md-4 col-2 col-sm-2 col-lg-4">
									<h5 class="text-uppercase">Farm</h5>
								</div>
								<div class="col-md-2 col-3 col-sm-3 col-lg-2">
									<h5 class="text-uppercase">Address</h5>
								</div>
								<div class="col-md-1 col-3 col-sm-3 col-lg-1">
									<h5 class="text-uppercase">No. of Plants</h5>
								</div>
								<div class="col-md-5 col-4 col-sm-4 col-lg-5" style="opacity: 1!important">
									<h5 class="text-uppercase">Description</h5>
								</div>
								
							</div>
						</div>
						<div class="farmlist-headerinfo">
							<div class="row">
								<div class="col-md-4 ">
									<div class="farm-image">
										<img src="{{ url('public/images/san.jpg') }}">
									</div>
									<h5 class="farm-name">Product Name</h5>
									
								</div>
								<div class="col-md-2 text-center">
									<i class="fas fa-map-marked-alt fa-2x"></i>
									<p>Address Information</p>
									<a href="# {{-- map link here --}}" target="_blank">Visit This Address</a>
								</div>
								<div class="col-md-1 text-center">
									<i class="fas fa-spa fa-2x"></i>
									<p >200</p>
								</div>
								<div class="col-md-5" style="opacity: 1!important">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
								</div>
								
							</div>
						</div>
					</section>
				</div>
				
			</div>
			<script type="text/javascript">
			$(function(){
			$('#profiletabs ul li a').on('click', function(e){
			e.preventDefault();
			var newcontent = $(this).attr('href');
			$('#profiletabs ul li a').removeClass('sel');
			$(this).addClass('sel');
			$('#content section').each(function(){
			if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
			});
			$(newcontent).removeClass('hidden');
			});
			});
			</script>
			@endsection