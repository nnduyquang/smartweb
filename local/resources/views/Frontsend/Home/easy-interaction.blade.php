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
<div class="container pt-2 pb-5" id="easy_interaction">
    <div class="row">
        <div class="col-md-12 pb-5 text-center">
            <h3>GIAO DIỆN TƯƠNG TÁC NGƯỜI DÙNG</h3>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ URL::asset('images/icon/icon_setup.png') }}" alt="">
            <h5 class="mt-4">GIAO DIỆN THÂN THIỆN</h5>
            <p>Whether you are an expert or just a beginner - creating your next website and achieving results with Off the Shelf is easy!</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ URL::asset('images/icon/icon_visualedit.png') }}" alt="">
            <h5 class="mt-4">TƯƠNG TÁC DỄ DÀNG</h5>
            <p>Whether you are an expert or just a beginner - creating your next website and achieving results with Off the Shelf is easy!</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ URL::asset('images/icon/icon_customize.png') }}" alt="">
            <h5 class="mt-4">KẾT NỐI MẠNG XÃ HỘI</h5>
            <p>Whether you are an expert or just a beginner - creating your next website and achieving results with Off the Shelf is easy!</p>
        </div>
    </div>
</div>