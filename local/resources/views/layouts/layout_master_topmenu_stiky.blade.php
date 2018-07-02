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

    }

    div#layout_master_topmenu_sticky_middle > ul li a {
        display: inline-block;
        color: #4e4e4e;
        line-height: 86px;
        font-size: 18px;
        font-family: 'Asap Condensed', sans-serif;
        padding: 10px 8px;
        box-sizing: border-box;
        transition: .3s;
    }

    div#layout_master_topmenu_sticky_middle ul li a:hover {
        color: #00a6da;
        text-decoration: none;
        /*border-bottom: 3px solid #00a6da;*/
        box-sizing: border-box;
        background-color: #00a6da;
        color: white;

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
        img.logo {
            width: 100%;
            height: auto;
        }

        div#mobi_menu {
            font-size: 20px;
        }

        div#mobi_menu button {
            border: transparent;
            padding: 3px 10px;
            background-color: #696969;
            color: white;
        }
        
        div#smart_web_menu{
            background-image: url(images/bg/IehB7.png);
            background-repeat: no-repeat;
            background-size: auto 100%;
            background-position: right center;
        }
    }


</style>

<div class="container-fluid" id="smart_web_menu">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-3 p-0 align-self-center" id="layout_master_topmenu_sticky_left">
                <div class="row align-self-center text-left">
                    <div class="col-md-12 align-self-center">
                        <a href="http://localhost:8080/smls-thietkeweb/">
                            <img src="images/logo/Untitled-2.png" alt="" class="logo" style="width: 100%;height: auto">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 pl-3 align-self-center float-right d-lg-block d-md-block d-none"
                 id="layout_master_topmenu_sticky_middle">
                <ul>
                    <li><a href="">TÊN MIỀN</a></li>
                    <li><a href="{{url('hosting.html')}}">HOSTING</a></li>
                    <li><a href="">TIN TỨC-KHUYẾN MÃI</a></li>
                    <li><a href="{{url('website-mau.html')}}">WEBSITE MẪU</a></li>
                    <li><a href="{{url('ho-tro.html')}}">HỖ TRỢ</a></li>

                </ul>
            </div>
            <div class="col-md-3 p-0 align-items-center text-right d-flex justify-content-lg-end justify-content-sm-between"
                 id="layout_master_topmenu_sticky_right">
                <div id="mobi_menu" class="d-lg-none d-md-none d-sm-block">
                    <button href=""><i class="fas fa-bars"></i> MENU</button>
                </div>

                <ul class="h-social-nw">
                    <li class="d-lg-none d-md-none d-sm-none d-none"><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                    <li><a href=""><i class="fas fa-search"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook-f border-left pl-2"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-google-plus "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
