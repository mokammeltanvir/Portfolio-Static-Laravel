@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">{{ $homeData['hero'][0]['name'] }}</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >{{ $homeData['hero'][0]['description']}}</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Designer Haris F. Watson</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s" >jhorem rfpsum golor sidt amet, consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- About Area start -->
        <section class="about-area section-paddingt30">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Designing With Passion While Exploring The World.</h3>
                            <p class="pera1">Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.</p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Any Type Of Query<br> & Discussion.</h3>
                            <p>Late talk with me</p>
                           <div class="send-cv">
                                <a href="#">hire@colorlib.com</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Categories Area Start -->
        <section class="categories-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>What Services you will Get from me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($homeData['services'] as $service)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{route('services')}}">{{ $service['title'] }}</a></h5>
                                <p>{{ $service['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                 </div>
            </div>
        </section>
        <!-- Categories Area End -->
        <!-- Services Area Start -->
        <section class="services-area  services-padding">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle">
                                <h2>What Services you will Get from me!</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> All</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Branding</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Logo</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">UI/UX </a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Web Design</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FUR -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FIVE -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Single -->
                                                    <div class="single-services mb-30">
                                                        <img src="{{asset('assets/frontend')}}/img/service/services1.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- Single -->
                                            <div class="single-services mb-30">
                                                <img src="{{asset('assets/frontend')}}/img/service/services6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!-- Want To Work Start -->
        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Dont worry for contact i`m available</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="#" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To Work End -->

        <!-- client-comments -->
        <section class="client-comments section-paddingt30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>Some Possitive Feedback  That Encourage Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest-blog-area start -->
            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">
                            @foreach ($homeData['testimonials'] as $testimonial)
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                <img src="{{ asset('assets/frontend/img/gallery/' . $testimonial['image']) }}" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>{{ $testimonial['name'] }}</h2>
                                                <span>{{ $testimonial['position'] }}</span>
                                            </div>
                                        </div>
                                        <p>{{ $testimonial['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- End latest-blog-area -->
        </section>
        <!-- Brand Area Start -->
        <div class="brand-area pb-bottom">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="{{asset('assets/frontend')}}/img/gallery/brand1.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/frontend')}}/img/gallery/brand2.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/frontend')}}/img/gallery/brand3.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/frontend')}}/img/gallery/brand4.png" alt="">
                    </div>
                    <div class="single-brand">
                        <img src="{{asset('assets/frontend')}}/img/gallery/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
        <!-- Contact Info Start -->
        <section class="contact-info-area w-padding2" data-background="{{asset('assets/frontend')}}/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                      <div class="contact-caption mb-50">
                            <h3>If Not Now, When? Let’s Work Together!</h3>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                            <img src="{{asset('assets/frontend')}}/img/gallery/sin.png" alt="">
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
        </section>
        <!-- Contact Info End -->
@endsection
