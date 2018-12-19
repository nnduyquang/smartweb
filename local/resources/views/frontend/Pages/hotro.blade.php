@extends('frontend.master')
@section('container')
    @include('frontend.Pages.banner')
    @include('frontend.Pages.easy-interaction')

    <style>
        div#fe_p_wecareourcustomer {
            background-image: url(images/bg/bg_envato_elite_white.jpg);
            /*background-attachment: fixed;*/
            -webkit-background-size: cover;
            background-size: cover;

        }

        div#fe_p_wecareourcustomer h5 {
            font-weight: normal;
            font-size: 22px;
            color: #1b1e21;
            padding-top: 20px;
            padding-bottom: 10px;
            font-family: 'Yanone Kaffeesatz', sans-serif;

        }

        div#fe_p_wecareourcustomer p {
            font-family: 'Yanone Kaffeesatz', sans-serif;
            font-size: 18px;
            color: #7a7c7d;

        }

        div#fe_p_wecareourcustomer span {
            font-family: 'Yanone Kaffeesatz', sans-serif;
            font-size: 18px;
            color: #7a7c7d;

        }

        div#fe_p_wecareourcustomer img {
            margin-right: 20px;
            width: 86px;
            height: 86px;
            border-radius: 50%;
        }
    </style>
    <div class="container-fluid" id="fe_p_wecareourcustomer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-5 mb-5 text-left">
                    <h3>Chúng tôi luôn lắng nghe khách hàng.</h3>
                    <h5>Với hơn 5 năm kinh nghiệm trong việc thiết kế website,
                        chúng tôi tự tin sẽ mang đến cho doanh nghiệp của bạn một website chuyên nghiệp và hiệu quả.
                        Chúng tôi luôn làm việc với sự sáng tạo và sự tập trung cao nhất cho mỗi dự án,
                        mỗi dự án đối với chúng tôi là một tác phẩm.</h5>
                    <p class="pt-3 pb-3">Smartlinks là kết quả của nhiều năm kinh nghiệm làm marketing online
                        và là nhà phát triển web chuyên nghiệp. Chúng tôi đã may mắn làm việc trên một loạt các dự án lớn:
                        từ các doanh nghiệp địa phương cần thu hút nhiều khách hàng hơn đến các chiến dịch PPC quy mô lớn
                        với hàng nghìn lượt khách mỗi ngày."</p>
                    <div class="d-flex">
                        <img src="{{URL::asset('images/icon/Untitled-1.png')}}" alt="">
                        <div>
                            <p style="font-size: 21px">"Bạn muốn có một website chuyên nghiệp phục vụ cho công việc kinh doanh, phù hợp thị hiếu và xu hướng mới hiện nay, tương thích với mọi thiết bị cũng như trải nghiệm người dùng, 100%. Hãy liên hệ ngay với Smartlinks"</p>
                            <span>
                                <p class="font-weight-boldl p-0 m-0">Quang Nguyễn. <br>
                                Chuyên Gia Tư Vấn Và Thiết Kế, Smartlinks.
                                </p>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.Pages.linebreak')
@endsection