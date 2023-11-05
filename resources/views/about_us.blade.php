@extends('layouts.header')

@section('main')
<div class="page-content bg-white">
    		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center bg-parallax bg-parallax" style="background-image:url('assets/images/banner/bnr1.jpg'); background-size:cover; background-position:center;">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>About Us</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->

    	<!-- Visit Restaurant -->
		<section class="content-inner pb-0">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">We Invite you to Visit Culture Mambo</h2>
					<p class="about-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="about-media dz-media rounded-md">
							<img src="{{asset('imgs/socialize.jpeg')}}" alt="/">
							<a class="video video-btn popup-youtube" href="https://www.youtube.com/watch?v=KrRHHglZxHE">
								<i class="fa-solid fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Visit Restaurant -->
</div>
@endsection
