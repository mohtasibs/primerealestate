<!doctype html>
<html lang="en" data-bs-theme="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prime Real Estate Website">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Prime Real Estate</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(base_path('assets/img/favicon.png')) }}">

    <!-- ✅ Buying Buddy CSS & Setup -->
    <script src="https://www.mbb2.com/version3/css/theme/acid/ESXzarvb"></script>
    <script>
        var MBB = { seo: "false", data: { acid: "ESXzarvb" } };
        function mbbMapLoaded() { MBB.googleMaps = true; };
    </script>
    <!-- Google Maps JS (MUST load after mbbMapLoaded) -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=mbbMapLoaded&libraries=places&key=AIzaSyCFeHHlboPct7Yj6LmMVDcao4R_qlQNTlc"></script>
    <!-- Buying Buddy Main Script -->
    <script src="https://d2w6u17gtnamny.cloudfront.net/scripts/my-buying-buddy.5.0.js.gz"></script>

    <!-- Core CSS with cache busting -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}?v={{ filemtime(base_path('assets/css/bootstrap.min.css')) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}?v={{ filemtime(base_path('assets/css/owl.carousel.min.css')) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}?v={{ filemtime(base_path('assets/css/owl.theme.default.min.css')) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/select2.min.css') }}?v={{ filemtime(base_path('assets/css/select2.min.css')) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}?v={{ filemtime(base_path('assets/css/fontawesome.css')) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}?v={{ filemtime(base_path('assets/css/bootstrap-icons.css')) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}?v={{ filemtime(base_path('assets/css/style.css')) }}" rel="stylesheet">

    <!-- External CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div id="main-wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <!-- ✅ Buying Buddy Disclaimer (required for compliance) -->
    <div id="MBBv3_Disclaimer"></div>

    <a href="#" class="btn-primary back-to-top" id="back2Top"><i class="bi bi-arrow-up"></i></a>

    <!-- Core JS with cache busting -->
    <script src="{{ asset('assets/js/jquery.min.js') }}?v={{ filemtime(base_path('assets/js/jquery.min.js')) }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}?v={{ filemtime(base_path('assets/js/popper.min.js')) }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}?v={{ filemtime(base_path('assets/js/bootstrap.min.js')) }}"></script>
    <script src="{{ asset('assets/js/rangeslider.js') }}?v={{ filemtime(base_path('assets/js/rangeslider.js')) }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}?v={{ filemtime(base_path('assets/js/select2.min.js')) }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}?v={{ filemtime(base_path('assets/js/owl.carousel.min.js')) }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}?v={{ filemtime(base_path('assets/js/jquery.magnific-popup.min.js')) }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}?v={{ filemtime(base_path('assets/js/custom.js')) }}"></script>

    <!-- External JS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script> new WOW().init(); </script>

    <!-- Buying Buddy Widget Loader -->
    <script async src="https://cdn.buyingbuddy.com/widgets/bb.js?key=AIzaSyCFeHHlboPct7Yj6LmMVDcao4R_qlQNTlc"></script>


    <!-- Optional Counter Script -->
    <script>
        try {
            const counters = document.querySelectorAll('.counter-value');
            const speed = 2500;
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    let inc = target / speed;
                    if (inc < 1) inc = 1;
                    if (count < target) {
                        counter.innerText = Math.min(count + inc, target).toFixed(0);
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        } catch (err) {
            console.error("Error in counter script:", err);
        }
    </script>

    <script>
        window.onscroll = function () { scrollFunction(); };
        function scrollFunction() {
            const mybutton = document.getElementById("back2Top");
            if (mybutton) {
                mybutton.style.display = (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) ? "block" : "none";
            }
        }
    </script>

    @yield('scripts')
</body>
</html>
