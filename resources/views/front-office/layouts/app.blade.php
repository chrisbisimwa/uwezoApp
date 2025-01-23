<!doctype html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWX2ER6G3M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HWX2ER6G3M');
    </script>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>UWEZO APP</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="KivuTech">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit."> --}}

    {!! seo($blogPost ?? null) !!}

    <link rel="stylesheet" href="{{ asset('front-office-assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/css/plugins/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-office-assets/css/style.css') }}">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front-office-assets/img/logo-uwezo.png') }}"> --}}
    <link rel="icon" type="image/x-icon" sizes="32x32" href="{{ asset('/images/icons/favicon.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />





    @livewireStyles

    @laravelPWA
</head>


<body class="light-bg">

    @include('front-office.layouts.header')

    @yield('content')


    @include('front-office.layouts.footer')




    <script src="{{ asset('front-office-assets/js/plugins/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.event.move.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/plugins/particles.min.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/andro-audioplayer.js') }}"></script>
    <script src="{{ asset('front-office-assets/js/main.js') }}"></script>

    <script src="{{ asset('js/share.js') }}"></script>

    @livewireScripts



    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>



    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    @if (session()->has('success'))
        <script>
            var notyf = new Notyf({
                dismissible: true
            })
            notyf.success('{{ session('success') }}')
        </script>
    @endif





    <script>
        /* Simple Alpine Image Viewer */
        document.addEventListener('alpine:init', () => {
            Alpine.data('imageViewer', (src = '') => {
                return {
                    imageUrl: src,

                    refreshUrl() {
                        this.imageUrl = this.$el.getAttribute("image-url")
                    },

                    fileChosen(event) {
                        this.fileToDataUrl(event, src => this.imageUrl = src)
                    },

                    fileToDataUrl(event, callback) {
                        if (!event.target.files.length) return

                        let file = event.target.files[0],
                            reader = new FileReader()

                        reader.readAsDataURL(file)
                        reader.onload = e => callback(e.target.result)
                    },
                }
            })
        })
    </script>


    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function(registration) {
                // Registration was successful
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>


</body>

</html>
