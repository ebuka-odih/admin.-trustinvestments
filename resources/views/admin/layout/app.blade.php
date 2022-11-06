<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Dashboard | Trust investment hub</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js" integrity="sha512-ywaT8M9b+VnJ+jNG14UgRaKg+gf8yVBisU2ce+YJrlWwZa9BaZAE5GK5Yd7CBcP6UXoAnziRQl40/u/qwVZi4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--amcharts -->
    <link href="{{ asset('css/export.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap-extend -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">

    <!-- Crypto_Admin skins -->
    <link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
		  <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="light-logo">
{{--	  	  <img src="images/logo-dark-text.png" alt="logo" class="dark-logo">--}}
	  </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://admin.unitrustinvest.com/images/user.png" class="user-image rounded-circle" alt="User Image">
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
{{--                                        <a href="logout"><i class="fa fa-sign-out"></i> Logout</a>--}}
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="ulogo">
                    <a href="/">
                        <!-- logo for regular state and mobile devices -->
                        <!-- <span><b>Kings </b>Crypto <b>Trading</b></span> -->
                    </a>
                </div>
                <div class="image">
                    <img src="https://admin.unitrustinvest.com/images/user.png" class="rounded-circle" alt="User Image">
                </div>
                <div class="info">
                    <h4>Admin</h4>
                    <p></p>

                </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="nav-devider"></li>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-chart-area"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
{{--                      <i class="fas fa-angle-right pull-right"></i>--}}
                    </span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{ route('admin.customers') }}">
                        <i class="fas fa-money-bill"></i> <span>View Customers</span>
                        <span class="pull-right-container">
{{--                            <i class="fas fa-angle-right pull-right"></i>--}}
                    </span>
                    </a>
                </li>
                <!-- <li class=" ">
                  <a href="Deposit">
                    <i class="fa fa-money"></i> <span>Approve Deposit</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                </li> -->

                <li class=" ">
                    <a href="{{ route('admin.documents') }}">
                        <i class="fas fa-file"></i> <span>Approve Documents</span>
                        <span class="pull-right-container">
{{--                            <i class="fas fa-angle-right pull-right"></i>--}}
                    </span>
                    </a>
                </li>

                <!-- <li class="">
                  <a href="Withdrawal">
                    <i class="fa fa-check"></i> <span>Pending Withdrawals</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                </li> -->
                <li class="">
                    <a href="{{ route('admin.settings') }}">
                        <i class="fas fa-user"></i> <span>Change Settings</span>
                        <span class="pull-right-container">
{{--                            <i class="fas fa-angle-right pull-right"></i>--}}
                    </span>
                    </a>
                </li>
                <li>

                    <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                        <span class="pull-right-container">
{{--                     <i class="fas fa-angle-right pull-right"></i>--}}
                    </span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </section>
    </aside>
    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <center>
            <div id="google_translate_element" style="margin-bottom: 10px;"></div>
        </center>
     @yield('content')
    <!-- End Row -->
    </div>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    &copy; 2008 - 2022 <a href="https://www.fxtradeprime.com">Uni Trust Invest</a>. All Rights Reserved.
</footer>

</div>

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- popper -->
<script src="{{ asset('js/popper.min.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('js/bootstrap.js') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

<!-- FastClick -->
<script src="https://admin.unitrustinvest.com/assets/vendor_components/fastclick/lib/fastclick.js"></script>
<!-- SweetAlert -->
<script type="text/javascript" src="https://admin.unitrustinvest.com/js/sweetalert2.min.js"></script>

<!-- This is data table -->
<script src="https://admin.unitrustinvest.com/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>

<!-- Crypto_Admin App -->
<script src="{{ asset('js/template.js') }}"></script>

<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
<script src="https://admin.unitrustinvest.com/js/pages/dashboard.js"></script>

<!-- Crypto_Admin for demo purposes -->
<script src="https://admin.unitrustinvest.com/js/demo.js"></script>


<!-- Crypto_Admin for Data Table -->
<script src="https://admin.unitrustinvest.com/js/pages/data-table.js"></script>
<!-- Ajax Get Data -->

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
        /*
        To remove the "powered by google",
        uncomment one of the following code blocks.
        NB: This breaks Google's Attribution Requirements:
        https://developers.google.com/translate/v2/attribution#attribution-and-logos
    */

        // Native (but only works in browsers that support query selector)
        if(typeof(document.querySelector) == 'function') {
            document.querySelector('.goog-logo-link').setAttribute('style', 'display: none');
            document.querySelector('.goog-te-gadget').setAttribute('style', 'font-size: 0');
        }

        // If you have jQuery - works cross-browser - uncomment this
        jQuery('.goog-logo-link').css('display', 'none');
        jQuery('.goog-te-gadget').css('font-size', '0');
    }
</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</body>
</html>
