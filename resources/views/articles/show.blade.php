
@extends('layout')

@section('content')

  <div id="wrapper">
  	<div id="page" class="container">
  		<div id="content">
  			<div class="title">
  				<h2>Welcome to our website</h2>
  				<span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
  			<p><img src="http://localhost/Training/public/images/banner.jpg" alt="" class="image image-full" /> </p>

  			<p> {{ $article->body }} </p>
  		</div>

  	</div>
  </div>

@endsection
