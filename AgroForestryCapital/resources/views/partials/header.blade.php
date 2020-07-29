
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
  </div>
</nav>
 --}}

<header>
	<div class="overlay"></div>
		<nav class="nav-class">
			<div class="nav-bg"></div>
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('aboutus') }}">About</a></li>
				<li><a href="{{ url('expert') }}">Services</a></li>
				<li><a href="{{ url('farmlist') }}">FarmList</a></li>
				<li><a href="{{ url('productlist') }}">ProductList</a></li>
				<li><a href="{{ url('executive-team') }}">Team</a></li>
				<li><a href="{{ url('partners') }}">Partners</a></li>

				<li><a href="{{ url('profile') }}">Login</a></li>
			</ul>
		</nav>
</header >
