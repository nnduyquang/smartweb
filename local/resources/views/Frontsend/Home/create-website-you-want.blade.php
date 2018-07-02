<style>

    div#create_website_you_want{

        background-image: url(images/bg/bg2.jpg);
        -webkit-background-size: 100% 100%;
        background-size: 100% 100%;

    }

    div#create_website_you_want h3{
        position: relative;
        font-size: 32px;
        font-weight: 600;
    }
    div#create_website_you_want p{
        position: relative;
        font-size: 22px;

    }
    div#create_website_you_want h3:before{
        position: absolute;
        content: '';
        height: 3px;
        width: 68px;
        background-color: #6ca81d;
        left: 50%;
        bottom: -20px;
        transform: translate(-50%,0%);
    }

    div#bg-desk{
        position: absolute;
        width: 100%;
        height: 12%;
        background-color: #fff;
        bottom: 0;
        z-index: 1;
    }
</style>

<div class="container-fluid p-0 pt-5 pb-5 position-relative" id="create_website_you_want">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>CÙNG BẠN TẠO NÊN THƯƠNG HIỆU</h3>
            </div>
            <div class="col-md-12 pt-5 pb-5 text-center">
                <p>Unique features give you a head-start over your competitors: countless customization options,
                    a flexible banner system and more than 30 widgets to use on your pages.</p>
            </div>
            <div class="col-md-12" style="z-index: 22">
                <img  src="{{ URL::asset('images/banner/desk_features_new.png') }}" alt="" style="width: 100%;height: auto;z-index: 12">
            </div>
        </div>
    </div>

    <div class="p-0 m-0" id="bg-desk"></div>
</div>
