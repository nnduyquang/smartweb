<style>
    div#easy_interaction h3{
        position: relative;
        font-size: 28px;
        font-weight: 600;
    }

    /*div#easy_interaction h5{*/
        /*height: 39px;*/
    /*}*/


    div#easy_interaction p{
        position: relative;
        font-size: 22px;

    }
    div#easy_interaction h3:before{
        position: absolute;
        content: '';
        height: 3px;
        width: 68px;
        background-color: #87eb04;
        left: 50%;
        bottom: -20px;
        transform: translate(-50%,0%);
    }

    div#easy_interaction p{
        font-size: 16px;
    }

    span.easy_interaction-p{
        font-size: 16px;
        font-family: 'Encode Sans Condensed', sans-serif;
    }

</style>
<div class="container pt-2 pb-5" id="easy_interaction">
    <div class="row justify-content-center">
        <div class="col-md-12 pb-5 text-center">
            <h3 class="mb-4">QUY TRÌNH TRIỂN KHAI</h3>
            <span class="easy_interaction-p">Website theo mẫu triển khai nhanh trong 7 ngày làm việc.</span>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow fadeInDown" src="{{ URL::asset('images/icon/icon_setup.png') }}" alt="">
            <div class="wow zoomIn">
            <h5 class="mt-4">THU NHẬP <br> THÔNG TIN VÀ TƯ VẤN</h5>
            <p>Chúng tôi lấy ý kiến khách hàng và tư vấn website tính năng phù hợp với doanh nghiệp.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow fadeInDown" src="{{ URL::asset('images/icon/icon_visualedit.png') }}" alt="">
            <div class="wow zoomIn">
            <h5 class="mt-4">LỰA CHỌN <br> MẪU GIAO DIỆN</h5>
            <p>Lựa chọn giao diện tùy biến màu sắc theo đặc tính sản phẩm hoặc theo yêu cầu khách hàng. </p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow fadeInDown" src="{{ URL::asset('images/icon/icon_customize.png') }}" alt="">
            <div class="wow zoomIn">
            <h5 class="mt-4">XÂY DỰNG WEBSITE <br> THEO YÊU CẦU ĐÃ THỐNG NHẤT</h5>
            <p>Bàn giao bộ phận kỹ thuật triển khai website dựa trên yêu cầu trao đổi với khách hàng.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow fadeInDown" src="{{ URL::asset('images/icon/checked.png') }}" alt="">
            <div class="wow zoomIn">
            <h5 class="mt-4">HOÀN TẤT KIỂM TRA ĐẠT CHUẨN GOOGLE</h5>
            <p>Đội ngũ tester kiểm tra chất lượng Website, xem xét thông tin cần sửa đổi cập nhật. </p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <img class="wow fadeInDown" src="{{ URL::asset('images/icon/icon.png') }}" alt="">
            <div class="wow zoomIn">
            <h5 class="mt-4">BÀN GIAO VÀ HƯỚNG DẪN <br> SỬ DỤNG</h5>
            <p>Bàn giao khách hàng và hướng dẫn sử dụng các tính năng website.</p>
            </div>
        </div>
    </div>
</div>