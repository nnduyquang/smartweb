<style>
    div#fe_h_OurRecentPort h5 {
        font-size: 36px;
        position: relative;
        padding-bottom: 10px;
        width: fit-content;
        margin: auto;
    }

    div#fe_h_OurRecentPort p {
        font-size: 16px;
        width: 60%;
        margin: auto;
        padding-top: 10px;
        color: #6c757d;
        padding-bottom: 38px;
    }

    div#fe_h_OurRecentPort h5:before {
        content: '';
        position: absolute;
        width: 68px;
        height: 2px;
        background-color: #0a95d1;
        left: 50%;
        transform: translate(-50%, 0%);
        bottom: -5px;
    }

    div#fe_h_OurRecentPort h5 span {
        color: #0a95d1;
        font-weight: 400;
    }

    div#fe_h_OurRecentPort button.btn-type.active {
        margin-bottom: 10px;
        border-radius: 5px;
        font-size: 18px;
        padding: 10px;
        cursor: pointer;
        background-color: #001342;
        border: 2px solid #001342;
        color: white;
    }

    div#fe_h_OurRecentPort button.btn-type {
        color: #001342;
        cursor: pointer;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        padding: 10px 18px;
        border: 2px solid #001342;
        background-color: transparent;
    }

    div#fe_h_OurRecentPort button.btn-type a:hover{
        text-decoration: none;
    }

    div#fe_h_OurRecentPort button.btn-type:hover {
        text-decoration: none;
        background-color: #001342;
        border: 2px solid #001342;
        color: white;
    }

    div.or-services {
        width: 100%;
        overflow: hidden;
        transition: .3s;
        position: relative;
    }

    div.or-services:before {
        content: '';
        position: absolute;
        width: 0px;
        height: 0px;
        border-top: 0px solid white;
        border-left: 0px solid white;
        top: 20px;
        left: 20px;
        z-index: 10;
        transition: .3s;

    }

    div.or-services:after {
        content: '';
        position: absolute;
        width: 0px;
        height: 0px;
        border-top: 0px solid white;
        border-left: 0px solid white;
        bottom: 20px;
        right: 20px;
        z-index: 10;
        transition: .3s;

    }

    div.or-services:hover::after {
        width: 40px;
        height: 40px;
        border-bottom: 1px solid white;
        border-right: 1px solid white;
    }

    div.or-services:hover::before {
        width: 40px;
        height: 40px;
        border-top: 1px solid white;
        border-left: 1px solid white;
    }

    div.or-services-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(00, 00, 00, 0.3);
        transition: .3s;
        z-index: 8;
    }

    div.or-services img {
        transition: .3s;
    }

    div.or-services h6 {
        position: absolute;
        width: fit-content;
        z-index: 13;
        color: white;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -55%);
        font-size: 0.9em;
        transition: .3s;
        opacity: 0;
        padding-top: 30px;
    }

    div.or-services p {
        position: absolute;
        line-height: 18px;
        z-index: 14;
        color: white;
        top: 95%;
        left: 50%;
        transform: translate(-50%, -85%);
        font-size: 0.9em;
        transition: .3s;
        opacity: 0;
    }

    div.or-services div.or-services-overlay-a {
        position: absolute;
        color: white;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -40%);
        font-size: 0.9em;
        transition: .3s;
        opacity: 0;
    }

    div.or-services div.or-services-overlay-a div {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin-right: 10px;
        text-align: center;
        background-color: rgba(00, 00, 00, 0.3);
        margin-right: 3px;
        margin-left: 3px;
        float: left;

    }

    div.or-services:hover div.or-services-overlay-a {
        opacity: 1;
        top: 40%;
    }

    div.or-services div.or-services-overlay-a div:hover {

        background-color: rgba(00, 00, 00, 0.8);

    }

    div.or-services div.or-services-overlay-a div a {
        color: white;
    }

    div.or-services div.or-services-overlay-a a i {
        font-size: 18px;
        line-height: 48px;
    }

    div.or-services:hover p {
        opacity: 1;
        top: 85%;
    }

    div.or-services:hover h6 {
        opacity: 1;
        padding-top: 0px;
    }

    div.or-services:hover img {
        filter: blur(3px);
        transform: scale(1.2);
    }
