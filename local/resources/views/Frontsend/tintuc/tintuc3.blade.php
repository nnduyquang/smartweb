@extends('layouts.master')
@section('bodycontent')
    @include('Frontsend.common.title-bar')

    <style>



        #fe_tintuc_content h5{
            margin: 0;
            padding: 0;
        }

        #fe_tintuc_content p{
            font-size: 16px;
        }

        #fe_tintuc_content img{
            margin-left: 10%;
            width: 80%;
        }

        #fe_tintuc_content h5 a:hover{
            text-decoration: none;
            color: #0d95e8;
        }
        #fe_tintuc_content span{
            font-size: 12px;
        }

        #fe_tintuc_content h4{
            position: relative;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            font-weight: normal;
            font-size: 22px;
            border-bottom: 2px solid #5e5d5d;
            padding-bottom: 6px;
            margin-bottom: 16px;
        }

        #fe_tintuc_content h4:before{
            position: absolute;
            content: '';
            height: 3px;
            width: 86px;
            transform: skew(20deg);
            background-color: #0d95e8;
            left: 0;
            bottom: -3px;
        }

        #fe_tintuc_content h4 span{
            font-size: 22px;
            font-weight: 600;
        }

        #fe_tintuc_content h6{
            font-size: 18px;
        }

        #fe_tt_lienQuan img{
            margin-left: auto;
        }

        #fe_tt_lienQuan p{
            font-size: 14px;
            color: #5e5d5d;
        }

        #fe_tt_lienQuan a{
            font-size: 14px;
            color: #5e5d5d;
        }
        #fe_tt_lienQuan a:hover{
            text-decoration: none;
            color:#6c757d ;
        }

        #fe_tt_lienQuan span{
            font-size: 12px;
            color: #6c757d;
        }
    </style>

    <div class="container-fluid pt-5" id="fe_tintuc_content">
        <div class="container">
            <div class="row mb-5 pb-5 ">
                <div class="col-md-8 border-bottom mb-4">
                    <img class="border" src="https://siennawebdesigns.com/wp-content/uploads/2014/02/freestyle-friday-700x350-3.jpg" alt="">
                    <h5 class="pt-4 text-primary"><a href="{{URL::asset('tin-tuc/website-chuan-seo-google.html')}}">
                            TIÊU CHÍ THIẾT KẾ WEBSITE CHUẨN SEO NÂNG CAO
                        </a></h5>
                    <span>Ngày đăng 30/03/2018</span>

                    <h3>Thiết kế Website chuẩn SEO là gì?</h3>

                    <p>Các chuyên gia trong lĩnh vực SEO (Search Engine Optimization) thường có rất nhiều quan điểm và định nghĩa khác nhau về câu hỏi này. Tuy nhiên, mục đích cuối cùng của việc thiết kế web chuẩn SEO chính là giúp trang web đó thân thiện với các công cụ tìm kiếm, lên top nhanh chóng và bền vững hơn. Có rất nhiều kỹ thuật tối ưu Onpage, Offpage phục vụ cho mục đích này và chúng luôn thay đổi theo thời gian tùy thuộc vào thuật toán của bộ máy tìm kiếm (thường là Google). </p>

                    <img src="http://www.connectedwebsolutions.com/blog/wp-content/uploads/2009/01/web-standards.jpg" alt="">
                    <br>

                    <br>

                    <p>
                    1	Tối ưu chuẩn SEO hình ảnh <i class="fas fa-arrows-alt-h text-primary"></i>	Hình ảnh có đầy đủ thẻ Title, Alt, Caption.<br>
                    2	Tối ưu tôc độ tải trang bằng công nghệ cao	<i class="fas fa-arrows-alt-h text-primary"></i> Tải trang nhanh hơn.<br>
                    3	Google Analytics <i class="fas fa-arrows-alt-h text-primary"></i>	Theo dõi chính xác lưu lượng truy cập.<br>
                    4	Google Search Console <i class="fas fa-arrows-alt-h text-primary"></i>	Theo dõi SEO của Google.<br>
                    5	Submit Google <i class="fas fa-arrows-alt-h text-primary"></i>	Đưa website lên công cụ tìm kiếm.<br>
                    6	Google Map <i class="fas fa-arrows-alt-h text-primary"></i>	Đưa website và doanh nghiệp lên bản đồ Google Maps.<br>
                    7	Thẻ địa lý GEO <i class="fas fa-arrows-alt-h text-primary"></i>	Tối ưu hóa SEO địa lý.<br>
                    8	Tối ưu trang 404 <i class="fas fa-arrows-alt-h text-primary"></i>	Chỉnh sửa liên kết không tìm thấy.<br>
                    9	Tối ưu thẻ meta robots và sitemap.xml <i class="fas fa-arrows-alt-h text-primary"></i>	Khai báo, xác nhận và điều phối Google Bot.<br>
                    10	Đưa website lên các mạng xã hội phổ biến <i class="fas fa-arrows-alt-h text-primary"></i>	Facebook, Google+, Pinterest, Tumblr,....<br>
                    11	Tối ưu hóa HTML, CSS, Javascript <i class="fas fa-arrows-alt-h text-primary"></i>	Nén và phân phối code theo chuẩn Google, W3C.<br>
                    12	Tối ưu hóa chia sẻ mạng xã hội <i class="fas fa-arrows-alt-h text-primary"></i>	Tiện ích chia sẻ thông minh.<br>
                    13	Chỉ mục hướng dẫn (breadcumb) <i class="fas fa-arrows-alt-h text-primary"></i>	Điều hướng người dùng và bọ tìm kiếm.<br>
                    14	Tối ưu hiển thị trên thiết bị di động <i class="fas fa-arrows-alt-h text-primary"></i>	Công nghệ Responsive tương thích với mọi thiết bị.<br>
                    15	Tạo RSS feed cho nội dung website <i class="fas fa-arrows-alt-h text-primary"></i>	Theo dõi thông tin qua RSS.<br>
                    </p>
                </div>


                @include('Frontsend.tintuc.tintuc-sukien')

            </div>
        </div>
    </div>

@endsection