@extends('front.layout.app')
@section('content')
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
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Makeup a urnue
                        sem tempor ullamcorper. Praesent sapien felis porttitor ut eros pharetra fermentum solli citudi
                        metus. Quisque facilisis libero libero eget cursus ex maximus non. Quisque volutpat venenatis
                        lacus. Nullam ac sapien sed metus varius mattis et vel magna.</p>
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
@endsection
