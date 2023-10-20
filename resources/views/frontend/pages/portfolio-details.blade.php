@extends('frontend.layouts.master')
@section('title','Portfolio Details')

@section('content')
<!-- Header Start -->
<div class="slider-area ">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap">
                        <h2>My Portfolio</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">My Portfolio</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Services Details Start -->
<div class="portfolio-details-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-img">
                    <div class="details-img mb-40">
                        <img src="assets/img/gallery/portfolio.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="details-caption pl-50">
                    <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>

                    <p class="mb-50">Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>

                    <h3>How can we help?</h3>
                    <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.Mollit anim laborum.Dvcuis aute iruxvfg.</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details End -->
<!-- Contact Info Start -->
<div class="contact-info-area w-padding2" data-background="assets/img/gallery/section_bg04.jpg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-7">
              <div class="contact-caption mb-50">
                    <h3>If Not Now, When? Let’s Work Together!</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                    <img src="assets/img/gallery/sin.png" alt="">
              </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <form action="#" class="contact-wrapper">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="email" name="email" placeholder="Email Address">
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                    <button class="submit-btn2" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Info End -->
@endsection
