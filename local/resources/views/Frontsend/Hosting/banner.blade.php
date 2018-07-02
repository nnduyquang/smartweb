<style>
    div#webmau_banner {
        background-image: url('images/Banner/serwery.jpg');
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
        background-color:rgba(00,00,00,0.5);
        padding: 20px;
    }

    div#webmau_banner h3:before {
        position: absolute;
        content: '';
        height: 3px;
        width: 68px;
        background-color: #87c931;
        right: 0%;
        bottom: -10px;
    }

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
        border: 2px solid white;
        box-sizing: border-box;
    }

    div#webmau_banner button.chk-tenmien:hover{
        border: 2px solid #87c931;
    }
    div#webmau_banner button.price-hosting{
        border: 2px solid white;
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
        <div class="row d-flex justify-content-end">
            <div class="col-md-5 mt-5 mb-5 text-right" id="hosting_content">
                <h3>DỊCH VỤ HOSTING</h3>
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet beatae culpa dolore.</h2>
                <p>Off the Shelf is designed to work with SiteOrigin Page Builder, one of the most popular page
                    builder plug-ins for the laravel platform</p>
                <img src="{{URL::asset('images/Banner/hosting.png')}}" alt=""
                     style="width: 50%;height: auto;">
                <br>
                <button class="price-hosting"><a href="#banggia_hosting">BẢNG GIÁ HOSTING</a></button>
                <button class="chk-tenmien">KIỂM TRA TÊN MIỀN</button>
            </div>
        </div>
    </div>
</div>