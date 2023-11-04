@extends('layouts.header')
@section('main')

<div class="page-content bg-white">
    <!-- Banner  -->
    <div class=" dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('{{asset('assets/images/banner/bnr3.jpg')}}'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Culture Mambo Menu</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Culture Mambo Menu </li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
		<!-- Team Section 1 -->
		<section class="section-wrapper-4 content-inner overflow-hidden bg-parallax" style="background-image:url('assets/images/background/pic10.png'); background-attachment: fixed;">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title wow flipInX" data-wow-delay="0.2s">Weekly Culture</h2>
				</div>
				<div class="swiper team-swiper swiper-btn-lr swiper-visible">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<img src="{{asset('imgs/ads/13.jpeg')}}" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">

									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>
											<ul class="sub-team-social">
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
                        <div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<img src="{{asset('imgs/ads/14.jpeg')}}" alt="/">
								</div>
								<div class="dz-content">
									<div class="clearfix">

									</div>
									<ul class="team-social">
										<li>
											<a class="share-btn" href="javascript:void(0);"><i class="flaticon-share"></i></a>
											<ul class="sub-team-social">
												<li><a class="in-btn" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination">
						<div class="team-button-prev btn-prev rounded-xl btn-hover-2"><i class="fa-solid fa-arrow-left"></i></div>
						<div class="team-button-next btn-next rounded-xl btn-hover-2"><i class="fa-solid fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team Section 1 -->
</div>
@endsection
