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
        <!-- Menu Section -->
        <section class="mt-5 section-wrapper-4 content-inner overflow-hidden bg-parallax" style="background-image:url('assets/images/background/pic10.png'); background-attachment: fixed;">
            <div class="container">
                {{-- <div class="section-head text-center">
                    <h2 class="title wow flipInX" data-wow-delay="0.2s">Why Choose Us ?</h2>
                </div> --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-4">
                            <div class="icon-bx">
                                <div class="icon-cell">
                                    <img src="{{asset('imgs/menu.png')}}" alt="">
                                </div>
                            </div>
                            <div class="icon-content">
                                <h2>Scan Here For <br> Our Menu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{asset('imgs/menu.svg')}}" alt="">
                    </div>

                </div>
            </div>
        </section>
        <!-- Menu Section -->
        <div class="text-center">
            <a href="https://qrcode.culturemambo.co.ke/images/culture_mambo_menu.pdf" class="mt-5 btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>View Menu</span></a>
        </div>
    </div>
@endsection
