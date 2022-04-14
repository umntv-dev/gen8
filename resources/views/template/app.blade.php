<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page Title -->
    <title>UMN TV</title>
    <!-- UMN TV Icon -->

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/template/app.css') }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('css/template/font.css') }}">
    <!-- Custom Navbar -->
    <link rel="stylesheet" href="{{ asset('css/template/navbar.css') }}">
    <!-- Footer -->
    <link rel="stylesheet" href="{{ asset('css/template/footer.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <!-- About Us -->
    <link rel="stylesheet" href="{{ asset('css/template/about.css') }}">
    <!-- Article -->
    <link rel="stylesheet" href="{{ asset('css/template/article.css') }}">
    <!-- Article detail -->
    <link rel="stylesheet" href="{{ asset('css/template/articledetail.css') }}">

    <!-- Custom CSS -->
    @yield('custom-css')
</head>
<body>

    <div class="content">
        @include('template.navbar')
        @yield('content')
    </div>
    
    <!-- Jquery 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Sweetalert -->
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
    <!-- Swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    @include('template.footer')
    <script>
        $(document).ready(function(){
            $('#nav-icon3').click(function(){
                $(this).toggleClass('open');
                $('.nav-overlay').toggleClass('active')
                $('.nav-main').toggleClass('active')
            });
        });
    </script>

    <!-- Custom JS -->
    @yield('custom-js')


</body>
</html>