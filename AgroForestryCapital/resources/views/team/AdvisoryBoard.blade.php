@extends('home-master')
@section('content')
<div class="page">
	<div class="pagediv">
		<h1>Know Us and Be Familiar with US</h1>
		
	</div>
</div>
<div class="container-fluid  content-wrapper">
	<div class="container">
		<div class="row">
			<div class=" col-12 col-sm-12 col-md-6 col-lg-6 board-card">
				<div class="card">
					<img class="card-img-top" src="{{url('public/images/san.jpg')}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-uppercase">Board Name</h5>
						
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
						<div class="board-adiv">
							<ul class="list-unstyled">
								<li><a href="#" class="right">Research Paper</a></li>
								<li><a href="#" class="board-a1">CV</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6  board-card">
				<div class="card">
					<img class="card-img-top" src="{{url('public/images/san.jpg')}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-uppercase">Board Name</h5>
						
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
						<div class="board-adiv">
							<ul class="list-unstyled">
								<li><a href="#" class="right">Research Paper</a></li>
								<li><a href="#" class="board-a1">CV</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6  board-card">
				<div class="card">
					<img class="card-img-top" src="{{url('public/images/san.jpg')}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-uppercase">Board Name</h5>
						
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
						<div class="board-adiv">
							<ul class="list-unstyled">
								<li><a href="#" class="right">Research Paper</a></li>
								<li><a href="#" class="board-a1">CV</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6  board-card">
				<div class="card">
					<img class="card-img-top" src="{{url('public/images/san.jpg')}}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-uppercase">Board Name</h5>
						
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...</p>
						<div class="board-adiv">
							<ul class="list-unstyled">
								<li><a href="#" class="right">Research Paper</a></li>
								<li><a href="#" class="board-a1">CV</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- pagination --}}
	{{-- <div class="container">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</nav --}}>
	</div>
</div>
@endsection