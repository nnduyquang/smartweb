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
    <link rel="shortcut icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('font/flaticon.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Cuprum|Roboto|Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/v4-shims.css">
    {{--<link rel="stylesheet" href="{{URL::asset('owlcarousel/dist/assets/owl.carousel.min.css')}}">--}}
    {{--<link rel="stylesheet" href="{{URL::asset('owlcarousel/dist/assets/owl.theme.default.min.css')}}">--}}
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b447ec14af8e57442dc7d20/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>


{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
{{ Html::script('js/scripts.js') }}
{{ Html::script('js/be_scripts.js') }}
{{--<script src="{{URL::asset('owlcarousel/dist/owl.carousel.min.js')}}"></script>--}}
<script>
    new WOW().init();
</script>
@yield('script')
</html>