<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('') }}assets/"
  data-template="vertical-menu-template"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title') | {{ config("app.name") }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/pages/cards-statistics.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/pages/cards-analytics.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/flatpickr/flatpickr.css" />

      <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/dropzone/dropzone.css" />

    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/@form-validation/form-validation.css" />
    <!-- Helpers -->
    <script src="{{ asset('') }}assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('') }}assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('') }}assets/js/config.js"></script>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
      @include('admin.layout.menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
        @include('admin.layout.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            @yield('content')


            <!-- / Content -->

            <!-- Footer -->
           @include('admin.layout.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('') }}assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('') }}assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('') }}assets/vendor/js/menu.js"></script>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('') }}assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('') }}assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('') }}assets/js/dashboards-analytics.js"></script>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?render={{ env('YOUR_SITE_KEY') }}"></script>

    <script src="{{ asset('') }}assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <!-- Flat Picker -->
    <script src="{{ asset('') }}assets/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Form Validation -->
    <script src="{{ asset('') }}assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <script src="{{ asset('') }}assets/vendor/libs/dropzone/dropzone.js"></script>
    <script src="{{ asset('') }}assets/js/forms-file-upload.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('') }}assets/js/tables-datatables-basic.js"></script>

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
        $(document).on("click", ".delete", function() {

            var myUrl = $(this).attr('data-link');

            $.ajax({
                type: 'get',
                url: myUrl,
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status == 1 && response.msg != "") {

                        location.reload();

                    }
                }
            });
        });

    </script>
   <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .tox-notifications-container {
            display: none !important;
        }
    </style>
    <script>
        tinymce.init({
          selector: '#editor', // Target your textarea ID
          plugins: 'advlist autolink lists link image charmap print preview anchor',
          toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
          height: 300,
        });
      </script>
       <script>
        $('form.FromSubmit').submit(function(event) {

            //alert("in");
            // return false;
            tinyMCE.triggerSave();
            event.preventDefault();
            var formId = $(this).attr('id');
            // if ($(this).valid()) {

            var formAction = $(this).attr('action');
            var $btn = $('#' + formId + ' button[type="submit"]').html('loading');
            var redirectURL = $(this).data("redirect_url");
            $.ajax({
                type: "POST",
                url: formAction,
                data: new FormData(this),
                contentType: false,
                processData: false,
                enctype: 'multipart/form-data',
                success: function(response) {
                    // return false;
                    if (response.status == 1 && response.msg != "") {
                        window.location = redirectURL;
                    }
                },
                error: function(jqXhr) {

                    console.log(jqXhr);

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
    @include('admin.auth.toastr')

  </body>
</html>
