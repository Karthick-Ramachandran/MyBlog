<!DOCTYPE HTML>

<html>
	<head>
		<title>{{ $title }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>This is<br />
						Massively</h1>
						<p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
						<ul class="actions">
							<li><a href="#header" class=" button icon solo fa-arrow-down scrolly ">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="/" class="logo">Massively</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="/">Home</a></li>
							@foreach ($categories as $category)
							<li><a href="">{{ $category->name }}</a></li>

							@endforeach
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">  {{ $first_post->created_at->format('F d, D , Y') }}</span>
									<h2><a href="{{ route('page.show', ['slug' => $first_post->slug])}}"> &nbsp; &nbsp;{{ $first_post->title }}   </a> </h2>
									 &nbsp; &nbsp; &nbsp; &nbsp;<span>	Posted ( {{ $first_post->created_at->diffForHumans() }} ) </span> <br/>
									 <a href="#" class="image fit"><img src="" alt="" /></a>

									 <span> So You are interested in {{ $first_post->title}}? <br>
										Brand new Post is here! </span>
										</header>

								<ul class="actions">
										<li><a href="{{ route('page.show', ['slug' => $first_post->slug])  }}" class="button">Read Story</a></li>
								</ul>
							</article>

							<h2 style="text-align:center">Latest Posts</h2>

						<!-- Posts -->
						<section class="posts">

				   @foreach ($post as $posts)
						<article>
								<header>
									<span class="date">{{ $posts->created_at->format('F d, D, Y') }}</span>
									<h2><a href="{{ route('page.show', ['slug' => $posts->slug])  }}">{{ $posts->title }} <br>
									</a></h2>
								</header>

								<span> So You are interested in {{ $posts->title}}? <br>
								Click Belowto continue </span>

								<br/>
								<br/>
								<ul class="actions">
									<li><a href="{{ route('page.show', ['slug' => $posts->slug])  }}" class="button">Full Story</a></li>
								</ul>
							</article>
				   @endforeach
				</section>
	
										
						<!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer>

					</div>
  
				

				<!-- Copyright -->
				

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>