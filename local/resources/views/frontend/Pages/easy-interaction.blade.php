<style>
    div#easy_interaction h3{
        position: relative;
        font-size: 28px;
        font-weight: 600;
    }

    div#easy_interaction p{
        position: relative;
        font-size: 22px;

    }
    div#easy_interaction h3:before{
        position: absolute;
        content: '';
        height: 3px;
        width: 68px;
        background-color: #6ca81d;
        left: 50%;
        bottom: -20px;
        transform: translate(-50%,0%);
    }

    div#easy_interaction p{
        font-size: 16px;
    }


</style>
<div class="container mt-5 pt-2 pb-5" id="easy_interaction">
    <div class="row">
        {{--<div class="col-md-12 pb-5 text-center">--}}
            {{--<h3>GIAO DIỆN TƯƠNG TÁC NGƯỜI DÙNG</h3>--}}
        {{--</div>--}}
        <div class="col-md-4 text-center">
            <img class="wow bounce" src="{{ URL::asset('images/icon/icon_phone.png') }}" alt="">
            <h5 class="mt-4">Phone Support 24/7</h5>
            <p>Chúng tôi hỗ trợ khách hàng thông qua Hotline điện thoại, nhầm đáp ứng tối đa các nhu cầu cấp thiết từ khách hàng. </p>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow bounce" src="{{ URL::asset('images/icon/icon_chat.png') }}" alt="">
            <h5 class="mt-4">Live Chat</h5>
            <p>Đội ngũ nhân viên sẽ hỗ trợ bạn thông qua live chat, team viewer, để hướng dẫn gỡ rối những vấn đề của khách hàng gặp phải.</p>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow bounce" src="{{ URL::asset('images/icon/icon_customize.png') }}" alt="">
            <h5 class="mt-4">Kết Nối Mạng Xã Hội</h5>
            <p>Kết nối với khách hàng thông qua mạng xã hội, để xây dựng một môi trường cùng phát triển bền vững.</p>
        </div>
    </div>
</div>