<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 {{-- Safe meta and title: if a section is empty, fall back. If title is not provided, derive from URL --}}
    @php
        $providedMetaTitle = trim($__env->yieldContent('meta-title'));
        $providedMetaDescription = trim($__env->yieldContent('meta-description'));
        $providedMetaKeywords = trim($__env->yieldContent('meta-keywords'));
        $providedTitle = trim($__env->yieldContent('title'));

        $appName = config('app.name', 'Makeupnoor');

        // Compute current request path/last segment once (used for title/meta fallbacks)
        $path = request()->path(); // e.g., 'wedding-makeup-artist.html' or 'services/bridal'
        $segments = array_filter(explode('/', $path));
        $last = end($segments) ?: '';
        $lastLower = strtolower($last);

        // Known mappings for pages that should have unique meta values when empty
        $titleMap = [
            'wedding-makeup-artist.html' => 'Wedding Makeup Artist in Chennai | HD & Airbrush Bridal Makeup',
            'portrait-makeup-artist.html' => 'Portrait & Engagement Makeup Artist in Chennai | Noor',
            'fashion-makeup.html' => 'Fashion & Editorial Makeup Artist in Chennai | Noor',
            'film-makeup.html' => 'Film & Media Makeup Artist in Chennai | Noor',
            'bridal-makeup-chennai.html' => 'Bridal Makeup in Chennai – Portfolio & Pricing | Noor',
            'bridal-makeup-coimbatore.html' => 'Bridal Makeup in Coimbatore – Portfolio & Pricing | Noor',
            'bridal-makeup-tirupur.html' => 'Bridal Makeup in Tirupur – Portfolio & Pricing | Noor',
            'bridal-makeup-erode.html' => 'Bridal Makeup in Erode – Portfolio & Pricing | Noor',
            'bridal-makeup-madurai.html' => 'Bridal Makeup in Madurai – Portfolio & Pricing | Noor',
            'bridal-makeup-trichy.html' => 'Bridal Makeup in Trichy – Portfolio & Pricing | Noor',
            'bridal-makeup-vijayawada.html' => 'Bridal Makeup in Vijayawada – Portfolio & Pricing | Noor',
        ];

        // Per-page meta title mapping (used when meta-title section is empty)
        $metaTitleMap = [
            'wedding-makeup-artist.html' => 'Wedding Makeup Artist | ' . $appName,
            'portrait-makeup-artist.html' => 'Portrait Makeup Artist | ' . $appName,
            'fashion-makeup.html' => 'Fashion Makeup | ' . $appName,
            'film-makeup.html' => 'Film Makeup | ' . $appName,
            'bridal-makeup-chennai.html' => 'Bridal Makeup Chennai | ' . $appName,
            'bridal-makeup-coimbatore.html' => 'Bridal Makeup Coimbatore | ' . $appName,    
            'bridal-makeup-tirupur.html' => 'Bridal Makeup Tirupur | ' . $appName,
            'bridal-makeup-erode.html' => 'Bridal Makeup Erode | ' . $appName,
            'bridal-makeup-madurai.html' => 'Bridal Makeup Madurai | ' . $appName,
            'bridal-makeup-trichy.html' => 'Bridal Makeup Trichy | ' . $appName,
            'bridal-makeup-vijayawada.html' => 'Bridal Makeup Vijayawada | ' . $appName,
        ];

        $descriptionMap = [
            'wedding-makeup-artist.html' => 'Professional wedding makeup artist services offering flawless bridal looks in Chennai and nearby cities.',
            'portrait-makeup-artist.html' => 'Expert portrait makeup services for portfolios, events and photography shoots.',
            'fashion-makeup.html' => 'Fashion makeup services for shows, editorials, and designer shoots.',
            'film-makeup.html' => 'Cinematic and film makeup services for productions, actors and shoots.',
            'bridal-makeup-chennai.html' => 'Top bridal makeup services in Chennai by experienced makeup artist Noor — bridal trials, on-site services and packages.',
            'bridal-makeup-coimbatore.html' => 'Top bridal makeup services in Coimbatore by experienced makeup artist Noor — bridal trials, on-site services and packages.',
            'bridal-makeup-tirupur.html' => 'Bridal makeup services in Tirupur delivering elegant and long-lasting bridal looks.',
            'bridal-makeup-erode.html' => 'Bridal makeup services in Erode offering personalised bridal looks and packages.',
            'bridal-makeup-madurai.html' => 'Bridal makeup services in Madurai with experienced artists and tailored bridal packages.',                     
            'bridal-makeup-trichy.html' => 'Bridal makeup services in Trichy specializing in traditional and contemporary bridal styles.',
            'bridal-makeup-vijayawada.html' => 'Bridal makeup services in Vijayawada focused on creating flawless bridal transformations.',
        ];

    $keywordsMap = [
            'wedding-makeup-artist.html' => 'wedding makeup, bridal makeup, chennai wedding makeup',
            'portrait-makeup-artist.html' => 'portrait makeup, photoshoot makeup, portfolio makeup, engagement makeup chennai',
            'fashion-makeup.html' => 'fashion makeup, runway makeup, editorial makeup, fashion makeup artist chennai, editorial makeup chennai',
            'film-makeup.html' => 'film makeup, cinematic makeup, movie makeup artist, film makeup artist chennai, movie makeup chennai',
            'bridal-makeup-chennai.html' => 'bridal makeup chennai, wedding makeup chennai, bridal artist chennai, bridal makeup artist chennai, best bridal makeup chennai',
            'bridal-makeup-coimbatore.html' => 'bridal makeup coimbatore, wedding makeup coimbatore, bridal artist coimbatore, bridal makeup artist coimbatore',
            'bridal-makeup-tirupur.html' => 'bridal makeup tirupur, wedding makeup tirupur, bridal makeup artist tirupur',
            'bridal-makeup-erode.html' => 'bridal makeup erode, wedding makeup erode, bridal artist erode, bridal makeup artist erode',
            'bridal-makeup-madurai.html' => 'bridal makeup madurai, wedding makeup madurai, bridal makeup artist madurai',
            'bridal-makeup-trichy.html' => 'bridal makeup trichy, wedding makeup trichy, bridal makeup artist trichy',
            'bridal-makeup-vijayawada.html' => 'bridal makeup vijayawada, wedding makeup vijayawada, bridal makeup artist vijayawada',
        ];

        // Only derive a title when the view didn't provide one
        if ($providedTitle === '') {
            if (isset($titleMap[$lastLower])) {
                $finalTitle = $titleMap[$lastLower];
            } else {
                // Generic fallback: convert last segment to a readable title
                $clean = preg_replace('/\.html$/', '', $last);
                $clean = preg_replace('/[-_]+/', ' ', $clean);
                $derived = trim(ucwords($clean));
                if ($derived === '' || in_array(strtolower($derived), ['home', '/'])) {
                    $finalTitle = $appName;
                } else {
                    $finalTitle = $derived;
                }
            }
        } else {
            $finalTitle = $providedTitle;
        }

        if ($providedMetaTitle !== '') {
            $metaTitle = $providedMetaTitle;
        } elseif (isset($metaTitleMap[$lastLower])) {
            $metaTitle = $metaTitleMap[$lastLower];
        } else {
            $metaTitle = $appName;
        }

        // If meta description is empty, try a per-page mapping, otherwise use default
        if ($providedMetaDescription !== '') {
            $metaDescription = $providedMetaDescription;
        } elseif (isset($descriptionMap[$lastLower])) {
            $metaDescription = $descriptionMap[$lastLower];
        } else {
            $metaDescription = 'Professional makeup artist in Chennai';
        }

        // If meta keywords is empty, try a per-page mapping, otherwise use default
        if ($providedMetaKeywords !== '') {
            $metaKeywords = $providedMetaKeywords;
        } elseif (isset($keywordsMap[$lastLower])) {
            $metaKeywords = $keywordsMap[$lastLower];
        } else {
            $metaKeywords = 'makeup artist, bridal makeup, Chennai';
        }
    @endphp
    <meta name="title" content="{{ $metaTitle }}">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <title>{{ $finalTitle }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}front/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Oswald:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('') }}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}?v={{rand()}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
    img.g-image.mx-auto.d-block {
        width: 345px;
        height: 245px;
    }
    img.s-image {
        height: 300px;
    }
    /* .item.bg-img {
    height: 1673px !important;
    width: 1200px !important;
} */
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Preloader -->
    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Sidebar Section -->
    @include('front.layout.sidebar')
    <!-- Main Section -->
    <div id="ovon-main">
        <!-- Slider -->
        @yield('content')

        <!-- line -->
        <hr class="line-vr-section">
        <!-- Footer -->
    @include('front.layout.footer')

    </div>
    <!-- jQuery -->
    <script src="{{ asset('') }}front/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('') }}front/js/modernizr-2.6.2.min.js"></script>
    <script src="{{ asset('') }}front/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}front/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}front/js/scrollIt.min.js"></script>
    <script src="{{ asset('') }}front/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('') }}front/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}front/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}front/js/smooth-scroll.min.js"></script>
    <script src="{{ asset('') }}front/js/main.js"></script>
    {{-- <script src="{{ asset('') }}front/js/common.js"></script> --}}
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?render={{ env('YOUR_SITE_KEY') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('YOUR_SITE_KEY') }}', { action: 'login' }).then(function(token) {
                    let recaptchaInput = document.getElementById('recaptchaResponse');
                    if (recaptchaInput) {
                        recaptchaInput.value = token;
                        console.log("reCAPTCHA token generated on page load:", token);
                    } else {
                        console.error("Hidden input 'recaptchaResponse' not found!");
                    }
                }).catch(function(error) {
                    console.error("reCAPTCHA Error:", error);
                });
            });
        });
      </script>

      <script>
          $('form.FromSubmit').submit(function(event) {

          //  alert("in");
              // return false;
              // tinyMCE.triggerSave();
              event.preventDefault();
              var formId = $(this).attr('id');
              // if ($(this).valid()) {

              var formAction = $(this).attr('action');
              var $btn = $('#' + formId + ' button[type="submit"]').html('loading');
            //   var redirectURL = "$(this).data("redirect_url");
              $.ajax({
                  type: "POST",
                  url: formAction,
                  data: new FormData(this),
                  contentType: false,
                  processData: false,
                  enctype: 'multipart/form-data',
                  success: function(response) {
                      // return false;
                      // console.log(response);
                      if (response.status == true) {
                          window.location = response.redirect_url;
                      } else {

                          location.reload();
                      }
                  },
                  error: function(jqXhr) {

                      var $btn = $('#' + formId + ' button[type="submit"]').html(
                          '<i class="bx bxs-lock-open"></i> Sign in');
                      var errors = $.parseJSON(jqXhr.responseText);
                      showErrorMessages(formId, errors);
                  }
              });
              return false;
              // };
          });

          function showErrorMessages(formId, errorResponse) {

              $.each(errorResponse.errors, function(key, value) {

                  // console.log(key);

                  $.each(value, function(key2, value2) {

                      console.log(key, value2);
                      $("#" + key + '_error').html(value2);
                  });
              });
          }
      </script>
@yield('script')
@include('admin.auth.toastr')
@include('front.layout.common')

</body>
</html>
