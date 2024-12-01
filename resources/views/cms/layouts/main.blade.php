<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>CMS Sai Cowork</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ ('/cms/img/favicon.png') }}" rel="icon">
        <link href="{{ ('/cms/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ ('/cms/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ ('/cms/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ ('/cms/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ ('/cms/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ ('/cms/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ ('/cms/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ ('/cms/vendor/simple-datatables/style.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">


        <!-- Template Main CSS File -->
        <link href="{{ ('/cms/css/style.css') }}" rel="stylesheet">
    </head>
    
    <body>
        
        {{-- content --}}
        @yield('cms-content')

        <!-- Vendor JS Files -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{ ('/cms/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ ('/cms/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ ('/cms/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ ('/cms/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ ('/cms/vendor/quill/quill.js') }}"></script>
        <script src="{{ ('/cms/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ ('/cms/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ ('/cms/vendor/php-email-form/validate.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
        {{-- Toast notification --}}
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':

                        toastr.options.timeOut = 10000;
                        toastr.info("{{ Session::get('message') }}");
                        var audio = new Audio('audio.mp3');
                        audio.play();
                        break;
                    case 'success':

                        toastr.options.timeOut = 10000;
                        toastr.success("{{ Session::get('message') }}");
                        var audio = new Audio('audio.mp3');
                        audio.play();

                        break;
                    case 'warning':

                        toastr.options.timeOut = 10000;
                        toastr.warning("{{ Session::get('message') }}");
                        var audio = new Audio('audio.mp3');
                        audio.play();

                        break;
                    case 'error':

                        toastr.options.timeOut = 10000;
                        toastr.error("{{ Session::get('message') }}");
                        var audio = new Audio('audio.mp3');
                        audio.play();

                        break;
                }
            @endif
        </script>

        <!-- Template Main JS File -->
        <script src="{{ ('/cms/js/main.js') }}"></script>
    </body>

</html>