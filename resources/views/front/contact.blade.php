@extends('front.layout.app')
@section('content')
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
                        <form id="contact" class="row FromSubmit" action="{{ route('contact-post') }}" method="POST" >
                            @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name *">
                            </div>
                            <div  class="mb-5" >
                                <span class="text-danger" id="name_error"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email / Phone">
                            </div>
                            <div  class="mb-5" >
                                <span class="text-danger" id="email_error"></span>
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


                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn fl-btn" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
