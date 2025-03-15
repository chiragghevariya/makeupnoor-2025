@extends('front.layout.app')
@section('meta-title', "Bridal Makeup")
@section('meta-keywords', "Bridal Makeup")
@section('meta-description', "Bridal Makeup")

@section('content')
     <section class="ready banner-padding bg-img" data-overlay-dark="4" data-background=" {{ asset('assets/front/img/banner.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left">
                            <div class="title animate-box" data-animate-effect="fadeInUp"> <span><a href="services.html">Services</a></span>
                                <h2>Bridal Makeup</h2>
                                <hr class="line line-hr-secondary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <hr class="line-vr-section">
  <section id="projectpage" class="project section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                       <div class="row">
                        <div class="col-md-12">
                            <div class="img">
                                <img src="{{ asset('assets/front/img/services/s3.jpg') }}" class="img-fluid mb-30" alt="">
                            </div>
                            <h3>Bridal Makeup</h3>
                            <p>Quisque volutpat non nisl id tincidunt. Praesent at eros vitae dui pulvinar ornare. Morbi mollis a enim nec ullase emcorper. Proin condimentum ut mauris ut placerat. Donec commodo diam lorem, commodo viverra metus mollis nec. Nam vehicula ipsum faucibus at eros vitae dui pulvina the ornare.</p>
                            <p>Morbi mollis a enim nec ullamcorper. Proin condimentum ut mauris ut placerat. Donec commodo diamlorem, commodo viverra metus mollis vehicula ipsum faucibus.</p>
                        </div>
                    </div>
                        <div class="row services-price mb-30">
                            <div class="col-md-12">
                                <div class="services-price-info">
                                    <h5 class="title">Hair Wash<span class="price">$20,00</span></h5>
                                    <p>Quisque volutpat non nisl id tincidunt. Praesent at eros vitae dui pulvinar ornare.</p>
                                </div>
                                <div class="services-price-info">
                                    <h5 class="title">Hair Coloring<span class="price">$75,00</span></h5>
                                    <p>Quisque volutpat non nisl id tincidunt. Praesent at eros vitae dui pulvinar ornare.</p>
                                </div>
                                <div class="services-price-info">
                                    <h5 class="title">Blow Dry Hair <span class="price">$30,00</span></h5>
                                    <p>Quisque volutpat non nisl id tincidunt. Praesent at eros vitae dui pulvinar ornare.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- gallery -->
                        <div class="row mb-30">
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g1.jpg') }}" title="Eye Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g1.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g2.jpg') }}" title="Painting Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g2.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g3.jpg') }}" title="Bridal Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g4.jpg') }}" title="Effect Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g4.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g5.jpg') }}" title="Fashion Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g5.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g6.jpg') }}" title="Fashion Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g6.jpg') }}" class="img-fluid mx-auto d-block" alt=""> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 sidebar-side animate-box" data-animate-effect="fadeInUp">
                            <aside class="sidebar blog-sidebar">
                                <div class="sidebar-widget services">
                                    <div class="widget-inner">
                                        <div class="sidebar-title">
                                            <h4>Services</h4>
                                        </div>
                                        <ul>
                                            <li><a href="{{ route ('fashion-makeup') }}">Fashion Makeup</a></li>
                                            <li><a href="{{ route ('face-makeup') }}">Face Makeup</a></li>
                                            <li><a href="{{ route ('film-makeup') }}">Film Makeup</a></li>
                                            <li class="active"><a href="{{ route ('bridal-makeup') }}">Bridal Makeup</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                </div>
            </div>
        </section>
        @endsection