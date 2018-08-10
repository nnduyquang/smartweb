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


                @include('Frontsend.tintuc.tintuc-sukien')

            </div>
        </div>
    </div>

@endsection