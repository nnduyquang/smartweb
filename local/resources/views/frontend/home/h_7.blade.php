<div id="h_7" class="pb-5" style="background-image: url({{URL::asset('images/bg/testimonial.jpg')}});">
    <div class="container">
        <div class="row">
            <div id="owl-3" class="col-md-12 owl-carousel owl-theme">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-12 text-center">
                        <h5>CTY QUỐC TẾ TOPTEN</h5>
                        <img src="{{URL::asset('images/khachhang/27500270_10156713378129041_1853868422798601210_o.jpg')}}" alt=""
                             style="border-radius: 50%;border: 3px solid #bbbbbb;width: 86px;height: 86px;margin: auto">

                        <p class="pl-3"> Tôi rất ấn tượng và hài lòng về quy trình chăm sóc khách hàng
                            của họ. Tôi an tâm và không mất nhiều thời gian để quản lý website của mình.
                            Ngoài thiết kế website họ còn hỗ trợ tôi marketing online rất hiệu quả"
                        </p>

                        <h6>Brady Phạm</h6>
                        <span>CEO & Founder</span>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>