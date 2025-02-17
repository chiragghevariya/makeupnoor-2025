@extends('front.layout.app')
@section('content')
<header class="header slider-fade" data-scroll-index="0">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="item bg-img" data-overlay-dark="2" data-background="{{ asset('') }}front/img/slider.jpeg">
            <div class="v-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 caption">
                            <hr class="line line-hr-primary">
                            <h5>Makeup Artist</h5>
                            <h1>Olivia Vonda</h1>
                            <a href="#about" class="btn fl-btn">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-img" data-overlay-dark="2" data-background="{{ asset('') }}front/img/slider2.jpg">
            <div class="v-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 caption">
                            <hr class="line line-hr-primary">
                            <h5>Our Services</h5>
                            <h1>Face Makeup</h1>
                            <a href="#services" class="btn fl-btn">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-img" data-overlay-dark="2" data-background="{{ asset('') }}front/img/slider3.jpg">
            <div class="v-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 caption">
                            <hr class="line line-hr-primary">
                            <h5>Our Services</h5>
                            <h1>Nail Makeup</h1>
                            <a href="#services" class="btn fl-btn">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

 <!-- line -->
 <hr class="line-vr-section">

    <!-- About -->
    <div id="about" class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-img mb-30 img-fluid animate-box" data-animate-effect="fadeInUp"
                        style="background-image: url(front/img/about.jpg);">
                        <div class="about-img-2 signature" style="background-image: url(front/img/signature.png);"></div>
                    </div>
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInUp">
                    <div class="title"> <span>About Me</span>
                        <h2>Olivia Vonda</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                    <p>Hi, I'm Olivia a Professional Makeup Artist. Quisque luctus tincidunt enim dapibus pharetra neue
                        ultricies at. Morbi dapibus mauris id scelerisque placerat nula massa lacinia orci in facilisis
                        nulla quam volutpat lectus. Nunc elementum ante commodo felis hendrerit.</p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Makeup a urnue sem
                        tempor ullamcorper. Praesent sapien felis porttitor ut eros pharetra fermentum solli citudi metus.
                        Quisque facilisis libero libero eget cursus ex maximus non. Quisque volutpat venenatis lacus. Nullam
                        ac sapien sed metus varius mattis et vel magna.</p>
                    <br />
                    <!-- Awards -->
                    <div class="row awards">
                        <div class="col-md-12">
                            <div class="title"> <span>Awards</span> </div>
                        </div>
                        <div class="col-md-12 owl-carousel owl-theme">
                            <div class="awards-logo">
                                <a href="#"><img src="{{ asset('') }}front/img/awards/1.jpg" alt=""></a>
                            </div>
                            <div class="awards-logo">
                                <a href="#"><img src="{{ asset('') }}front/img/awards/2.jpg" alt=""></a>
                            </div>
                            <div class="awards-logo">
                                <a href="#"><img src="{{ asset('') }}front/img/awards/3.jpg" alt=""></a>
                            </div>
                            <div class="awards-logo">
                                <a href="#"><img src="{{ asset('') }}front/img/awards/4.jpg" alt=""></a>
                            </div>
                            <div class="awards-logo">
                                <a href="#"><img src="{{ asset('') }}front/img/awards/5.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- line -->
    <hr class="line-vr-section">
    <!-- Services -->
    <section id="services" class="section-padding bg-grey" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>What We Do</span>
                        <h2>Makeup Services</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row services">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s7.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="eye-makeup.html">Eye Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s1.png"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="hair-makeup.html">Hair Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s8.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="face-makeup.html">Face Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s3.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="bridal-makeup.html">Bridal Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s4.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="child-face-painting.html">Child Face Painting</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s2.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="fashion-makeup.html">Fashion Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s5.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="fantastic-makeup.html">Fantastic Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s6.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="effect-makeup.html">Effect Makeup</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right mt-5"> <a class="underline-text" href="services.html">Services <i
                            class="ti-arrow-right"></i></a> </div>
            </div>
        </div>
    </section>
    <!-- Services Icon Banner -->
    <section class="services-banner-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                    <img src="{{ asset('') }}front/img/banner2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                    <div class="cont">
                        <div class="row gx-0">
                            <div class="col-6 col-md-4 services-banner">
                                <div class="icon"><span class="flaticon-039-make-up"></span></div>
                                <h6>Facial Makeup</h6>
                            </div>
                            <div class="col-6 col-md-4 services-banner">
                                <div class="icon"><span class="flaticon-007-mascara-4"></span></div>
                                <h6>Eyelash Makeup</h6>
                            </div>
                            <div class="col-6 col-md-4 services-banner">
                                <div class="icon"><span class="flaticon-013-facial-mask-1"></span></div>
                                <h6>Eye Makeup</p>
                            </div>
                            <div class="col-6 col-md-4 services-banner">
                                <div class="icon"><span class="flaticon-034-eyebrow"></span></div>
                                <h6>Eyebrow Makeup</h6>
                            </div>
                            <div class="col-6 col-md-4 services-banner">
                                <div class="icon"><span class="flaticon-018-scissors"></span></div>
                                <h6>Haircut Makeup</h6>
                            </div>
                            <div class="col-6 col-md-4 services-banner">
                                <div class="icon"><span class="flaticon-037-dressing-table"></span></div>
                                <h6>Dressing Table</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section id="team" class="team section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Our Awesome</span>
                        <h2>Makeup Artist</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel">
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('') }}front/img/team/3.jpg" alt=""
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Anna Brown</h3>
                            <p class="team-text">Hello, I’am Anna. I love people love to fell beautiful, which is the
                                reason I’ve spent last 10 years engulfed in doing Make up.</p>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Anna Brown</h3>
                        </div>
                    </div>
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('') }}front/img/team/2.jpg" alt=""
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Robert White</h3>
                            <p class="team-text">Hello, I’am Robert. I love people love to fell beautiful, which is the
                                reason I’ve spent last 7 years engulfed in doing Make up.</p>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Robert White</h3>
                        </div>
                    </div>
                    <div class="team-card mb-30">
                        <div class="team-img"><img src="{{ asset('') }}front/img/team/1.jpg" alt=""
                                class="w-100"></div>
                        <div class="team-content">
                            <h3 class="team-title">Yvonne Scott</h3>
                            <p class="team-text">Hello, I’am Yvonne. I love people love to fell beautiful, which is the
                                reason I’ve spent last 5 years engulfed in doing Make up.</p>
                        </div>
                        <div class="title-box">
                            <h3 class="mb-0">Yvonne Scott</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- line -->
    <hr class="line-vr-section">
    <!-- Pricing -->
    <section id="pricing" class="section-padding bg-grey" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Prices</span>
                        <h2>Pricing Plan</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="price-list">
                        <div class="price-box-inner" style="background-image: url(front/img/pricing/a.jpg)">
                            <h3>General Prices</h3>
                            <ul>
                                <li>
                                    <p class="package">Eye Makeup</p>
                                    <div class="border-middle"></div><span class="price">$100</span>
                                </li>
                                <li>
                                    <p class="package">Hair Makeup</p>
                                    <div class="border-middle"></div><span class="price">$180</span>
                                </li>
                                <li>
                                    <p class="package">Bridal Makeup</p>
                                    <div class="border-middle"></div><span class="price">$600</span>
                                </li>
                                <li>
                                    <p class="package">Child Face Painting</p>
                                    <div class="border-middle"></div><span class="price">$60</span>
                                </li>
                                <li>
                                    <p class="package">Effect Makeup</p>
                                    <div class="border-middle"></div><span class="price">$150</span>
                                </li>
                                <li>
                                    <p class="package">Face Makeup</p>
                                    <div class="border-middle"></div><span class="price">$120</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="price-list">
                        <div class="price-box-inner" style="background-image: url(front/img/pricing/b.jpg)">
                            <h3>Bridal Haircut</h3>
                            <ul>
                                <li>
                                    <p class="package">Curly Haircute &amp; Colors</p>
                                    <div class="border-middle"></div><span class="price">$250</span>
                                </li>
                                <li>
                                    <p class="package">Color corrections</p>
                                    <div class="border-middle"></div><span class="price">$100</span>
                                </li>
                                <li>
                                    <p class="package">Hair Wash</p>
                                    <div class="border-middle"></div><span class="price">$50</span>
                                </li>
                                <li>
                                    <p class="package">Hair Coloring</p>
                                    <div class="border-middle"></div><span class="price">$160</span>
                                </li>
                                <li>
                                    <p class="package">Blow Dry Hair</p>
                                    <div class="border-middle"></div><span class="price">$45</span>
                                </li>
                                <li>
                                    <p class="package">Foilyage</p>
                                    <div class="border-middle"></div><span class="price">$60</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- line -->
    <hr class="line-vr-section">
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials testimonials-padding bg-img" data-overlay-dark="5"
        data-background="{{ asset('') }}front/img/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonial-say text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="testimonial-item text-center">
                                <h5 class="mb-30">Reviews !</h5>
                                <p><b>"</b> After having had my eyelash extensions done by two other therapists with mixed
                                    results, I decided to go to Ovon and I was very impressed with the service, and how
                                    natural they look. You don’t even need to use mascara. I now couldn’t imagine life
                                    without lashes! <b>"</b></p>
                                <h6>Lucy Brown</h6>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5 class="mb-30">Reviews !</h5>
                                <p><b>"</b> After having had my eyelash extensions done by two other therapists with mixed
                                    results, I decided to go to Ovon and I was very impressed with the service, and how
                                    natural they look. You don’t even need to use mascara. I now couldn’t imagine life
                                    without lashes! <b>"</b></p>
                                <h6>Naomi Bobbi</h6>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5 class="mb-30">Reviews !</h5>
                                <p><b>"</b> After having had my eyelash extensions done by two other therapists with mixed
                                    results, I decided to go to Ovon and I was very impressed with the service, and how
                                    natural they look. You don’t even need to use mascara. I now couldn’t imagine life
                                    without lashes! <b>"</b></p>
                                <h6>Naomi Bobbi</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section id="blog" class="blog section-padding bg-grey" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Read</span>
                        <h2>Latest News</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html"> <img src="{{ asset('') }}front/img/blog/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-cont"> <a href="blog.html"><span class="tag">Makeup</span></a>
                                <h5>
                                    <a href="post.html">2024 Bridal Beauty Trends</a>
                                </h5>
                                <p>Quisque facilisis libero viventa egeten cursus ex maximus non. Quisque miss volutpat
                                    venenatis hendrerit...</p>
                                <div class="info">27 July 2024</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-img">
                                <a href="post2.html"> <img src="{{ asset('') }}front/img/blog/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-cont"> <a href="blog.html"><span class="tag">Makeup</span></a>
                                <h5>
                                    <a href="post2.html">Dark Smokey Eye Makeup</a>
                                </h5>
                                <p>Quisque facilisis libero viventa egeten cursus ex maximus non. Quisque miss volutpat
                                    venenatis hendrerit...</p>
                                <div class="info">24 July 2024</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-img">
                                <a href="post3.html"> <img src="{{ asset('') }}front/img/blog/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-cont"> <a href="blog.html"><span class="tag">Makeup</span></a>
                                <h5>
                                    <a href="post3.html">10 Special Effects Makeup</a>
                                </h5>
                                <p>Quisque facilisis libero viventa egeten cursus ex maximus non. Quisque miss volutpat
                                    venenatis hendrerit...</p>
                                <div class="info">21 July 2024</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-img">
                                <a href="post4.html"> <img src="{{ asset('') }}front/img/blog/4.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-cont"> <a href="blog.html"><span class="tag">Makeup</span></a>
                                <h5>
                                    <a href="post4.html">The Best Eye Makeup Trends</a>
                                </h5>
                                <p>Quisque facilisis libero viventa egeten cursus ex maximus non. Quisque miss volutpat
                                    venenatis hendrerit...</p>
                                <div class="info">18 July 2024</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-img">
                                <a href="post5.html"> <img src="{{ asset('') }}front/img/blog/5.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-cont"> <a href="blog.html"><span class="tag">Makeup</span></a>
                                <h5>
                                    <a href="post5.html">Mascara Tips for Loud & Clean Lashes</a>
                                </h5>
                                <p>Quisque facilisis libero viventa egeten cursus ex maximus non. Quisque miss volutpat
                                    venenatis hendrerit...</p>
                                <div class="info">15 July 2024</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-img">
                                <a href="post6.html"> <img src="{{ asset('') }}front/img/blog/6.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-cont"> <a href="blog.html"><span class="tag">Makeup</span></a>
                                <h5>
                                    <a href="post6.html">5-Minute Natural Makeup Tutorial</a>
                                </h5>
                                <p>Quisque facilisis libero viventa egeten cursus ex maximus non. Quisque miss volutpat
                                    venenatis hendrerit...</p>
                                <div class="info">10 July 2024</div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right mt-5"> <a class="underline-text" href="blog.html">Blog <i
                            class="ti-arrow-right"></i></a> </div>
            </div>
        </div>
    </section>
    <!-- line -->
    <hr class="line-vr-section">
    <!-- Contact -->
    <section id="contact" class="contact section-padding" data-scroll-index="7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title"> <span>Location</span>
                        <h2>Contact Us</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
                <div class="col-md-6 info mb-30">
                    <p>Hi, I'm Olivia a Professional Makeup Artist.
                        <br>Quisque luctus tincidunt enim miss neuenete ectus.
                    </p>
                    <ul class="list-unstyled contact-list">
                        <li>
                            <div class="icon"><span class="ti-headphone-alt"></span></div>
                            <div class="text">
                                <p><a href="tel:+1-650-444-0000">+1 650-444-0000</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-email"></span> </div>
                            <div class="text">
                                <p><a href="mailto:makeup@ovon.com">makeup@ovon.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-location-pin"></span> </div>
                            <div class="text">
                                <p>525 West Ave, CT 06850 Norwalk</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-time"></span> </div>
                            <div class="text">
                                <p>Mon-Fri: 08.00 - 19.00, Sunday: Closed</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-map-alt"></span> </div>
                            <div class="text">
                                <p><a href="https://www.google.com/maps" target="_blank">Google Maps</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>GET IN TOUCH</h6>
                    <form method="post" class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name *" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email / Phone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn fl-btn" type="submit">Hello!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
