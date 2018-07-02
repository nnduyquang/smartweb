<style>
    div#webmau_banner {
        background-image: url('images/Banner/Support-BG-with-Logo.png');
        background-attachment: fixed;
        background-position: center top;
        -webkit-background-size: cover;
        background-size: cover;
        color: white;
    }

    div#webmau_banner h3 {
        position: relative;
        font-size: 30px;
        margin-bottom: 20px;
    }

    div#webmau_banner h2 {
        font-size: 26px;
        color: white;
        font-weight: normal;
    }

    div#webmau_banner p {
        font-size: 18px;
        margin-bottom: 30px;
        color: #e2e3e4;
    }

    div#webmau_banner h3:before {
        position: absolute;
        content: '';
        height: 3px;
        width: 68px;
        background-color: #87c931;
        left: 50%;
        transform: translate(-50%, 0%);
        bottom: -10px;
    }
</style>
<div class="container-fluid" id="webmau_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-5">
                <h3>HỖ TRỢ KHÁCH HÀNG</h3>
                <h2>Chúng tôi chính sách hỗ trợ khách hàng trên Hotline , Live chat ...!</h2>
                <p>Off the Shelf is designed to work with SiteOrigin Page Builder, one of the most popular page
                    builder plug-ins for the laravel platform</p>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{URL::asset('images/Banner/service-hotline.a10cb6a3.png')}}" alt=""
                    style="width: 38px;height: auto;">
                    <h2 class="pl-2"> Support 24/7 : 0909 123 123</h2>
                </div>
                <img src="{{URL::asset('images/Banner/maquette-billet.png')}}" alt=""
                     style="width: 60%;height: auto;margin-bottom: 20px">
            </div>
        </div>
    </div>
</div>