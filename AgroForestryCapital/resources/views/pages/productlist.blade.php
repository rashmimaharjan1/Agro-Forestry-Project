@extends('home-master')
@section('content')

{{-- same for product list --}}

<div class="page">
	<div class="pagediv">
		<h1>Product List</h1>
		
	</div>
</div>

<div class="containerfluid content-wrapper">
	<div class="container-fluid">
	<div class="productlist-header">
		<div class="row text-center">
			<div class="col-md-5 col-3 col-sm-3 col-lg-5	">
				<h5 class="text-uppercase">Plant</h5>
			</div>
			<div class="col-md-2 col-4 col-sm-4 col-lg-2">
				<h5 class="text-uppercase">Type</h5>
			</div>
			
			<div class="col-md-5 col-5 col-sm-5 col-lg-5">
				<h5 class="text-uppercase">Description</h5>
			</div>
			
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="productlist-headerinfo">
		<div class="row">
			<div class="col-md-5">
				<div class="productlist-image">
					<img src="{{ url('public/images/san.jpg') }}">

				</div>
				<h5 class="farm-name">Plant Name</h5>
				
			</div>
			
			<div class="col-md-2 text-center">
				<i class="fas fa-spa fa-2x"></i>
				<p >Type of Plant</p>
			</div>
			<div class="col-md-5">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<a href="{{ url('productlistDetails') }} {{-- map link here --}}" target="_blank">Read More</a>
			</div>
			
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="productlist-headerinfo">
		<div class="row">
			<div class="col-md-5">
				<div class="productlist-image">
					<img src="{{ url('public/images/san.jpg') }}">

				</div>
				<h5 class="farm-name">Plant Name</h5>
				
			</div>
			
			<div class="col-md-2 text-center">
				<i class="fas fa-spa fa-2x"></i>
				<p >Type of Plant</p>
			</div>
			<div class="col-md-5">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<a href="{{ url('productlistDetails') }}{{-- map link here --}}" target="_blank">Read More</a>
			</div>
			
		</div>
	</div>
</div><div class="container-fluid">
	<div class="productlist-headerinfo">
		<div class="row">
			<div class="col-md-5">
				<div class="productlist-image">
					<img src="{{ url('public/images/san.jpg') }}">

				</div>
				<h5 class="farm-name">Plant Name</h5>
				
			</div>
			
			<div class="col-md-2 text-center">
				<i class="fas fa-spa fa-2x"></i>
				<p >Type of Plant</p>
			</div>
			<div class="col-md-5">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<a href="{{ url('productlistDetails') }} {{-- map link here --}}" target="_blank">Read More</a>
			</div>
			
		</div>
	</div>
</div>
@endsection