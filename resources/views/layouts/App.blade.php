<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Jne App | @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ url('dashboard') }}/assets/img/jne-express-new-2016-logo-375E58A33D-seeklogo.com.png">

    <link href="{{ url('public/asset') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/asset') }}/vendor/chartist/css/chartist.min.css">
    <!-- Vectormap -->
    <link href="{{ url('public/asset') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{ url('public/asset') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ url('public/asset') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('public/asset') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8049cde48d.js" crossorigin="anonymous"></script>
    @stack('style')

</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        @include('layouts.section.header')
        @include('layouts.section.sidebar')

        <div class="content-body">
            <!-- row -->
            <div class="container">
                @include('utils.notif')
                @yield('content')
            </div>
        </div>

        @include('layouts.section.footer')


    </div>


    <!-- Required vendors -->
    <script src="{{ url('public/asset') }}/vendor/global/global.min.js"></script>
    <script src="{{ url('public/asset') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ url('public/asset') }}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ url('public/asset') }}/js/custom.min.js"></script>
    <script src="{{ url('public/asset') }}/js/deznav-init.js"></script>
    <script src="{{ url('public/asset') }}/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ url('public/asset') }}/vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ url('public/asset') }}/vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="{{ url('public/asset') }}/js/dashboard/dashboard-1.js"></script>

    @stack('script')

    <script>
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                center: true,
                dots: false,
                navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                responsive: {
                    0: {
                        items: 2
                    },
                    400: {
                        items: 3
                    },
                    700: {
                        items: 5
                    },
                    991: {
                        items: 6
                    },

                    1200: {
                        items: 4
                    },
                    1600: {
                        items: 5
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script>

</body>

</html>
