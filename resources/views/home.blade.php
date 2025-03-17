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
                            <h1>NOOR MOHAMMAD</h1>
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
                            <h1>BRIDAL MAKEUP</h1>
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
                            <h1>CINE MAKEUP</h1>
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
                        style="background-image: url(public/front/img/noor-photo.jpeg);">
                    </div>
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInUp">
                    <div class="title"> <span>About Me</span>
                        <h2>NOOR MOHAMMAD</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                    <p>Hi! I’m Noor, a professional makeup artist based in Chennai, specializing in bridal makeup and cine makeup.</p>
                    <p>My journey in the makeup industry began in 1999 when I started as a makeup artist under my mentor, Mr. Ashokan, for three years. After gaining valuable experience, I ventured out independently. In the early years of my career, I worked as a makeup artist for newsreaders on JAYA TV and VJs on SS Music for four years.</p>
                    <p> As a registered member of the South Indian Cine Makeup and Hair Stylist Association, I’ve had the privilege of working in South Indian films, fashion shows, individual portfolios, television, and print media.</p>
                    <p>My dedication to the makeup industry has led to collaborations with renowned artists and talented photographers. Every experience has been a learning opportunity, contributing to my growth and expertise in this field.</p>
                    <p>With over 20 years of experience as a professional makeup and hair artist in Chennai, India, I have worked as a bridal makeup, cine makeup artist and specialist, bringing fresh ideas to the industry.</p>
                    <p>Noor Makeup Artists is your go-to studio for all your makeup and hairstyling needs, including fashion and bridal makeup. Our clientele includes top brands and celebrities.</p>
                   <p>We’re always excited about new opportunities! Feel free to reach us at 
                    <a href="tel:+919382154932" target="_blank">+91-9382154932</a> / 
                    <a href="tel:+919840579576" target="_blank">9840579576</a> or email us at 
                    <a href="mailto:makeupnoor@gmail.com" target="_blank">makeupnoor@gmail.com</a> / 
                    <a href="mailto:noor@makeupnoor.com" target="_blank">noor@makeupnoor.com</a>.
                </p>
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
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s8.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="{{ route ('face-makeup') }}">Face Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s3.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="{{ route ('bridal-makeup') }}">Bridal Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s2.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="{{ route ('fashion-makeup') }}">Fashion Makeup</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('') }}front/img/services/s5.jpg"
                                    alt=""> </div>
                            <div class="con">
                                <h5><a href="{{ route ('film-makeup') }}">Film Makeup</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <p>Bridal makeup artist Noor is basically Chennai based makeup artist but visits other states even oversees for bridal makeup, with over 20 years of experience. His specialization is traditional South Indian bridal makeup and contemporary styles, catering to brides in Chennai and Coimbatore. Noor's aim is to bring each bride's vision to life, using his expertise to enhance natural beauty on their wedding day.
                    </p>
                    <ul class="list-unstyled contact-list">
                        <li>
                            <div class="icon"><span class="ti-headphone-alt"></span></div>
                            <div class="text">
                                <p><a href="tel:+919382154932">+91 93821 54932</a></p>
                                <p><a href="tel:+919840579576">+91 98405 79576</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-email"></span> </div>
                            <div class="text">
                                <p><a href="mailto:makeupnoor@gmail.com">makeupnoor@gmail.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-location-pin"></span> </div>
                            <div class="text">
                                <p>#21 A, VJ Arcade, Poonamallee High Rd, near Appasamy Hospital, Arumbakkam, Chennai, Tamil Nadu 600106</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-time"></span> </div>
                            <div class="text">
                                 <p>Mon-Sat: 9.30am - 9.00pm, Sunday: 10.00am - 7.00pm</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-map-alt"></span> </div>
                            <div class="text">
                                <p><a href="https://www.google.com/maps/place/Appasamy+Hospitals/@13.0725445,80.2060615,15.4z/data=!4m6!3m5!1s0x3a5266995cdc1e3b:0x9cd2c421ab3886ec!8m2!3d13.0733385!4d80.2147624!16s%2Fg%2F11cktm8wkt?entry=ttu&g_ep=EgoyMDI1MDMxMi4wIKXMDSoASAFQAw%3D%3D" target="_blank">Google Maps</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>GET IN TOUCH</h6>
                            <div id="successMessage" class="alert alert-success d-none"></div>

                    <form action="{{ route('contact-post') }}" method="POST" class="row  postFormcommon">
                            @csrf 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name *">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email / Phone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                         @if (env('IS_CAPTCHA_ENABLE'))
                        <!-- Hidden input for reCAPTCHA response -->
                          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        @endif
                         <div id="loader" class="text-center d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
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
