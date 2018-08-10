@extends('layouts.master')
@section('bodycontent')
    @include('Frontsend.common.title-bar')

    <style>


        #fe_tintuc_content h5 {
            margin: 0;
            padding: 0;
        }

        #fe_tintuc_content p {
            font-size: 16px;
        }

        #fe_tintuc_content img {
            margin-left: 10%;
            width: 80%;
        }

        #fe_tintuc_content h5 a:hover {
            text-decoration: none;
            color: #0d95e8;
        }

        #fe_tintuc_content span {
            font-size: 12px;
        }

        #fe_tt_lienQuan h4 {
            position: relative;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            font-weight: normal;
            font-size: 22px;
            border-bottom: 2px solid #5e5d5d;
            padding-bottom: 6px;
            margin-bottom: 16px;
        }

        #fe_tt_lienQuan h4:before {
            position: absolute;
            content: '';
            height: 3px;
            width: 86px;
            transform: skew(20deg);
            background-color: #0d95e8;
            left: 0;
            bottom: -3px;
        }

        #fe_tt_lienQuan h4 span {
            font-size: 22px;
            font-weight: 600;
            color: #0d95e8;
        }

        #fe_tintuc_content h6 {
            font-size: 18px;
        }



        #fe_dmtt_items img {
            width: 100%;
            height: auto;
            padding: 5px;
            background-color: #f2f0f0;
            transition: .3s;
        }

        #fe_dmtt_items img:hover {
            background-color: #e5e3e3;
        }

        #fe_dmtt_items h6 {
            font-size: 18px;
            padding-bottom: 0px;
        }

        #fe_dmtt_items a:hover {
            text-decoration: none;
            padding-bottom: 0px;
        }

        #fe_dmtt_items span {
            font-size: 12px;
            color: #0d95e8;
        }

        #fe_dmtt_items p {
            font-size: 16px;
        }

        #fe_tt_lienQuan img {
            margin-left: auto;
        }

        #fe_tt_lienQuan p {
            font-size: 14px;
            color: #5e5d5d;
        }

        #fe_tt_lienQuan a {
            font-size: 14px;
            color: #5e5d5d;
        }

        #fe_tt_lienQuan a:hover {
            text-decoration: none;
            color: #6c757d;
        }

        #fe_tt_lienQuan span {
            font-size: 12px;
            color: #6c757d;
        }

        #tags{
            padding:0px 10px;
            /*margin: auto;*/
        }

        #tags a {
            display: inline-block;
            height: 22px;
            margin: 0 6px 0 0;
            padding: 0 7px 0 14px;
            white-space: nowrap;
            position: relative;

            background: -moz-linear-gradient(top, #06b4d4 0%, #025379 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#06b4d4), color-stop(100%,#025379));
            background: -webkit-linear-gradient(top, #06b4d4 0%,#025379 100%);
            background: -o-linear-gradient(top, #06b4d4 0%,#025379 100%);
            background: linear-gradient(to bottom, #06b4d4 0%,#025379 100%);
            background-color: #06b4d4;

            color: #f0f0f0;
            font: bold 11px/21px Arial, Tahoma, sans-serif;
            text-decoration: none;
            text-shadow: 0 1px rgba(255,255,255,0.4);

            border-top: 1px solid #06b4d4;
            border-bottom: 1px solid #025379;
            border-right: 1px solid #025379;
            border-radius: 1px 3px 3px 1px;
            box-shadow: inset 0 1px #06b4d4, 0 1px 2px rgba(0,0,0,0.21);

        }

        #tags a:before {
            content: '';
            position: absolute;
            top: 5px;
            left: -6px;
            width: 10px;
            height: 10px;

            background: -moz-linear-gradient(45deg, #06b4d4 0%, #025379 100%);
            background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#06b4d4), color-stop(100%,#025379));
            background: -webkit-linear-gradient(-45deg, #06b4d4 0%,#025379 100%);
            background: -o-linear-gradient(45deg, #06b4d4 0%,#025379 100%);
            background: linear-gradient(135deg, #06b4d4 0%,#025379 100%);
            background-color: #06b4d4;

            border-left: 1px solid #06b4d4;
            border-bottom: 1px solid #025379;
            border-radius: 0 0 0 2px;
            box-shadow: inset 1px 0 #06b4d4, 0 2px 2px -2px rgba(0,0,0,0.33);

            -webkit-transform: scale(1, 1.5) rotate(45deg);
            -moz-transform: scale(1, 1.5) rotate(45deg);
            -ms-transform: scale(1, 1.5) rotate(45deg);
            transform: scale(1, 1.5) rotate(45deg);
        }

        #tags a:after {
            content: '';
            position: absolute;
            top: 7px;
            left: 1px;
            width: 5px;
            height: 5px;
            background: #FFF;
            border-radius: 4px;
            border: 1px solid #06b4d4;
            box-shadow: 0 1px 0 rgba(255,255,255,0.2), inset 0 1px 1px rgba(0,0,0,0.21);
        }

        #tags a:hover {
            color: #FFF;
            text-shadow: -1px -1px 0 rgba(153,102,51,0.3);
        }

    </style>

    <div class="container-fluid pt-5" id="fe_dmtt_content">
        <div class="container">
            <div class="row mb-5 pb-5 ">
                <div class="col-md-8" id="fe_dmtt_items">
                    @for ($i = 0; $i < 6; $i++)


                        <div class="row border-bottom pb-3 mb-3">
                            <div class="col-md-6 mt-3">
                                <a href="{{URL::asset('tin-tuc/tin-tuc.html')}}">
                                    <img class="shadow-sm"
                                         src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg"
                                         alt="">
                                </a>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <a class="" href="{{URL::asset('tin-tuc/tin-tuc.html')}}"><h6 class="pt-3 pb-2">5 xu hướng thiết kế website thương mại điện tử
                                        nổi bật năm 2018</h6></a>
                                <span style="margin-top: -10px">Posted : 30-04-2018</span>
                                <p class="pt-2">Bất kể bạn sử dụng cách nào để thiết kế website thương mại điện tử, bạn đều cần nắm
                                    rõ các xu hướng này
                                    nhằm tối ưu hóa...!</p>
                            </div>
                        </div>

                    @endfor
                </div>
                <div class="col-md-4" id="fe_tt_lienQuan">
                    <h4>TIN TỨC <span>SỰ KIỆN</span></h4>

                    <div class="d-flex align-items-center border mb-1">
                        <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg"
                             alt="" style="width: 80px;height: auto">
                        <p class="pt-2">
                            <a href="">
                                5 xu hướng thiết kế website thương mại điện tử nổi bật năm 2018
                            </a>
                            <br>
                            <span>Posted : 30-04-2018</span></p>
                    </div>

                    <div class="d-flex align-items-center border mb-1">
                        <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg"
                             alt="" style="width: 80px;height: auto">
                        <p class="pt-2">
                            <a href="">
                                5 xu hướng thiết kế website thương mại điện tử nổi bật năm 2018
                            </a>
                            <br>
                            <span>Posted : 30-04-2018</span></p>
                    </div>

                    <div class="d-flex align-items-center border mb-1">
                        <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg"
                             alt="" style="width: 80px;height: auto">
                        <p class="pt-2">
                            <a href="">
                                5 xu hướng thiết kế website thương mại điện tử nổi bật năm 2018
                            </a>
                            <br>
                            <span>Posted : 30-04-2018</span></p>
                    </div>


                    <h4 class="mt-3">TAGS <span>LIÊN QUAN</span></h4>

                    <div class="" id="tags">
                        <a href="#">laravel</a>
                        <a href="#">bootstrap 4.0</a>
                        <a href="#">jquery</a>
                        <a href="#">HTML5</a>
                        <a href="#">Smartwebvn.net</a>
                        <a href="#">CSS3</a>
                        <a href="#">Tin tức công nghệ</a>
                        <a href="#">Web chuẩn SEO</a>
                        <a href="#">Web chuẩn Google</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection