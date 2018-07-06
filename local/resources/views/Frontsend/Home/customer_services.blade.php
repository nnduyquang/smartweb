<style>
    div#customer_services h3{
        font-size: 32px;
        position: relative;
    }

    div#customer_services h3:before{
        position: absolute;
        content: '';
        width: 38px;
        height: 3px;
        background-color: #6ca81d;
        left: 50%;
        transform: translate(-50%,0%);
        bottom: -10px;
    }

    div#customer_services p{
        padding-top: 30px;
        font-size: 18px;
        font-family: 'Encode Sans Condensed', sans-serif;
    }

    .h-support-3man{
        width: 45%;
        height: auto;
    }
    @media only screen and (max-width: 770px) {
        .h-support-3man{
            width: 70%;
        }

    }

</style>
<div class="container-fluid pb-5" id="customer_services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <h3>CHÚNG TÔI LẮNG NGHE KHÁCH HÀNG</h3>
                <p>
                    Website là một sản phẩm tuyệt vời đi kèm với hỗ trợ khách hàng để phù hợp, cho dù bạn có một
                    câu hỏi, một mối quan tâm hoặc cần hỗ trợ, chúng tôi đối xử với bạn như một khách hàng có giá
                    trị và tôi tin sẽ giúp bạn hơn nữa trong ngành Digital Marketing.
                </p>
                <img class="wow bounceIn h-support-3man" src="{{URL::asset('images/Banner/maquette-billet.png')}}" alt="" style="">
            </div>
        </div>
    </div>
</div>