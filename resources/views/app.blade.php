@extends('chrome')

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				@if(Auth::guest())
					<a class="navbar-brand" href="{{ url('/') }}"><span class="first-letter">R</span>EADI</a>
				@else
					<a class="navbar-brand" href="{{ url('/books') }}"><span class="first-letter">R</span>eadi</a>
				@endif
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/books') }}">Novel</a></li>
					<li><a href="{{ url('/books') }}">Comic</a></li>
					<li><a href="{{ url('/books') }}">Feed</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<div>
								@if (Auth::guest())
									Guest 
								@else
									{{$user->username}} 
								@endif
								<span class="glyphicon glyphicon-user"></span>
								<span class="caret"></span>
							</div>
						</a>
						<ul class="dropdown-menu">
						@if (Auth::guest())
							<li><a href="{{ url('/login') }}">Login</a></li>
							<li><a href="{{ url('/register') }}">Register</a></li>
						@else
							<li><a href="#">Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="{{ url('/logout') }}">Logout</a></li>
						@endif
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	
</body>