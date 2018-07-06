<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Thiết kế web chuẩn seo, thiết kế web giá rẻ chất lượng, Smartlinks thiết kế wen chuẩn seo" />
    <meta name="description" content="Chúng tôi chuyên thiết kế website chuẩn seo google, giá rẻ và chất lượng tốt tại tphcm , và
    tất cả các tỉnh khác trong và ngoài nước, chúng tối rất chân thành cám ơn vì đã tìm tới dịch vụ của chúng tôi, đật chất lượng
    và uy tín lên hàng đầu chúng tôi là smartlinks.vn." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="font/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Cuprum|Roboto|Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Smartlinks Thiết kế website chuẩn seo , thiết kế web giá rẻ chất lượng</title>
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
</head>
<body>
@include('layouts.layout_master_topmenu_stiky')

@yield('bodycontent')

@include('layouts.layout_master_footer')
</body>


{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
{{ Html::script('js/scripts.js') }}
{{ Html::script('js/be_scripts.js') }}
<script src="{{URL::asset('owlcarousel/dist/owl.carousel.min.js')}}"></script>
<script>
    new WOW().init();
</script>
</html>