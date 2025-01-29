<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>LMS | Dashboard</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="LMS">
      <link rel="shortcut icon" href="{{ asset('assets/logo.jpg') }}" type="image/x-icon">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('assets/backend/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets/backend/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('assets/backend/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets/backend/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets/backend/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
    @include('sweetalert::alert')
      <div class="full_container">
         <div class="inner_container">
           @include('backend.layouts.sidebar')
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('backend.layouts.header')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  @yield('content')
                  <!-- footer -->
                 @include('backend.layouts.footer')
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('assets/backend/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('assets/backend/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('assets/backend/js/owl.carousel.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('assets/backend/js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/backend/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/backend/js/utils.js') }}"></script>
      <script src="{{ asset('assets/backend/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('assets/backend/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
      <script src="{{ asset('assets/backend/js/chart_custom_style1.js') }}"></script>
   </body>
</html>
