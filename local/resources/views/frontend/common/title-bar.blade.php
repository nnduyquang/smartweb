<style>
    div#webmau_banner {
        background-image: url({{URL::asset('images/bg/slider-bg12.jpg')}});
        background-attachment: fixed;
        background-position: center top;
        -webkit-background-size: cover;
        background-size: cover;
        color: white;
    }

    div#webmau_banner h3 {
        position: relative;
        font-size: 22px;
    }

    div#webmau_banner h3 a{
        color:white ;
    }
    div#webmau_banner h3 a:hover{
        text-decoration: none;
    }

    div#webmau_banner h2 {
        font-size: 24px;
        font-weight: normal;
        color: white;
        font-family: 'Yanone Kaffeesatz', sans-serif;
    }

    div#webmau_banner p {
        font-size: 17px;
        margin-bottom: 20px;
        color: #eeefef;
    }

    div#hosting_content{
        /*background-color:rgba(00,00,00,0.5);*/
        padding: 20px;
    }

    /*div#webmau_banner h3:after {*/
        /*position: absolute;*/
        /*content: '';*/
        /*height: 3px;*/
        /*width: 68px;*/
        /*background-color: #87c931;*/
        /*right: 0%;*/
        /*bottom: -10px;*/
    /*}*/

    div#webmau_banner button{
        cursor: pointer;
        font-family: 'Yanone Kaffeesatz', sans-serif;
        margin-top: 20px;
        font-size: 18px;
        border-radius: 3px;
        border: none;
        padding: 6px 10px 3px 10px;
        transition: .3s;
    }

    div#webmau_banner button.chk-tenmien{
        background-color: #87c931;
        color: white;
        border: 1px solid white;
        box-sizing: border-box;
    }

    div#webmau_banner button.chk-tenmien:hover{
        border: 1px solid #87c931;
    }
    div#webmau_banner button.price-hosting{
        border: 1px solid white;
        color: white;
        background: #00a6da;
    }

    div#webmau_banner button.price-hosting a{
        color: white;
        text-decoration: none;
    }
    div#webmau_banner button.price-hosting a:hover{
        color: #00a6da;
        text-decoration: none;
    }

    div#webmau_banner button.price-hosting:hover{
        background-color:white ;
        color: #00a6da;
    }
</style>
<div class="container-fluid" id="webmau_banner">
    <div class="container">
        <div class="row d-flex justify-content-start">
            <div class="col-md-5 mt-5 mb-5 text-left" id="hosting_content">
                <h3 class="wow zoomIn"><a href="">TIN TỨC / ĐIỂM TIN CÔNG NGHỆ </a></h3>
            </div>
        </div>
    </div>
</div>