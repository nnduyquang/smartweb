<style>
    div#slogan2{
        /*height: 186px;*/
        background-image: url(images/Banner/background_play_button.jpg);
        background-repeat: no-repeat;
        background-size: 100% auto;
        border-bottom: 1px solid #a2a3a2;
        border-top: 1px solid #a2a3a2;
        background-position: center top;
        background-attachment: fixed;
    }



    div#slogan2 p{
        color: #616160;
        /*height: 186px;*/
        font-size: 16px;
    }

    div#slogan2 p span{
        font-weight: 600;
        font-size: 16px;
    }

    div#slogan2 img.btn-play
    {
        cursor: pointer;
        transition: .2s;
    }

    div#slogan2 img.btn-play:hover
    {
        opacity: 0.8;
    }

</style>

<div class="container-fluid" id="slogan2">
    <div class="container">
        <div class="row pt-5 pb-5 d-flex align-items-center">
            <div class="col-md-5 text-right">
                <p>
                    <span>How to set up Off the Shelf </span><br>
                    Take a look on how easy it is to get results
                </p>
            </div>
            <div class="col-md-2 text-center">
                <img class="btn-play" src="{{ URL::asset('images/icon/button_play_green.png') }}" alt="" style="width: 58px;height: 58px;">
            </div>
            <div class="col-md-5">
                <p>
                    We have taken the demo import feature one step further. Install any demo you like
                    within seconds and you can install other demos later if you like, one by one, just as easily!
                </p>
            </div>
        </div>
    </div>
</div>