@extends('layouts.app')

@section('content')
<div class="intro1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row center-content">
				<div class="col-md-12 text-center">
					<h1>Start Blogging & Connect With Others</h1>
					<div class="intropadding">
					<b><p class="space30 editContent">Welcome to the site where you can express yourself and share your thoughts with the world.</p>
						<p> Comment and share the posts you like create your own community.</p></b>
					</div>
					<a href="/posts" class="btn btn-primary">Blog Posts  <i class="fas fa-laptop"></i></a>
					<a href="/about" class="btn btn-primary">More Info  <i class="fas fa-info-circle"></i></a>
				</div>
			</div>
			
		</div>
	
	</div>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b62a34f201881fb"></script> 
	<div class="smallpd"></div>
@endsection
