
@extends('home-master')
@section('content')


<div class="page">
	<div class="pagediv">
		<h1>Know Us and Be Familiar with US</h1>
		
	</div>
</div>

{{-- company --}}
<div class="container-fluid bg-gray content-wrapper">
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