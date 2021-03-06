<style>
    body {
        margin: 0;
        font-size: 28px;
    }

    .logo {
        height: 86px;
        width: auto;
    }

    div#layout_master_topmenu_sticky_middle ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    div#layout_master_topmenu_sticky_middle ul li {
        display: inline-flex;
        box-sizing: border-box;
        margin-right: -6px;
    }

    div#layout_master_topmenu_sticky_middle ul li a {
        display: inline-block;
        color: #4e4e4e;
        line-height: 86px;
        font-size: 18px;
        font-family: 'Asap Condensed', sans-serif;
        padding: 10px 16px;
        box-sizing: border-box;
        transition: .3s;
        border-bottom: 2px solid white;
    }

    div#layout_master_topmenu_sticky_middle ul li a:hover {
        color: #00a6da;
        text-decoration: none;
        /*border-bottom: 3px solid #00a6da;*/
        box-sizing: border-box;
        background-color: #00a6da;
        color: white;
        border-bottom: 2px solid #00a6da;

    }

    div#layout_master_topmenu_sticky_middle ul li a.active {
        color: #00a6da;
        text-decoration: none;
        /*border-bottom: 3px solid #00a6da;*/
        box-sizing: border-box;
        background-color: #00a6da;
        color: white;
        border-bottom: 2px solid #002752;

    }

    div#layout_master_topmenu_sticky .col-4 ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    div#layout_master_topmenu_sticky_right ul li {
        display: inline-flex;
        padding: 0 3px;

    }

    div#layout_master_topmenu_sticky_right ul li a {
        color: #8e8e8e;
        font-size: 20px;
    }

    div#layout_master_topmenu_sticky_right ul li a:hover {
        color: #4e4e4e;
    }

    div#layout_master_topmenu_sticky_right ul li .fa-google-plus:hover{
        color: red;
    }

    div#layout_master_topmenu_sticky_right ul li .fa-twitter:hover{
        color: #05a3d4;
    }
    div#layout_master_topmenu_sticky_right ul li .fa-facebook-f:hover{
        color: #035670;
    }

    @media only screen and (max-width: 770px) {

        .h-social-nw{

        }

        img.logo {
            padding-top: 10px;
            width: 100%;
            height: auto;
        }

        div#mobi_menu {
            font-size: 20px;
        }

        div#mobi_menu button {
            border: transparent;
            background-color: transparent;
            color: #696969;
        }
        
        div#smart_web_menu{
            background-image: url({{URL::asset('images/bg/IehB7.png')}});
            background-repeat: no-repeat;
            background-size: auto 100%;
            background-position: right center;
        }
    }
    div#dv_content:hover div#dichvu_khac{
        display: block;
        top: 100%;
    }

   div#dichvu_khac:hover  div#dv_content{
       background-color: #05a3d4;
    }
    
    div#dv_content{
        /*background-color: #05a3d4;*/
    }

    div#dichvu_khac{
        text-align: center;
        margin-top: 1px;
        z-index: 12;
        display: none;
        font-size: 18px;
        font-family: 'Asap Condensed', sans-serif;
        transition: .3s;
        color: white;
        top: 0%;
        background-color: #05a3d4;
        transition: .3s;
    }

    div#dichvu_khac ul li {
       margin-bottom: 1px;
        display: block;
    }

    div#dichvu_khac ul li a{
        text-align: center;
        line-height: 30px;
        color: white;
        display: block;
        min-width: 200px;
        background-color: #05a3d4;
        border-bottom: 1px solid white;
    }

    div#dichvu_khac ul li a:hover{
        padding-left: 13px;
    }

    div#dichvu_khac ul li a:hover:hover div#dv_content{
        background-color: #05a3d4;
    }



</style>

<div class="container-fluid" id="smart_web_menu">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-2 p-0 align-self-center" id="layout_master_topmenu_sticky_left">
                <div class="row align-self-center text-left">
                    <div class="col-md-12 align-self-center">

                        <a href="{{URL::to('/')}}">
                            <img src="{{URL::asset('images/logo/Untitled-2.png')}}" alt="" class="logo" style="width: 276px;height: 90%">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-0 text-right align-self-center d-lg-block d-md-block d-none"
                 id="layout_master_topmenu_sticky_middle">
                <ul>

                    {{--<li><a href="">GIỚI THIỆU</a></li>--}}
                    <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">TRANG CHỦ</a></li>
                    <li><a class="{{ request()->is('website-mau.html') ? 'active' : '' }}" href="{{url('website-mau.html')}}">KHO GIAO DIỆN</a></li>
                    <li><a class="{{ request()->is('bang-gia.html') ? 'active' : '' }}" href="{{URL::to('bang-gia.html')}}">BẢNG GIÁ</a></li>
                    <li><div class="position-relative" id="dv_content">
                            <a href="{{url('dich-vu/hosting.html')}}" class="{{ request()->is('dich-vu/*') ? 'active' : '' }}">DỊCH VỤ KHÁC</a>
                            <div class="position-absolute" id="dichvu_khac">
                                <ul>
                                    <li><a href="{{url('dich-vu/hosting.html')}}" class="dichvu-khac">HOSTING & TÊN MIỀN</a></li>
                                    <li><a href="{{URL::to('dich-vu/quan-tri-website.html')}}" class="dichvu-khac">DỊCH VỤ QUẢN TRỊ WEB</a></li>
                                    <li><a href="" class="dichvu-khac">DỊCH VỤ DIGITAL MARKETING</a></li>
                                    <li><a href="" class="dichvu-khac">DỊCH VỤ EMAIL DOANH NGHIỆP</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a class="{{ request()->is('tin-tuc/*') ? 'active' : '' }}" href="{{url('tin-tuc/danh-muc-tin-cong-nghe.html')}}">TIN TỨC</a></li>
                    <li><a class="{{ request()->is('ho-tro.html') ? 'active' : '' }}" href="{{url('ho-tro.html')}}">HỖ TRỢ</a></li>

                </ul>
            </div>
            <div class="col-md-auto p-0 align-items-center text-right d-flex justify-content-lg-end justify-content-between"
                 id="layout_master_topmenu_sticky_right">
                <div id="mobi_menu" class="d-lg-none d-md-none d-sm-block">
                    <button href=""><i class="fas fa-bars"></i> MENU</button>
                </div>

                <ul class="h-social-nw pt-1">
                    <li class="d-lg-none d-md-none d-sm-none d-none"><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                    {{--<li><a href=""><i class="fas fa-search"></i></a></li>--}}
                    <li><a href=""><i class="fab fa-facebook-f "></i></a></li>
                    {{--<li><a href=""><i class="fab fa-twitter"></i></a></li>--}}
                    <li><a href=""><i class="fab fa-google-plus border-left pl-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$('.dichvu-khac').hover()--}}
    {{--})--}}
{{--</script>--}}