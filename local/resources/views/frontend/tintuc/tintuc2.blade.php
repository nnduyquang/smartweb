@extends('frontend.master')
@section('container')
    @include('frontend.common.title-bar')

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
                    <img class="border" src="https://www.jpwebseo.com/wp-content/uploads/2017/04/backlinks-seo.jpg" alt="">
                    <h5 class="pt-4 text-primary"><a href="{{URL::asset('tin-tuc/xay-dung-back-link.html')}}">
                            Xây dựng backlink khi Google Penguin là thuật toán gốc của Google
                        </a></h5>
                    <span>Ngày đăng 01/03/2018</span>

                    <p>Hơi chậm nhưng cũng có nguyên nhân của nó. Khi mà Google cập nhật thuật toán Penguin. Như chúng ta đã biết hiện này Google sử dụng hơn 200 tín hiệu để xếp hạng website (chia ra hơn 1000 tín hiệu nhỏ) nhằm giúp người dùng có những trải nghiệm tốt hơn, tìm kiếm thông tin dịch vụ sản phẩm một cách nhanh nhất và chính xác nhất. Vào ngày 23/09 vừa qua Gary Illyes đã đăng 1 bài viết trên Webmaster Central Blog có khẳng định: Thuật toán Google Penguine là thuật toán gốc cốt lõi của Google.</p>

                    <img src="https://ecom-ftu.net/wp-content/uploads/2017/03/backlinks2.jpg" alt="">
                    {{----}}

                    <br>

                    <p>Trước khi nói về nội dung chính của thuật toán Google Penguin update lần này xin nhắc lại với các bạn công cụ tìm kiếm Google ra đời và làm việc hiệu quả dựa trên thuật toán Page Rank (Bởi Larry Page năm 1997). Thuật toán này sử dụng yếu tố chính là backlink. Vì thế không quá khó để hiểu vì sao thuật toán Penguin là thuật toán cốt lỗi của Google hôm nay.</p>

                    <p>Quay trở lại thuật toán Penguin update mấy nay mình cũng có khá nhiều bạn hỏi website bị tụt 1 loạt từ khóa, từ khóa dance để trả lời mình viết 1 bài hoàn chỉnh mọi người cùng tham khảo thắc mắc cứ comment phía dưới.</p>

                    <p class="text-primary">Hai sự thay đổi Google Penguin</p>

                    <p>Dưới đây là hai thay đổi và quan trọng và coi như mình cũng đã dự đoán đúng được 50% khi mà từ 2013 có trao đổi với anh em trong nhóm rằng có ngày thuật toán Google Penguin sẽ real-time và hết thời cách xây dựng backlink 1 cách spam vô tội vạ.</p>

                    <p>1. Google Penguin hiện nay luôn real-time thời gian thực: nghĩa là trước kia các bạn có spam vẫn lên top và chỉ bị phạt sau mỗi lần Google Penguin cập nhật. Ngày nay thì Google Penguin cập nhật liên tục dễ bị phạt và nhanh hơn.</p>

                    <p>2. Google Penguin không phạt toàn bộ website: Điều này có nghĩa là Google không phạt toàn bộ website của bạn cũng như trên cùng 1 landingpage không phải Google phạt tất cả nhóm từ khóa của landinpage mà dựa vào anchortext của backlink.</p>

                    <p class="text-danger">Cách xử lý vi phạm thuật toán Penguin</p>

                    <p>Landingpage bạn SEO dù bị phạt hay chưa bị phạt hoặc bị rớt bay khỏi top 100 thì bạn có thể tham khảo hướng giải quyết sau:</p>

                    <p>1. Sử dụng Google Search Console lọc backlink xấu trong phần Các liên kết tới trang web của bạn.
                        <br>
                        2. Chuyển sang nofollow hoặc xoá backlink xấu đó đi.
                        <br>
                        3. Trường hợp backlink quá nhiều và hoặc backlink đó không kiểm soát được như bị đối thủ spam chơi xấu… thì bạn sử dụng công cụ Disavow từ chối liên kết.
                        <br>
                        4. Trường hợp chưa bị thông báo tác vụ thủ công thì chúc mừng bạn. Còn trường hợp bị thông báo tác vụ thủ công trong Search Console thì bạn cũng đừng quá lo lắng. Sau khi đã làm 3 bước ở trên và bạn gửi lại yêu cầu xem xét. Thường quá trình này mất vài này có thể hơn 1 tuần tuỳ thuộc lượng backlink của bạn nhiều hay ít.</p>

                    <p class="text-primary">Cách xây dựng backlink hiệu quả khi mà Google Penguin cập nhật</p>

                    <p>Từ xưa tới nay luôn hướng các bạn học viên sử dụng backlink trích dẫn như dự đoán từ 2013. Sử dụng anchortext của internal link để định hình từ khóa cho landingpage. Sử dụng backlink trích dẫn để lấy page rank và bot Google.</p>

                    <p>Hay quên đi việc spam backlink diễn đàn bằng cách tạo chữ ký và 1 loạt bài viết spin content. Tập trung tới người dùng xây dựng nội dung chất lượng.</p>

                    <h6>Một cách để tạo backlink hiệu quả đó là sử dụng phương pháp guest post tuy có điều là khá tốn kém.</h6>

                    <p>Cảm ơn các bạn đã đọc bài viết trường hợp thắc mắc xin vui lòng comment phía dưới. Để đảm bảo nhận được những bản tin SEO mới nhất cũng như những phân tích về các công cụ tìm kiếm vui lòng đăng ký nhận bản tin phía dưới like fanpage.

                    <p class="float-right">Theo blog tranngocthuy.com</p>
                </div>


                @include('frontend.tintuc.tintuc-sukien')

            </div>
        </div>
    </div>

@endsection