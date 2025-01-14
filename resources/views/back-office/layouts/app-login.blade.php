<!doctype html>
<html dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark"
    data-vertical-style="overlay" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SAANALETU</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="KivuTech">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <link rel="icon" href="{{ asset('back-office-assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <script src="{{ asset('back-office-assets/js/authentication-main.js') }}"></script>
    <link id="style" href="{{ asset('back-office-assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-office-assets/css/styles.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-office-assets/css/icons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back-office-assets/libs/swiper/swiper-bundle.min.css') }}">



    @livewireStyles
</head>


<body class="bg-white">



    @yield('content')







    @livewireScripts

    <script src="{{ asset('back-office-assets/js/custom-switcher.min.js') }}"></script>
    <script src="{{ asset('back-office-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back-office-assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('back-office-assets/js/authentication.js') }}"></script>
    <script src="{{ asset('back-office-assets/js/show-password.js') }}"></script>



    <script src="//unpkg.com/alpinejs" defer></script>
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



</body>

</html>