</style>

<div class="container-fluid" id="fe_h_OurRecentPort">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>DỰ ÁN <span>GẦN ĐÂY</span></h5>
                <p>
                    Với hơn 5 năm kinh nghiệm trong lĩnh vực thiết kế website và marketing online,
                    Những website chúng tôi thiết kế luôn dựa trên những tiêu chuẩn thiết kế có lợi cho khách hàng.
                </p>

                <div class="mb-4">
                    <button class="btn-type active"><a href="{{URL::asset('website-mau.html')}}" class="btn-type active">Tất cả</a></button>
                    <button class="btn-type"><a href="{{URL::asset('website-mau.html')}}" >Thương hiệu</a></button>
                    <button class="btn-type"><a href="{{URL::asset('website-mau.html')}}" >Dịch vụ</a></button>
                    <button class="btn-type"><a href="{{URL::asset('website-mau.html')}}" >Marketing</a></button>
                    <button class="btn-type"><a href="{{URL::asset('website-mau.html')}}" >Shop</a></button>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="or-services">
                            <div class="or-services-overlay">
                                <div class="or-services-overlay-a">
                                    <div>
                                        <a href="{{URL::asset('website-mau.html')}}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="http://saigonreal365.com/">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>Website Bất động sản</h6>
                                <p style="color: white">Chuyên trang thương mại về bất động sản.</p>
                            </div>
                            <img src="{{URL::asset('images/Banner/1.jpg')}}" alt="">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="or-services">
                            <div class="or-services-overlay">
                                <div class="or-services-overlay-a">
                                    <div>
                                        <a href="{{URL::asset('website-mau.html')}}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="http://tuvandinhcu.com.vn/">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>Website Tư vấn định cư</h6>
                                <p style="color: white">Website về tư vấn định cư hỗ trợ định cư nước ngoài.</p>
                            </div>
                            <img src="{{URL::asset('images/Banner/2.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="or-services">
                            <div class="or-services-overlay">
                                <div class="or-services-overlay-a">
                                    <div>
                                        <a href="{{URL::asset('website-mau.html')}}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="http://smartlinks.vn/">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>Dịch vụ Marketing Online</h6>
                                <p class="mt-2" style="color: white">Chúng tôi đưa ra các giải pháp Marketing Online tối
                                    ưu nhất.</p>
                            </div>
                            <img src="{{URL::asset('images/Banner/3.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="or-services">
                            <div class="or-services-overlay">
                                <div class="or-services-overlay-a">
                                    <div>
                                        <a href="{{URL::asset('website-mau.html')}}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="http://tuyendungbatdongsan.com/">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>Website Tuyển Dụng BĐS</h6>
                                <p style="color: white">Chuyên Trang Tuyển Dụng Bất Động Sản</p>
                            </div>
                            <img src="{{URL::asset('images/Banner/4.jpg')}}" alt="">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="or-services">
                            <div class="or-services-overlay">
                                <div class="or-services-overlay-a">
                                    <div>
                                        <a href="{{URL::asset('website-mau.html')}}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="http://xedienhoangnhat.com/">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>Dịch vụ sửa chửa xe điện</h6>
                                <p style="color: white">Website cung cấp dịch vụ sửa chửa xe điện.</p>
                            </div>
                            <img src="{{URL::asset('images/Banner/5.jpg')}}" alt="">

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="or-services">
                            <div class="or-services-overlay">
                                <div class="or-services-overlay-a">
                                    <div>
                                        <a href="{{URL::asset('website-mau.html')}}">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="http://ngangia.com.vn/">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>Website thương mại điện tử</h6>
                                <p style="color: white">Cung cấp website bán hàng Online thông minh.</p>
                            </div>
                            <img src="{{URL::asset('images/Banner/6.jpg')}}" alt="">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>