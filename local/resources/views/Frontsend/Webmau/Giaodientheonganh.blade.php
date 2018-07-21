<style>
    div#slider_mautheonghanghnghe h3 {
        position: relative;
        font-size: 28px;
    }

    div#slider_mautheonghanghnghe p {
        padding-top: 20px;
        position: relative;
        font-size: 18px;
    }

    div#slider_mautheonghanghnghe h3:before {
        position: absolute;
        content: '';
        width: 68px;
        height: 3px;
        background-color: #87c931;
        left: 50%;
        transform: translate(-50%, 0%);
        bottom: -10px;
    }

    div#slider_mautheonghanghnghe h4 {
        margin: 0px;
        padding: 0px;
        font-size: 26px;
        font-weight: 500;
        font-family: 'Yanone Kaffeesatz', sans-serif;
    }

    .nav-button {
        width: 100%;
        position: absolute;
        top: 35%;
        left:0px;
        z-index: 12;

    }

    .nav-button .customNextBtn, .nav-button .customPrevBtn {
        padding: 10px 18px;
        cursor: pointer;
        border-radius: 50%;
        color: #87c931;
        font-size: 32px;

    }

    .owl-item > div{
        margin: auto;
        height: 168px;
        overflow: hidden;
    }

    .owl-item > a:hover{
       text-decoration: none;
    }

    .nav-button .customPrevBtn {
    }

    div#webmau_price_list a{
        font-size: 20px;
        background-color: #7bb233;
        color: white;
        padding: 14px 20px 12px 20px;
        border-radius: 3px;
        transition: .3s;
        font-family: 'Yanone Kaffeesatz', sans-serif;
    }

    div#webmau_price_list a:hover{
        text-decoration: none;
        background-color: #00a6da;
    }

</style>
<div class="container-fluid" id="slider_mautheonghanghnghe">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5">
                <h3>GIAO DIỆN THEO NGÀNH NGHỀ</h3>
                <p>Web giao diện theo ngành nghề</p>
            </div>

            <div class="col-md-12 ">
                <div class="owl-carousel owl-theme owl-loaded position-relative">
                    <div class="owl-stage-outer ">
                        <div class="owl-stage">

                            <div class="owl-item text-center">

                                <div style="">
                                    <a href="http://diencoduyduong.com">
                                    <img src="{{URL::asset('images/tkweb/screencapture-diencoduyduong-2018-07-21-11_14_14.png')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="http://diencoduyduong.com">
                                <h4 class="mt-3">DỊCH VỤ SỬA CHỮA</h4>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div style="">
                                    <a href="http://hoclambanhngon.com/">
                                    <img src="{{URL::asset('images/tkweb/screencapture-hoclambanhngon-2018-07-21-10_48_03.png')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="http://hoclambanhngon.com/">
                                <h4 class="mt-3">WEB DẠY HỌC</h4>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div style="">
                                    <a href="http://ngangia.com.vn/">
                                    <img src="{{URL::asset('images/tkweb/screencapture-ngangia-vn-2018-07-21-10_47_09.png')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="http://ngangia.com.vn/">
                                <h4 class="mt-3">CỬA HÀNG ONLINE</h4>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div style="">
                                    <a href="http://tuvandinhcu.com.vn/">
                                    <img src="{{URL::asset('images/tkweb/screencapture-tuvandinhcu-vn-2018-07-18-17_12_06.png')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="http://tuvandinhcu.com.vn/">
                                <h4 class="mt-3">DỊCH VỤ TƯ VẤN</h4>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div>
                                    <a href="http://saigonreal365.com/">
                                    <img src="{{URL::asset('images/tkweb/screencapture-saigonreal365-2018-07-18-17_16_39.png')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="http://saigonreal365.com/">
                                <h4 class="mt-3">BẤT ĐỘNG SẢN</h4>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="nav-button d-flex justify-content-between">
                    <i class="fas fa-angle-left customPrevBtn"></i>
                    <i class="fas fa-angle-right customNextBtn"></i>
                </div>


            </div>

            <div class="col-md-12 text-center mt-2 mb-2" id="webmau_price_list">
                <a href="{{URL::asset('bang-gia.html')}}">BẢNG GIÁ WEBSITE</a>
            </div>

        </div>
    </div>
</div>