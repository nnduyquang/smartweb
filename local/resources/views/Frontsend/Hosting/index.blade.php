@extends('layouts.master')
@section('bodycontent')
    @include('Frontsend.Hosting.banner')
    <style>

        div#banggia_hosting_slogan {
            background-color: #e7e7e7;
        }

        div#banggia_hosting_slogan h4 {
            font-size: 22px;
            padding: 0;
            margin: 0;
        }

        div#banggia_hosting_slogan p {
            font-size: 16px;
            padding: 0;
            margin: 0;
        }

        .glyph-icon {
            padding: 10px;
            display: block;
            font-family: "Flaticon";
            font-size: 64px;
            line-height: 1;
        }

        .glyph-icon:before {
            font-size: 64px;
            color: #222;
            margin-left: 0;
        }

        div#banggia_hosting h3, div.bangia-hosting-hot h3 {
            position: relative;
            font-size: 30px;
        }

        div#banggia_hosting h3:before, div.bangia-hosting-hot h3:before {
            content: '';
            position: absolute;
            height: 3px;
            width: 68px;
            background-color: #00a6da;
            bottom: -10px;
            left: 50%;
            transform: translate(-50%, 0%);
        }

        div.bangia-hosting, div.bangia-hosting-hot {
            border: 1px solid #d7d7d7;
            width: 98%;
            border-radius: 3px;
            margin: auto;
            box-sizing: border-box;
            transition: .3s;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        div.bangia-hosting {
            margin-top: 8%;
            margin-bottom: 30px;
        }

        div.bangia-hosting button, div.bangia-hosting-hot button {
            cursor: pointer;
            padding: 4px 20px 1px 20px;
            font-size: 22px;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            background-color: #00a6da;
            border-radius: 3px;
            color: white;
            border: none;
            transition: .3s;
        }

        div.bangia-hosting-hot button {

            background-color: red;

        }

        div.bangia-hosting-hot button:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        div.bangia-hosting button:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #035b77;

        }

        div.bangia-hosting ul, div.bangia-hosting-hot ul {
            list-style-type: none;
            margin-top: 20px;
            padding-bottom: 38px;
        }

        div.bangia-hosting ul li, div.bangia-hosting-hot ul li {
            text-align: left;
            font-size: 18px;
            list-style-type: none;
        }

        div.bangia-hosting p.bgh-slogan, div.bangia-hosting-hot p.bgh-slogan {
            font-size: 17px;
            padding: 10px;
        }

        div.bangia-hosting span.old-price, div.bangia-hosting-hot span.old-price {
            text-decoration: line-through;
            color: #bbbbbb;
            font-size: 22px;
        }

        div.bangia-hosting span.sale, div.bangia-hosting-hot span.sale {
            position: relative;
            background-color: red;
            border-radius: 3px;
            color: white;
            font-size: 22px;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            padding: 10px 20px 8px 20px;
        }

        div.bangia-hosting span.sale::after, div.bangia-hosting-hot span.sale::after {
            content: '';
            position: absolute;
            bottom: -10px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 10px solid red;
            left: 50%;
            transform: translate(-50%, 0%);
        }

        div.bangia-hosting h4, div.bangia-hosting-hot h4 {
            padding-top: 18px;
            font-family: 'Yanone Kaffeesatz', sans-serif;
        }

        div.bangia-hosting p span.sale-month, div.bangia-hosting-hot p span.sale-month {
            font-size: 18px;
            font-family: 'Yanone Kaffeesatz', sans-serif;
        }

        div.bangia-hosting p.new-price, div.bangia-hosting-hot p.new-price {
            border-bottom: 2px dotted #a9abac;
            width: 80%;
            margin: auto;
        }

        div.bangia-hosting-hot {
            border: 2px solid red;
            text-align: center;
            position: relative;
            height: 100%;
            margin-top: -5px;

        }

        div.bangia-hosting-hot h4 {
            position: absolute;
            top: -3px;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            color: white;
            background-color: red;
            width: fit-content;
            padding: 10px 20px 8px 20px;
            margin: auto;
            border-radius: 0px 0px 3px 3px;
            left: 50%;
            transform: translate(-50%, 0%);
        }

        div.bangia-hosting-hot:hover {
            box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.19);

        }

        div.bangia-hosting:hover {

            box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.4), 0 12px 26px 0 rgba(0, 0, 0, 0.3);

        }

    </style>



    <div class="container-fluid" id="banggia_hosting_slogan">
        <div class="container">
            <div class="row pt-3 pb-4">

                <div class="wow fadeIn col-md-4 text-center hosting-partner align-items-center" data-wow-duration="2s">
                    <div class="glyph-icon flaticon-cloud"></div>

                    <H4>HOSTING LÀ GÌ?</H4>
                    <p>Không có dịch vụ lưu trữ,
                        không ai có thể nhìn thấy website của bạn.
                        Hosting dùng là nơi lưu trữ website của bạn. </p>

                </div>

                <div class="wow fadeIn col-md-4 text-center hosting-partner align-items-center" data-wow-duration="2s">
                    <div class="glyph-icon flaticon-group"></div>

                    <H4>QUẢN LÝ TỐT</H4>
                    <p>Đội ngũ hỗ trợ 24/7 của chúng tôi sẽ giúp bạn từng bước kỹ càng,
                        để quản lý các trang lưu trữ trực tuyến cho bạn. </p>

                </div>

                <div class="wow fadeIn col-md-4 text-center hosting-partner align-items-center" data-wow-duration="2s">
                    <div class="glyph-icon flaticon-touch-of-one-finger-of-solid-black-hand-symbol"></div>

                    <H4>DỄ MỞ RỘNG VÀ TƯƠNG TÁC</H4>
                    <p>Với Host Thương Mại, bạn có thể dùng gói cước nhỏ ban đầu nhưng vẫn để ngỏ khả năng mở rộng lớn.
                        với khả năng tương tác tốt. </p>

                </div>

            </div>
        </div>
    </div>



    <div class="container mb-5" id="banggia_hosting">
        <div class="row mb-5">
            <div class="col-md-12 text-center mt-5 mb-4">
                <h3> BẢNG GIÁ DỊCH VỤ LƯU TRỮ </h3>
                <p style="font-size: 18px" class="pt-3 pb-3">Thông tin bảng giá dịch vụ lưu trữ website...!</p>
            </div>

            <div class="col-md-4 p-0">
                <div class="bangia-hosting text-center wow zoomIn">
                    <h4>CƠ BẢN</h4>

                    {{--<span class="old-price">597.600 VNĐ </span><br>--}}
                    {{--<span class="sale">Giảm 53%</span><br>--}}
                    <p class="new-price"> 65.000 VNĐ <span class="sale-month">/tháng</span></p>
                    <span style="font-size: 15px;font-style: italic;color: gray">(Giá trên chưa bao gồm VAT)</span>
                    <p class="bgh-slogan">Cho các website đang phát triển tốt và cần nhiều khả năng mở rộng hơn nữa</p>

                    <button>ĐĂNG KÝ</button>
                    <ul>
                        <li>Dung lượng: 1,5 GB [SSD]</li>
                        <li>Băng thông: unlimited</li>
                        <li>Sub-domain: unlimited</li>
                        <li>Email: unlimited</li>
                        <li>FTP: unlimited</li>
                        <li>Database: 2</li>
                        <li>Addon domain: 0</li>
                        <li>Park domain: unlimited</li>
                    </ul>


                </div>
            </div>
            <div class="col-md-4 p-0 ">
                <div class="bangia-hosting-hot pt-5  wow zoomIn">
                    <h4>CHUYÊN NGHIỆP</h4>

                    {{--<span class="old-price">597.600 VNĐ </span><br>--}}
                    {{--<span class="sale">Giảm 53%</span><br>--}}
                    <p class="new-price"> 135.000 VNĐ <span class="sale-month">/tháng</span></p>
                    <span style="font-size: 15px;font-style: italic;color: gray">(Giá trên chưa bao gồm VAT)</span>
                    <p class="bgh-slogan">Cho các website đang phát triển tốt và cần nhiều khả năng mở rộng hơn nữa</p>

                    <button>ĐĂNG KÝ</button>
                    <ul>
                        <li>Dung lượng: 3 GB [SSD]</li>
                        <li>Băng thông: unlimited</li>
                        <li>Sub-domain: unlimited</li>
                        <li>Email: unlimited</li>
                        <li>FTP: unlimited</li>
                        <li>Database: 5</li>
                        <li>Addon domain: 2</li>
                        <li>Park domain: unlimited</li>
                    </ul>

                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="bangia-hosting text-center  wow zoomIn">
                    <h4>DOANH NGHIỆP</h4>

                    {{--<span class="old-price">2.597.600 VNĐ </span><br>--}}
                    {{--<span class="sale">Giảm 53%</span><br>--}}
                    <p class="new-price"> 270.000 VNĐ <span class="sale-month">/tháng</span></p>
                    <span style="font-size: 15px;font-style: italic;color: gray">(Giá trên chưa bao gồm VAT)</span>
                    <p class="bgh-slogan">Cho các website đang phát triển tốt và cần nhiều khả năng mở rộng hơn nữa</p>

                    <button>ĐĂNG KÝ</button>
                    <ul>
                        <li>Dung lượng: 7 GB [SSD]</li>
                        <li>Băng thông: unlimited</li>
                        <li>Sub-domain: unlimited</li>
                        <li>Email: unlimited</li>
                        <li>FTP: unlimited</li>
                        <li>Database: 10</li>
                        <li>Addon domain: 3</li>
                        <li>Park domain: unlimited</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>

@endsection