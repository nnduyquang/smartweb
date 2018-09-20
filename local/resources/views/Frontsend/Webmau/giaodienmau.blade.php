<style>
    div#fe_wm_giaodienmau h4{
        position: relative;
    }

    div#fe_wm_giaodienmau h4:before{
        position: absolute;
        content: '';
        width: 116px;
        height: 1px;
        background-color: #0a95d1;
        left: -10px;
        bottom: -9px;

    }
    div#fe_wm_giaodienmau p{
        font-size: 18px;
        font-family: 'Yanone Kaffeesatz', sans-serif;
        color: #868383;
    }
    div#fe_wm_giaodienmau p ul li{
       display: table-cell;
    }

    div#fe_wm_giaodienmau button.btn-xemdemo{
        font-size: 16px;
        border-radius: 3px;
        border:1px solid #1b1e21;
        background-color: transparent;
        font-family: 'Yanone Kaffeesatz', sans-serif;
        padding: 6px 15px 3px 15px;
        transition: .3s;
        cursor: pointer;
    }

    div#fe_wm_giaodienmau button.btn-xemdemo a:hover{
        color: white;
        text-decoration: none;
    }


    div#fe_wm_giaodienmau button.btn-xemdemo:hover{
        border:1px solid #0a95d1;
        background-color: #0a95d1;
        color: white;
    }

    div#fe_wm_giaodienmau button.btn-chongd{
        font-size: 16px;
        border-radius: 3px;
        border:none;
        padding: 6px 15px 3px 15px;
        font-family: 'Yanone Kaffeesatz', sans-serif;
        background-color: #87c931;
        color: white;
        transition: .3s;
        cursor: pointer;
        transition: .3s;
    }

    div#fe_wm_giaodienmau button.btn-chongd:hover{

        background-color: #0a95d1;
        color: white;
        transition: .3s;
    }


    div#fe_wm_giaodienmau h4 > span {
        color:#0a95d1;

    }
</style>

<div class="container-fluid mt-5 mb-5" id="fe_wm_giaodienmau">
    <div class="container">
        <div class="row">
            <div class="col-md-12 border-bottom border-light mb-4">
                <h4><span>WEBSITE</span> GIAO DIỆN MẪU</h4>
            </div>

            {{--carosel template theo ngành nghề--}}

            @include('Frontsend.Webmau.slider')

            {{--end carosel template theo ngành nghề--}}


            <div class="col-md-12 mt-3">
                <p>Chúng tôi tạo ra giao diện mới và tùy biến hình ảnh màu sắc theo ý kiến khách hàng.</p>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-hoclambanhngon-2018-07-21-10_48_03.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://hoclambanhngon.com">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-localhost-8080-smls-webnova.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="chi-tiet.html">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-ngangia-vn-2018-07-21-10_47_09.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://ngangia.com.vn/">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-tuvandinhcu-vn-2018-07-18-17_12_06.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://tuvandinhcu.com.vn">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-xedienhoangnhat-2018-07-18-17_19_02.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://xedienhoangnhat.com/">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-saigonreal365-2018-07-18-17_16_39.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://saigonreal365.com">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-saigonintelahcm-2018-07-21-10_46_50.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://saigonintelahcm.com/">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-diencoduyduong-2018-07-21-11_14_14.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://diencoduyduong.com/">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-vlxdtaysaigon-2018-07-21-10_48_53.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://vlxdtaysaigon.com">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/webmau1.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://tuyendungbatdongsan.com">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/webmau2.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="{{URL::asset('chi-tiet-web-online-shopping.html')}}">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/Banner/webmau-so3.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="http://thinhphatlighting.com/">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/tkweb/screencapture-localhost-8080-SMLOto.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo"><a href="{{URL::asset('/website-xe-hoi.html')}}">XEM DEMO</a></button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>