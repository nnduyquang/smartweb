<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    {{--<title>@yield('title')</title>--}}
    <title>Smartlinks Thiết kế website chuẩn seo , thiết kế web giá rẻ chất lượng</title>
    <meta name="keywords" content="Thiết kế web chuẩn seo, thiết kế web giá rẻ chất lượng, Smartlinks thiết kế wen chuẩn seo" />
    <meta name="description" content="Chúng tôi chuyên thiết kế website chuẩn seo google, giá rẻ và chất lượng tốt tại tphcm , và
    tất cả các tỉnh khác trong và ngoài nước, chúng tối rất chân thành cám ơn vì đã tìm tới dịch vụ của chúng tôi, đật chất lượng
    và uy tín lên hàng đầu chúng tôi là smartlinks.vn." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="@yield('title')" />
    {{--<meta property="og:type" content="article" />--}}
    <meta property="og:url" content="@yield('url-og')" />
    <meta property="og:image" content="@yield('image-og')" />
    <meta property="og:description" content="@yield('description')" />
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Cuprum|Roboto|Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="shortcut icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    {{--<meta property="og:site_name" content="Site Name, i.e. Moz" />--}}
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header">

</header>

<div id="blurrMe">
    {{--@include('frontend.common.menu.m-menu')--}}
    {{--@include('frontend.common.menu.menu')--}}
    {{--@yield('slider')--}}
    @include('frontend.common.layout_master_topmenu_stiky')
    @yield('container')
    @include('frontend.common.layout_master_footer')
</div>
{{--@include('frontend.common.menu.m-sidebar')--}}
{{--@include('frontend.common.footer')--}}

{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{--@yield('scripts')--}}
{{ Html::script('js/scripts.js') }}
<div class="callback d-lg-none d-md-none">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0962599482" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="callback d-none d-md-block" style="right: 150px;bottom: -30px;left:inherit">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0962599482" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="mess_desk_bot d-none d-md-block">
    <a href="tel:0902710212" class="hotline-master"> 0902.710.212
    </a>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126675741-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126675741-1');
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c19a4a582491369ba9eae6e/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</Html>