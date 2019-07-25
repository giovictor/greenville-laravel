@extends('index')

@section('content')

@if(Auth::check())
    <p>Welcome, {{Auth::user()->name}}. You can now reserve a book for borrowing at our library. Search for a book now!</p>
@else
<div id="homepageslider" class="carousel slide" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
		<li class="active" data-target="#homepageslider" data-slide-to="0"></li>
		<li data-target="#homepageslider" data-slide-to="1"></li>
		<li data-target="#homepageslider" data-slide-to="2"></li>
		<li data-target="#homepageslider" data-slide-to="3"></li>
		<li data-target="#homepageslider" data-slide-to="4"></li>
		<li data-target="#homepageslider" data-slide-to="5"></li>
		<li data-target="#homepageslider" data-slide-to="6"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item active"><img src={{asset('img/carousel1.jpg')}}></div>
		<div class="item"><img src={{asset('img/carousel2.jpg')}}></div>
		<div class="item"><img src={{asset('img/carousel3.jpg')}}></div>
		<div class="item"><img src={{asset('img/carousel4.jpg')}}></div>
		<div class="item"><img src={{asset('img/carousel5.jpg')}}></div>
		<div class="item"><img src={{asset('img/carousel6.jpg')}}></div>
		<div class="item"><img src={{asset('img/carousel7.jpg')}}></div>
	</div>
</div>
@endif

@include('../partials.basicsearch')

@include('../partials.errors')

@endsection
