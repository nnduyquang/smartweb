<style>
    div#fe_h_CMWD h5 {
        font-size: 36px;
        position: relative;
        font-weight: 600;
        margin-bottom: 20px;
    }

    div#fe_h_CMWD h5:before {
        content: '';
        position: absolute;
        height: 2px;
        width: 68px;
        background-color: #0a95d1;
        bottom: -10px;
    }

    div#fe_h_CMWD h5 span {
        font-weight: normal;
        color: #0a95d1;
    }

    div#fe_h_CMWD p {
        font-size: 16px;
    }

    span.tit-span-tkw {
        font-size: 14px;
        color: #6c757d;
    }
</style>

<div class="container-fluid pb-5" id="fe_h_CMWD">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-2">
                <img src="{{URL::asset('images/Banner/blog-post-01.jpg')}}" alt="" style="width: 100%;height: auto;">
            </div>
            <div class="col-md-6">
                <h5 class="pb-2 mb-4">WELCOME TO<span> WEB DESIGN</span></h5>
                <p>Smartlinks sẽ mang đến cho khách hàng một website giao diện hiện đại,
                    thật chất lượng,chuẩn SEO, tối ưu quảng cáo đạt chuẩn Google.</p>


                <span class="tit-span-tkw">UI/UX</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        90%
                    </div>
                </div>

                <span class="tit-span-tkw">Bootstrap</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        80%
                    </div>
                </div>

                <span class="tit-span-tkw">Javascript</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        70%
                    </div>
                </div>

                <span class="tit-span-tkw">Laravel</span>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        90%
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
