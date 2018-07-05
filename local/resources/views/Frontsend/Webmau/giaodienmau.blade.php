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
                    <img src="{{URL::asset('images/sources/2015-12-17-09-54-44-380x325.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo">XEM DEMO</button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/sources/demo2.wpdance.com-2016-01-14-11-09-45-380x427.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo">XEM DEMO</button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/sources/newsmartwave.net-2016-02-22-18-38-41-380x483.jpg')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo">XEM DEMO</button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/sources/screencapture-380x466.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo">XEM DEMO</button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/sources/screenshot-demo.vegatheme.com-2016-04-15-10-11-01-380x519.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo">XEM DEMO</button>
                    <button class="btn-chongd">CHỌN GIAO DIỆN</button>
                </div>
            </div>

            <div class="col-md-4 text-center mb-5">
                <div style="height: 338px;overflow: hidden">
                    <img src="{{URL::asset('images/sources/screenshot-mercor-new.premiumcoding.com-2015-12-16-17-10-51-380x421.png')}}"
                         alt="" style="width: 99%;margin: auto;height: auto">
                </div>
                <div style="width: 100%" class="d-flex justify-content-between mt-3">
                    <button class="btn-xemdemo">XEM DEMO</button>
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