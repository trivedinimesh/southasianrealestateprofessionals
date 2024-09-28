<!DOCTYPE html>
<html>
  <!-- Mirrored from expovent-react.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 16:02:56 GMT -->
  <!-- Added by HTTrack -->
  <meta
    http-equiv="content-type"
    content="text/html;charset=utf-8"
    />
  <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8" />
        <link
            rel="stylesheet"
            data-href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
            data-optimized-fonts="true"
            />
        <link rel="icon" href="{{ URL::asset('build/media/favicon.png') }}" />
        <title>@yield('title')</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="Generated by create next app" />
        <meta name="robots" content="noindex, follow" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
            />
        <link rel="icon" href="{{ URL::asset('build/media/favicon.png') }}" />
        <meta name="next-head-count" content="9" />
        <link
            rel="preload"
            href="{{ URL::asset('build/css/app.css') }}"
            as="style"
            />
        <link
            rel="stylesheet"
            href="{{ URL::asset('build/css/app.css') }}"
            data-n-g=""
            />
        <noscript data-n-css=""></noscript>
        <script src="_next/static/chunks/webpack-6afe86ff35db31cc.js" defer=""></script>
        <script src="_next/static/chunks/framework-d51ece3d757c7ed2.js" defer=""></script>
        <script src="_next/static/chunks/main-81bb36a6aee6d986.js" defer=""></script>
        <script src="_next/static/chunks/_app-d4ec09ba86fa23b5.js" defer=""></script>
        <script src="_next/static/chunks/4607-44de2254aebe5f39.js" defer=""></script>
        <script src="_next/static/chunks/5559-e8fa78a1c2db10a2.js" defer=""></script>
        <script src="_next/static/chunks/2107-a151e37794064242.js" defer=""></script>
        <script src="_next/static/chunks/35-f588ec9e24d0a4dd.js" defer=""></script>
        <script src="_next/static/chunks/pages/dashboard-709aa79ceb0d142f.js" defer=""></script>
        <script src="_next/static/10tcLR4Z-1GmfDXmyRDs3/_buildManifest.js" defer=""></script>
        <script src="_next/static/10tcLR4Z-1GmfDXmyRDs3/_ssgManifest.js" defer=""></script>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"/>
        <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    </head>
    <body>
        
            

            <!-- header-section -->
            
            @include('layouts.frontend-dashboard-header')

            @yield('body')

            
            </main>
        </div>
        <script id="__NEXT_DATA__" type="application/json">
            {
            "props": { "pageProps": {} },
            "page": "/",
            "query": {},
            "buildId": "10tcLR4Z-1GmfDXmyRDs3",
            "nextExport": true,
            "autoExport": true,
            "isFallback": false,
            "scriptLoader": []
            }
        </script>
        <script src="{{ URL::asset('build/js/polyfills-0d1b80a048d4787e.js') }}"></script>
        <script src="{{ URL::asset('build/js/webpack6afe86ff35db31cc.js') }}"></script>
        <script src="{{ URL::asset('build/js/1239-12e8f239e1957a1b.js') }}"></script>
        <script src="{{ URL::asset('build/js/7142-66de4c62f6d97743.js') }}"></script>
        <!-- <script src="{{ URL::asset('build/js/8529-4b69ae82a6f4878e.js') }}"></script> -->
        <script src="{{ URL::asset('build/js/index-338f7080ea9bc9b0.js') }}"></script>
        <script>
            var box = document.querySelector('.bar-icon');
            var offcanvas__info = document.querySelector('.offcanvas__info');
            var offcanvas__overlay = document.querySelector('.offcanvas__overlay');
            var closeButton = document.querySelector('.offcanvas__close');

            // Function to toggle classes
            function toggleClasses(add) {
                if (add) {
                    offcanvas__info.classList.add('info-open');
                    offcanvas__overlay.classList.add('overlay-open');
                } else {
                    offcanvas__info.classList.remove('info-open');
                    offcanvas__overlay.classList.remove('overlay-open');
                }
            }

            // Add classes when users click on the box
            box.addEventListener('click', function () {
                toggleClasses(true);
            });
            
            // Handle click events
            document.addEventListener('click', function (event) {
                // Close offcanvas if clicking outside the box and close button
                if (event.target !== box && !box.contains(event.target) && !offcanvas__info.contains(event.target)) {
                    toggleClasses(false);
                }
            });

            // Prevent clicks inside offcanvas__info from closing it
            offcanvas__info.addEventListener('click', function (event) {
                event.stopPropagation();
            });

            closeButton.addEventListener('click', function () {
                toggleClasses(false);
            });
        </script>
    </body>
  <!-- Mirrored from expovent-react.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 16:03:10 GMT -->
</html>