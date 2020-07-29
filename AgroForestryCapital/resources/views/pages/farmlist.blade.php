@extends('home-master')
@section('content')

{{-- same for product list --}}

<div class="page">
	<div class="pagediv">
		<h1>FarmList</h1>
		
	</div>
</div>

<div class="containerfluid content-wrapper">
	<div class="container-fluid">
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
			<div class="col-md-5 col-4 col-sm-4 col-lg-5">
				<h5 class="text-uppercase">Description</h5>
			</div>
			
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="farmlist-headerinfo">
		<div class="row">
			<div class="col-md-4">
				<div class="farm-image">
					<img src="{{ url('public/images/san.jpg') }}">

				</div>
				<h5 class="farm-name">Farm Name</h5>
				
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
			<div class="col-md-5">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
			</div>
			
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="farmlist-headerinfo">
		<div class="row">
			<div class="col-md-4">
				<div class="farm-image">
					<img src="{{ url('public/images/san.jpg') }}">

				</div>
				<h5 class="farm-name">Farm Name</h5>
				
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
			<div class="col-md-5">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
			</div>
			
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="farmlist-headerinfo">
		<div class="row">
			<div class="col-md-4">
				<div class="farm-image">
					<img src="{{ url('public/images/san.jpg') }}">

				</div>
				<h5 class="farm-name">Farm Name</h5>
				
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
			<div class="col-md-5">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum officia excepturi quas a, voluptatibus mollitia totam blanditiis, consequuntur veniam, nam minima sapiente, debitis quisquam enim deserunt sint dolore nihil.</p>
			</div>
			
		</div>
	</div>
</div>
@endsection