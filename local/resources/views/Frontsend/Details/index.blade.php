@extends('layouts.master')
@section('bodycontent')
    <style>
        div#chitiet_navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        div#chitiet_navbar {
            background-image: url('images/bg/slider-2-1.jpg');
            -webkit-background-size: cover;
            background-size: cover;
        }

        div#chitiet_navbar ul li {
            display: inline-flex;

        }

        div#chitiet_navbar ul li a {
            position: relative;
            font-size: 16px;
            font-family: 'Asap Condensed', sans-serif;
            padding-right: 16px;
            padding-bottom: 16px;
            color: #f2f0f0;
        }

        div#chitiet_navbar ul li a:hover {
            text-decoration: none;
        }

        div#chitiet_navbar ul li:last-child a:after {
            position: absolute;
            content: '';
            border: none;
        }

        div#chitiet_navbar ul li a:after {
            position: absolute;
            content: '';
            width: 10px;
            height: 10px;
            border-top: 2px solid #f2f0f0;
            border-right: 2px solid #f2f0f0;
            top: 18%;
            right: 0;
            transform: rotate(45deg);
        }

        div#chitiet_content_top h1, div#chitiet_content_top h2 {
            font-size: 28px;
            font-family: 'Asap Condensed', sans-serif;
            color: #0a95d1;
        }

        div#chitiet_content_top span {
            font-size: 18px;
            font-family: 'Asap Condensed', sans-serif;
            color: #888888;
        }

        div#chitiet_content_top button {
            width: 49%;
            font-size: 16px;
            font-family: 'Asap Condensed', sans-serif;
            color: white;
            padding: 5px 20px;
            border: none;
            cursor: pointer;
        }

        div#chitiet_content_top ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        div#chitiet_content_top ul li {
            font-family: 'Asap Condensed', sans-serif;
            font-size: 18px;
            position: relative;
            padding-left: 30px;
            margin-bottom: 10px;
        }

        div#chitiet_content_top ul li:before {
            position: absolute;
            content: '';
            background: url('images/icon/tick.png');
            -webkit-background-size: 50%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 50%;
            width: 30px;
            height: 30px;
            display: block;
            left: -10px;
        }

        div#btn_chitiet button {
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid #3a8104;
            background-color: transparent;
            color: red;
        }

        ul.li_linhvuc {
            padding: 0;
            list-style: none;
            margin: 0;
        }

        ul.li_linhvuc li {
            list-style: none;
            padding: 4px 10px 7px 39px;
            float: left;
            width: 48%;
        }

        ul.li_linhvuc li a{
            width: inherit;
            color: ;

        }

        @media screen and (max-width: 480px) and (min-width: 320px) {
            ul.li_linhvuc li {
                width: 98%;
            }
            div#chitiet_content_top button {
                width: 96%;
            }
        }

    </style>
    <div class="container-fluid" id="chitiet_navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Web TMĐT</a></li>
                        <li><a href="">Website bán điện thoại</a></li>
                    </ul>

                </div>


            </div>
        </div>
    </div>


    <div class="container-fluid mt-2" id="chitiet_content_top">
        <div class="container">
            <div class="row">

                <div class="col-md-7 text-center">
                    <div class="position-relative" style="width: 90%;border: 1px solid #f2f0f0;padding: 2px;margin: auto">
                        <img src="{{URL::asset('images/banner/iphone_6_png_by_selenapurpleewdirect-2i.png')}}" alt=""
                             style="width: 100%;height: auto;">

                        <img src="{{URL::asset('images/banner/iphone_6_png_by_selenapurpleewdirect-d8bogti.png')}}"
                             alt=""
                             style="position: absolute;left: 45%;top:50%;height: 60%;width: auto;transform: translateY(-50%)">
                    </div>
                </div>
                <div class="col-md-5 pt-1 mb-3" style="border-bottom:1px dashed #888888">
                    <div class="row">

                        <div class="col-md-12 pb-4 mb-4" style="border-bottom:1px dashed #888888">
                            <h1>WEBSITE BÁN ĐIỆN THOẠI DI ĐỘNG</h1>
                            <span>Mẫu website : <span class="text-danger">#101</span></span><br>
                            <button class="btn-primary"><i class="fas fa-thumbtack"
                                                           style="transform: rotate(315deg);padding-right:3px"></i>
                                CHỌN MẪU NÀY
                            </button>
                            <button class="btn-secondary"><i class="fas fa-laptop pr-1"></i> XEM THỰC TẾ</button>
                        </div>

                        <div class="col-md-12 pb-4 mb-3" style="border-bottom:1px dashed #888888">
                            <ul>
                                <li>Thiết kế sang trọng, hiện đại</li>
                                <li>Sản phẩm được trưng bày một cách khoa học</li>
                                <li>Menu đơn giản rất dễ sử dụng</li>
                                <li>Giao diện thân thiện - thích ứng đa thiết bị (PC, tablet, mobile)</li>
                                <li>Tốc độ load trang nhanh</li>
                                <li>
                                    Điểm pagespeed <span class="text-success">85/100</span>
                                    <button class="btn-success ml-2" style="width: fit-content"> XEM ĐIỂM</button>
                                </li>
                            </ul>
                            <div id="btn_chitiet">
                                <button>Tính ưu việt</button>
                                <button>Quy trình thiết kế</button>
                                <button>Báo cáo</button>
                                <button>Nghiệm thu và bàn giao</button>
                            </div>
                        </div>

                        <div class="col-md-12" style="border-bottom:1px dashed #888888">
                            <h2>WEBSITE PHÙ HỢP CÁC LĨNH VỰC</h2>

                            <ul class="li_linhvuc">
                                <li><a href="">Bất Hàng Điện Tử</a></li>
                                <li><a href="">Công Nghệ & Kỹ Thuật Số</a></li>
                                <li><a href="">Điên Thoại Di Động</a></li>
                                <li><a href="">Phụ Kiện Số</a></li>
                                <li><a href="">Đồ Tiêu Dùng</a></li>
                            </ul>

                        </div>

                        <div class="col-md-12 text-center pt-3 mb-4" style="border:1px dashed #888888">
                            <h2>TƯ VẤN THIẾT KẾ WEBSITE</h2>
                            <span class="text-secondary">Hotline:
                                <span class="text-danger" style="font-size: 28px">[028] 7300.4488</span>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        div#chitiet_content_bot h2{
            font-size: 28px;
            font-family: 'Asap Condensed', sans-serif;
            color: #0a95d1;
        }
        div#chitiet_content_bot p{
            font-size: 18px;
            font-family: 'Asap Condensed', sans-serif;
            color: #797979;
        }

        div#chitiet_content_bot button.btn-search{
            background-color: transparent;
            border-radius: 0px 3px 3px 0px;
            border: 1px solid #cdc7c7;
            font-size: 16px;
            padding: 13px;
        }

        ul.service-overlay{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        ul.service-overlay li{
            list-style-type: none;

        }
        a:hover{
            text-decoration: none;

        }

        ul.service-overlay li{
            font-size: 18px;
            color: white;
            margin-bottom: 10px;
        }

        .service-img{
            overflow: hidden;
        }

        .s3ervice_border a:hover{
            color: red;
        }



        div#sers_img_overlay{
            padding: 20px;
            position: absolute;
            top:100%;
            width: 100%;
            height: 100%;
            background-color:rgba(00,00,00,0.8);
            transition: .3s;
        }

        .s3ervice_border:hover  div#sers_img_overlay{
            top:0;
        }

        .s3ervice_border:hover{
            box-shadow:0 3px 6px 0 rgba(200, 200, 200, 0.7) ;
            -moz-box-shadow:0 3px 6px 0 rgba(200, 200, 200, 0.7) ;
            -webkit-box-shadow:0 3px 6px 0 rgba(200, 200, 200, 0.7) ;
            -khtml-box-shadow:0 3px 6px 0 rgba(200, 200, 200, 0.7) ;
        }

        .service-img img{
        transition: .5s;

        }

        .s3ervice_border:hover .service-img img{
            transform: scale(1.2);

        }

        .s3ervice_border:hover img.none{
            display: block;

        }

        img.none{
            display: none;
        }
    </style>
    <div class="container-fluid" id="chitiet_content_bot">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-5">
                    <div class="pb-3 mb-3" style="border-bottom: 1px dashed #797979;">
                    <h2>MÔ TẢ WEBSITE</h2>

                    <p>Giao diện được thiết kế hiện đại, bắt mắt và không quên cung cấp đầy đủ những
                        thông tin về dịch vụ sản phẩm và các sản phẩm nổi bật cho khách hàng. Đây có
                        thể được xem là lựa chọn hoàn hảo cho các webstie. Banner khổ lớn ngay trang
                        chủ, với hình ảnh có thể thay đổi dễ dàng cùng với những thông tin nổi bật về
                        sản phẩm sẽ gây ấn tượng mạnh cho khách hàng ngay lần đầu tiên ghé thăm
                        website. Với một website, việc cung cấp những thông tin đầy đủ, chính xác
                        sẽ giúp bạn tạo được niềm tin với khách hàng và họ sẽ quay trở lại website
                        ở những lần tiếp theo. Bên cạnh đó, website với giao diện có thể hiển thị
                        tốt trên mọi thiết bị đi động cũng sẽ mang đến cho khách hàng sự tiện lợi
                        và trải nghiệm tuyệt vời khi sử dụng website.</p>
                    </div>

                    <h2 class="mb-3">XEM NHANH GIAO DIỆN TRÊN CÁC THIẾT BỊ</h2>

                    <div style="width: 90%;margin: auto">
                    <img src="{{URL::asset('images/Banner/Macbook-PNG-Picture.png')}}" alt="" style="width: 100%;height: auto;margin: auto">

                        <br>
                        <img src="{{URL::asset('images/Banner/iPad-PNG-Transparent-Image.png')}}" alt="" style="width: 80%;height: auto;margin:2% 10%">

                        <br>
                        <img src="{{URL::asset('images/Banner/iphone_6_png_by_selenapurpleewdirect-d8bogti.png')}}" alt="" style="width: 100%;height: auto;">
                    </div>
                </div>

                <div class="col-md-5 mb-5">
                    <h2>MẪU WEBSITE LIÊN QUAN</h2>

                    <select name="collection_id" id="collection_id" class="form-control select mb-3">
                        <option value="" selected="selected">Tất cả ngành nghề</option>
                        <option value="23">Bất Động Sản</option>
                        <option value="20">Công Nghệ &amp; Kỹ Thuật Số</option>
                        <option value="22">Doanh Nghiệp &amp; Dịch Vụ</option>
                        <option value="25">Gia dụng - Vật Liệu</option>
                        <option value="11">Hoa &amp; Quà Tặng</option>
                        <option value="24">Khách Sạn &amp; Nhà Hàng &amp; Du Lịch</option>
                        <option value="26">Landing Page Bất Động Sản</option>
                        <option value="17">Mẹ &amp; Bé</option>
                        <option value="15">Mỹ phẩm &amp; Làm đẹp</option>
                        <option value="19">Nội Thất &amp; Xây Dựng</option>
                        <option value="13">Ôtô &amp; Xe Máy</option>
                        <option value="12">Sách &amp; Giáo Dục</option>
                        <option value="21">Thời Trang và Trang Sức</option>
                        <option value="14">Thực Phẩm &amp; Ăn Uống</option>
                    </select>

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <div class="mt-4 s3ervice_border mb-4 border border-light" style="width: 68%;margin: auto">
                        <div class="">
                            <a href="" title="HẠT GIỐNG" >
                                <div class="service-img position-relative">
                                    <img alt="HAT-GIONG" title="HẠT GIỐNG" class="img-responsive" style="width: 100%;height: auto;" src="{{URL::asset('images/Banner/loud-business-html5.jpg')}}">
                                    <div id="sers_img_overlay" style="">

                                            <ul class="product service-overlay">
                                                <li><i class="fas fa-check"></i> Thiết kế sang trọng,&nbsp;hiện đại</li>
                                                <li><i class="fas fa-check"></i> Sản phẩm được trưng bày một cách khoa học</li>
                                                <li><i class="fas fa-check"></i> Menu đơn giản&nbsp;rất dễ sử dụng</li>
                                                <li><i class="fas fa-check"></i> Giao diện thân thiện - thích ứng đa thiết bị (PC, tablet, mobile)</li>
                                                <li><i class="fas fa-check"></i> Tốc độ load trang nhanh</li>
                                                <li class="final"><i class="fas fa-check"></i> Điểm pagespeed <span class="text-success">85/100</span></li>
                                            </ul>

                                    </div>
                                </div>
                            </a>
                            <div class="d-flex align-items-center justify-content-between p-2">
                            <p class="pt-2">
                                <a href="#" title="HẠT GIỐNG">WEB DOANH NGHIỆP</a>
                            </p>
                            <p class="anh_nho">
                                <a href="#" title="HẠT GIỐNG">
                                    <img class="none" alt="icon-detail" title="Detail" src="https://themes.webdoctor.vn/template/frontend/images/detail_product.png" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                            </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 s3ervice_border mb-4 border border-light" style="width: 68%;margin: auto">
                        <div class="">
                            <a href="" title="HẠT GIỐNG" >
                                <div class="service-img position-relative">
                                    <img alt="HAT-GIONG" title="HẠT GIỐNG" class="img-responsive" style="width: 100%;height: auto;" src="{{URL::asset('images/Banner/webmau-so1.jpg')}}">
                                    <div id="sers_img_overlay" style="">

                                        <ul class="product service-overlay">
                                            <li><i class="fas fa-check"></i> Thiết kế sang trọng,&nbsp;hiện đại</li>
                                            <li><i class="fas fa-check"></i> Sản phẩm được trưng bày một cách khoa học</li>
                                            <li><i class="fas fa-check"></i> Menu đơn giản&nbsp;rất dễ sử dụng</li>
                                            <li><i class="fas fa-check"></i> Giao diện thân thiện - thích ứng đa thiết bị (PC, tablet, mobile)</li>
                                            <li><i class="fas fa-check"></i> Tốc độ load trang nhanh</li>
                                            <li class="final"><i class="fas fa-check"></i> Điểm pagespeed <span class="text-success">85/100</span></li>
                                        </ul>

                                    </div>
                                </div>
                            </a>
                            <div class="d-flex align-items-center justify-content-between p-2">
                                <p class="pt-2">
                                    <a href="#" title="HẠT GIỐNG">TƯ VẤN ĐỊNH CƯ NƯỚC NGOÀI</a>
                                </p>
                                <p class="anh_nho">
                                    <a href="#" title="HẠT GIỐNG">
                                        <img class="none" alt="icon-detail" title="Detail" src="https://themes.webdoctor.vn/template/frontend/images/detail_product.png" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 s3ervice_border mb-4 border border-light" style="width: 68%;margin: auto">
                        <div class="">
                            <a href="" title="HẠT GIỐNG" >
                                <div class="service-img position-relative">
                                    <img alt="HAT-GIONG" title="HẠT GIỐNG" class="img-responsive" style="width: 100%;height: auto;" src="{{URL::asset('images/Banner/webmau-so2.jpg')}}">
                                    <div id="sers_img_overlay" style="">

                                        <ul class="product service-overlay">
                                            <li><i class="fas fa-check"></i> Thiết kế sang trọng,&nbsp;hiện đại</li>
                                            <li><i class="fas fa-check"></i> Sản phẩm được trưng bày một cách khoa học</li>
                                            <li><i class="fas fa-check"></i> Menu đơn giản&nbsp;rất dễ sử dụng</li>
                                            <li><i class="fas fa-check"></i> Giao diện thân thiện - thích ứng đa thiết bị (PC, tablet, mobile)</li>
                                            <li><i class="fas fa-check"></i> Tốc độ load trang nhanh</li>
                                            <li class="final"><i class="fas fa-check"></i> Điểm pagespeed <span class="text-success">85/100</span></li>
                                        </ul>

                                    </div>
                                </div>
                            </a>
                            <div class="d-flex align-items-center justify-content-between p-2">
                                <p class="pt-2">
                                    <a href="#" title="HẠT GIỐNG">DỊCH VỤ SỬA CHỮA</a>
                                </p>
                                <p class="anh_nho">
                                    <a href="#" title="HẠT GIỐNG">
                                        <img class="none" alt="icon-detail" title="Detail" src="https://themes.webdoctor.vn/template/frontend/images/detail_product.png" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('Frontsend.Details.quick_contact')
@endsection