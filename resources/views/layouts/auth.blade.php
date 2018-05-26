<!DOCTYPE html>
<html lang="en">
<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 4.0
  Author: PIXINVENT
  Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Reservat Master</title>
    <!-- Favicons-->
    <link rel="icon" href="{{asset('materialize/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{asset('materialize/images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('materialize/images/favicon/mstile-144x144.png')}}">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('materialize/css/themes/collapsible-menu/style.css')}}" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="{{asset('materialize/css/custom/custom.css')}}" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('materialize/vendors/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('materialize/vendors/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('materialize/vendors/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('materialize/vendors/fullcalendar/css/fullcalendar.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('materialize/vendors/flag-icon/css/flag-icon.min.css')}}" type="text/css" rel="stylesheet">
</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">

    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
<header id="header" class="page-topbar">
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="/room" class="brand-logo darken-1">
                                <img src="{{ asset('materialize/images/logo/iconreservat.png') }}" alt="materialize logo">
                                <span class="logo-text hide-on-med-and-down">Reservat Master</span>
                            </a>
                        </h1>
                    </li>
                </ul>
                <ul class="right hide-on-med-and-down">

                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                            <i class="material-icons">settings_overscan</i>
                        </a>
                    </li>


                    <li>
                        <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                            <i class="material-icons">format_indent_increase</i>
                        </a>
                    </li>
                </ul>


            </div>
        </nav>


</header>
<!-- END HEADER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <section id="content">

            <!--start container-->
            <div class="container">
                @include('layouts.postmessages')
                @yield('content')
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

    </div>
    <!-- END WRAPPER -->
</div>
<!-- END MAIN -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
<footer class="page-footer">

    <div class="footer-copyright">
        <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">RESERVAT MASTER</a> All rights reserved.</span>

        </div>
    </div>
</footer>
<!-- END FOOTER -->
<!-- ================================================
      Scripts
================================================ -->
<!-- jQuery Library -->
<script type="text/javascript" src="{{asset('materialize/vendors/jquery-3.2.1.min.js')}}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/vendors/prism/prism.js')}}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{asset('materialize/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/vendors/fullcalendar/lib/jquery-ui.custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/vendors/fullcalendar/lib/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/vendors/chartjs/chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/js/scripts/data-tables.js')}}"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{asset('materialize/js/plugins.js')}}"></script>

<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{asset('materialize/js/custom-script.js')}}"></script>


</body>

</html>