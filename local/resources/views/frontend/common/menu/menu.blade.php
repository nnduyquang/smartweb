<div id="menu" style="background-image: url({{URL::asset('images/bg/IehB7.png')}});background-size: 0">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-2 p-0 align-self-center" id="menu-left">
                <div class="row align-self-center text-left">
                    <div class="col-md-12 align-self-center">

                        <a href="{{URL::to('/')}}">
                            <img src="{{URL::asset('images/logo/Untitled-2.png')}}" alt="" class="logo" style="width: 276px;height: 90%">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-0 text-right align-self-center d-lg-block d-md-block d-none"
                 id="menu-middle">
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
                 id="menu-right">
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