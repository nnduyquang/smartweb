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
                                    <a href="#fe_wm_giaodienmau">
                                    <img src="{{URL::asset('images/Banner/web1.jpg')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="#fe_wm_giaodienmau">
                                <h4 class="mt-3">WEB THỜI TRANG</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div style="">
                                    <a href="#fe_wm_giaodienmau">
                                    <img src="{{URL::asset('images/Banner/loud-business-html5.jpg')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="#fe_wm_giaodienmau">
                                <h4 class="mt-3">WEB BĐS</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div style="">
                                    <a href="#fe_wm_giaodienmau">
                                    <img src="{{URL::asset('images/Banner/images.jpg')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="#fe_wm_giaodienmau">
                                <h4 class="mt-3">WEB TMĐT</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div style="">
                                    <a href="#fe_wm_giaodienmau">
                                    <img src="{{URL::asset('images/Banner/images2.jpg')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="#fe_wm_giaodienmau">
                                <h4 class="mt-3">WEB NỘI THẤT</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </a>
                            </div>

                            <div class="owl-item text-center">
                                <div>
                                    <a href="#fe_wm_giaodienmau">
                                    <img src="{{URL::asset('images/Banner/responsive2.jpg')}}" alt=""
                                         style="width: 70%;height: auto;margin: auto"> <br>
                                    </a>
                                </div>
                                <a href="#fe_wm_giaodienmau">
                                <h4 class="mt-3">WEB DỊCH VỤ</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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