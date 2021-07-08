<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta name="author" content="Olayinka Sagoe" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Animation Libraries -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />


    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

</head>
<body class="tt-page-product-single">

@yield('content')
</body>


<script src="{{asset('external/jquery/jquery.min.js')}}"></script>
<script src="{{asset('external/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('external/elevatezoom/jquery.elevatezoom.js')}}"></script>
<script src="{{asset('external/slick/slick.min.js')}}"></script>
<script src="{{asset('external/panelmenu/panelmenu.js')}}"></script>
<script src="{{asset('external/countdown/jquery.plugin.min.js')}}"></script>
<script src="{{asset('external/countdown/jquery.countdown.min.js')}}"></script>
<script src="{{asset('external/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('external/lazyLoad/lazyload.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- form validation and sending to mail -->
<script src="{{asset('external/form/jquery.form.js')}}"></script>
<script src="{{asset('external/form/jquery.validate.min.js')}}"></script>
<script src="{{asset('external/form/jquery.form-init.js')}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src='https://www.google.com/recaptcha/api.js?render={{config('app.google_site_key')}}'></script>


@stack('style')
@stack('page-trigger')

</html>