<style>

    div#master_banner_camera_top {
        background-image: url('images/bg/slider-2-1.jpg');
        background-size: cover;
        position: relative;
        background-attachment: fixed;
    }

    div#master_banner_camera_top p:first-child {
        font-size: 18px;
    }

    div#master_banner_camera_top p.mb-5 {
        font-size: 22px;
    }

    div#master_banner_camera_top p:first-child:after {
        content: '';
        border-bottom: 2px solid white;
        width: 30px;
        height: 3px;
    }

    div#master_banner_camera_top button.first {
        margin-top: 5px;
        font-family: 'Asap Condensed', sans-serif;
        cursor: pointer;
        border-radius: 30px;
        background-color: #7bb233;
        color: white;
        font-size: 16px;
        padding: 12px;
        font-weight: 500;
        transition: .3s;
        border: 0;
    }

    div#master_banner_camera_top button.first:hover {
        background-color: white;
        color: #066a94;

    }

    div#master_banner_camera_top button.last {
        margin-top: 5px;
        font-family: 'Asap Condensed', sans-serif;
        cursor: pointer;
        border-radius: 30px;
        background-color: #074b73;
        padding: 0px 16px;
        color: white;
        font-weight: 500;
        transition: .3s;
        border: 1px solid white;
    }

    div#master_banner_camera_top button.last:hover {

        background-color: white;
        color: black;
    }

    .computer-slider {
        z-index: 1;
    }



    button.first,button.last{
        opacity: 0;
        -webkit-animation: mymove 1s; /* Safari 4.0 - 8.0 */
        animation: mymove 1s;
        animation-delay: 3s;
        -webkit-animation-delay: 3s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

    }

    h2.h2-fadein{
        opacity: 0;
        animation: mymove2 1s;
        animation-delay: 1s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

    }

    p.p-fadein{
        opacity: 0;
        animation: mymove1 1s;
        animation-delay: 2s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        padding: 20px 0px 20px 0px;
    }

    @-webkit-keyframes mymove {
        from {
            right: -10%;
            opacity: 0.3;
        }
        to {
            right: 0%;
            opacity: 1;
        }
    }

    @keyframes mymove {
        from {
            right: -10%;
            opacity: 0.3;
        }
        to {
            right: 0%;
            opacity: 1;
        }
    }

    @-webkit-keyframes mymove1 {
        from {
            opacity: 0.1;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes mymove1 {
        from {
            opacity: 0.1;
        }
        to {
            opacity: 1;
        }
    }

    @-webkit-keyframes mymove2 {
        from {
            transform: scale(0.3);
            opacity: 0.1;
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes mymove2 {
        from {
            transform: scale(0.3);
            opacity: 0.1;
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

</style>

<div class="container-fluid p-0 mb-4" id="master_banner_camera_top">
    <div class="computer-slider position-relative" style="overflow: hidden;">
        <img src="images/bg/computer_2.png" alt=""
             style="z-index: 1;width: 60%;height: auto;float: right;position: absolute;-webkit-animation: mymove 1s; /* Safari 4.0 - 8.0 */
    animation: mymove 1s;right: 0;bottom: 0">
        <div class="container pt-5 pb-5">
            <div class="row pt-5 pb-5">
                <div class="col-md-5 pt-2 pb-2 text-light text-left" style="z-index: 13;top: 0;">
                    {{--<p>ONLINE BUSSINESS IDEA</p>--}}
                    <h2 class="h2-fadein">CÔNG TY THIẾT KẾ WEBSITE CHUYÊN NGHIỆP</h2>
                    <p class="mb-5 p-fadein" style="font-size: 18px">

                        - Chỉ
                        <span style="font-size: 36px;color: greenyellow">3.900.000</span>
                        sẽ mang đến cho khách hàng một trải nghiệm tuyệt vời. <br>
                        - Một Website giao diện hiện đại, thật chất lượng. <br>
                        - Website tối ưu quảng cáo đạt chuẩn Google. <br>
                        - Giúp tăng doanh số, phát triển thương hiệu. <br>

                    </p>

                    <div class="d-flex align-items-center">
                    <button class="first mr-2">XEM CHI TIẾT</button>
                    <button class="last" style="font-size: 30px">0914 348 131</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


