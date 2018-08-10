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
                <div class="col-md-9 border-bottom mb-4">
                    <img class="border" src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg" alt="">
                    <h5 class="pt-4 text-primary"><a href="{{URL::asset('tin-tuc/tin-tuc.html')}}">5 Xu hướng thiết kế website thương mại điện tử nổi bật năm 2018</a></h5>
                    <span>Ngày đăng 29/03/2018</span>

                    <p>Bất kể bạn sử dụng cách nào để thiết kế website thương mại điện tử, bạn đều cần nắm rõ các xu hướng này nhằm tối ưu hóa hiệu quả cho website bán hàng của công ty trong năm 2018.</p>

                    <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/0website-thuong-mai-dien-tu-2018.jpg" alt="">

                    <br>

                    <p>Thương mại điện tử (TMĐT) đã bùng nổ trong vòng 5 năm qua với sự tham gia từ nhóm các doanh nghiệp vừa và nhỏ. Doanh số bán hàng TMĐT toàn cầu ước tính có thể đạt 4,5 triệu tỷ USD từ nay đến năm 2021, theo báo cáo từ Statista.</p>

                    <p>Để nổi bật trong thị trường ngày càng đông đúc này, điều đầu tiên chủ doanh nghiệp cần có chính là một sản phẩm, dịch vụ xuất sắc. Nếu khách hàng không cần đến sản phẩm hoặc dịch vụ của bạn, thì dù bạn thiết kế website của bạn đẹp và ấn tượng đến đâu cũng sẽ không mang đến hiệu quả.</p>

                    <p>Tiếp theo, bạn cần quan tâm đến cách giới thiệu sản phẩm với khách hàng. Các xu hướng thiết kế website thay đổi liên tục qua mỗi năm, và bạn sẽ cần đảm bảo rằng trang TMĐT của bạn có giao diện thân thiện và dễ sử dụng nhất với người truy cập.</p>

                    <p>Adrian Salamunovic - đồng sáng lập của CanvasPop cho biết, mục tiêu số 1 của mọi chủ doanh nghiệp TMĐT chính là thiết kế website bán hàng của công ty trở nên thân thiện với khách hàng nhất có thể. Điều này đòi hỏi bạn phải liên tục kiểm tra và giám sát trang TMĐT của mình, từ cách người truy cập tương tác với các mục khác nhau trên website, đến tỷ lệ chuyển đổi doanh số...</p>

                    <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/1website-thuong-mai-dien-tu-2018.jpg" alt="">
                    <br>
                    <p>"Khi cần thiết kế lại website, phần lớn các quyết định của chúng tôi phải dựa trên cơ sở dữ liệu khách hàng của mình. Chúng tôi luôn bắt đầu bằng việc phân tích những trải nghiệm tốt nhất mà khách hàng có được trên website của mình. Sau đó là cách các trải nghiệm này tác động đến quyết định mua hàng, thanh toán của người truy cập.</p>

                    <p>Điểm mấu chốt ở đây là tiên tục thử nghiệm các yếu tố trên website, quan sát dữ liệu thu được và điều chỉnh ngay các yếu tố không hiệu quả. Thử nghiệm cách mới và nhanh chóng học hỏi là lời khuyên của chúng tôi dành cho chủ doanh nghiệp TMĐT", Adrian Salamunovic chia sẻ.</p>

                    <p>Một phần quan trọng trong quá trình này chính là tư duy phản biện trong thiết kế. Hãy để khách hàng tương tác trực tiếp với sản phẩm của bạn. Và phân tích dự trên kết quả của các tương tác thực tế đó.</p>

                    <p>Jeremy Greenberg - nhà sáng lập, chuyên gia thiết kế chính của 97 Switch, nhận định rằng các trang TMĐT nên ưu tiên lựa chọn các yếu tố, tính năng thiết kế phục vụ cho từng mục đích nhất định. Kết quả cuối cùng cần đạt được là biến website TMĐT trở thành nhân viên bán hàng làm việc 24/7 cho công ty.</p>

                    <p>"Đôi khi, tôi thấy có một nhóm khách hàng mong muốn một vài tính năng ngẫu nhiên nhất định trên website, song các tính năng này không thực sự liên quan đến trải nghiệm người dùng. Mọi người nên hiểu rằng trải nghiệm trên một website TMĐT cần giống như trải nghiệm mua hàng tại cửa hàng thực tế, tư vấn trên website cần có cảm giác như trò chuyện trực tiếp với nhân viên của công ty. Vì vậy, những tính năng nào không tạo ra được trải nghiệm này thì doanh nghiệp nên loại bỏ đi", Jeremy Greenberg khuyên.</p>

                    <p>Hiện nay có hai cách để thiết lập nên một website TMĐT: thuê một nhân viên thiết kế web hoặc dùng dịch vụ tự thiết kế website trực tuyến của Shopify, Wix. Cả hai cách này đều có ưu và nhược điểm riêng. Sử dụng một nhân viên thiết kế riêng sẽ giúp bạn có thể chủ động nhiều hơn với website của mình, nhưng chi phí cao. Trong khi đó, sử dụng tính năng tự thiết kế website do một doanh nghiệp phần mềm cung cấp sẽ rẻ hơn nhưng lại ít sự chủ động trong thiết kế theo ý riêng của bạn.</p>

                    <p>Bất kể bạn sử dụng cách nào để thiết kế website, bạn nên nắm rõ các xu hướng thiết kế website TMĐT năm 2018 dưới đây nhằm tối ưu hóa hiệu quả cho trang TMĐT của mình.</p>

                    <h6>1. Kể chuyện đúng cách</h6>

                    <p>Bất cứ nhà thiết kế website hoặc marketer giỏi nào cũng sẽ nói cho bạn biết một trong những yếu tố chính của một website tốt chính là kể được câu chuyện thương hiệu của công ty. Các khách hàng muốn tương tác với một công ty khi họ có thể nhận diện được công ty đó giữa một "rừng" các công ty khác. Tuy nhiên, bạn cần phải biết cách kể chuyện hiệu quả.
                        <br>
                        <br>

                        Nhiều trang TMĐT cố gắng đặt câu chuyện về lịch sử phát triển thương hiệu ở những mục chính của website. Song, bạn cần nhớ rằng, chính sản phẩm/dịch vụ mới là lý do số 1 đưa khách hàng đến với trang TMĐT của bạn. Trên thực tế, khi kể câu chuyện thương hiệu, rất nhiều công ty lại bỏ quên sự hiện diện của sản phẩm, dịch vụ của chính mình. Và tính năng giúp khách hàng tương tác thuận tiện với sản phẩm, dịch vụ quan trọng hơn là giúp họ dễ dàng đọc được câu chuyện về nhà sáng lập hay lịch sử hình thành công ty.
                        <br>
                        <br>

                        Greenberg lưu ý rằng các nhà kinh doanh cần kể câu chuyện của công ty với một mục đích rõ ràng, với giao diện trình bày đơn giản và tin rằng các khách hàng thực sự quan tâm đến doanh nghiệp sẽ dành thời gian để đọc các thông tin này.
                        <br>
                        <br>

                        "Tôi nhận thấy những website xuất sắc thường thiết kế các trang chuyên mục chính theo hướng đơn giản và gọn gàng. Những khách hàng muốn đọc toàn bộ thông tin về công ty sẽ cần phải click tiếp đến các trang con cấp hai, ba... của website", Greenberg chia sẻ.
                        <br>
                        <br>

                        Mặt khác, Justin Shaw -  Sáng lập của công ty digital marketing One & ZeroThere, cho biết vẫn có cách để doanh nghiệp kể chuyện nhanh chóng, hiệu quả mà không làm ảnh hưởng đến trải nghiệm mua sắm của khách hàng. Justin Shaw cho rằng các doanh nghiệp TMĐT nên kết nối thương hiệu của họ với khách hàng để trở nên nổi bật trên thị trường.
                        <br>
                        <br>

                        "Khi một người truy cập bất kỳ mở ra website của bạn, họ cần được biết ngay "bạn là ai" thông qua phần giới thiệu ngắn gọn đặt ở đầu trang chủ, trước khi họ kéo chuột xuống để đọc thêm các thông tin khác về sản phẩm", Justin Shaw chia sẻ.</p>

                    <h6>2. Ưu tiên các thiết kế thân thiện với điện thoại di động</h6>

                    <p>80% người dùng truy cập internet qua điện thoại thông minh. Doanh số bán hàng qua điện thoại di động dự đoán sẽ chiếm 27% doanh số bán lẻ của thị trường TMĐT tại Mỹ vào cuối năm 2018. Và khả năng rất cao là khách hàng sẽ dùng điện thoại di động trong lần đầu tiên truy cập website của bạn.
                    <br><br>

                    Vì vậy, bạn cần tối ưu hóa giao diện website trên phiên bản điện thoại di động, nhằm tạo ra trải nghiệm tương tác tương đương khi truy cập trên màn hình máy vi tính. Shaw phân tích rằng dù khách hàng tương tác với website của bạn bằng điện thoại di động, song họ sẽ chỉ tiến hành thanh toán khi truy cập lại trên máy tính để bàn hoặc laptop.
                    <br><br>

                    Vì vậy, website của bạn cần có cấu trúc tự điều chỉnh kích thước các nội dung thiết kế tùy theo kích thước màn hình truy cập của người dùng. Điều này sẽ giúp khách hàng không nhận ra sự khác biệt quá lớn khi chuyển đổi giữa các màn hình truy cập.

                    <br><br>

                    Về lâu dài, các phương thức thanh toán trên điện thoại thông minh sẽ dần trở nên phổ biến hơn. Vì vậy, nếu bạn có đủ tiềm lực tài chính, hãy tối ưu hóa cả hai phiên bản website trên laptop lẫn điện thoại di động. Điều này đồng nghĩa bạn sẽ tạo ra hai thiết kế UX riêng cho người truy cập.

                    <br><br>

                    Với những doanh nghiệp vừa và nhỏ có ngân sách còn hạn chế, hãy dùng responsive design (Thiết kế website có thể đáp ứng với mọi thiết bị truy cập). "Thiết kế này sẽ tự động điều chỉnh giao diện của website chính phù hợp với giao diện của các thiết bị truy cập như máy tính bảng, điện thoại di động, laptop...", Justin Shaw tư vấn.
                    <br><br></p>

                    <h6>3. Thiết kế tối giản</h6>

                    <p>Một thiết kế đơn giản, tiện dụng có thể giúp gia tăng sự gắn kết với khách hàng và thúc đẩy doanh số bán hàng. Sử dụng hiệu quả các khoảng trắng, thiết kế website có ít trang chuyên mục, và dùng nhiều hình ảnh minh họa là ba cách bạn có thể dùng để đơn giản hóa thiết kế website. Tránh dùng những tiêu đề có font chữ dày, kích thước lớn lẫn những tính năng không cần thiết gây khó khăn cho người truy cập.
                    <br><br>

                    "Phong cách thiết kế tối giản có khả năng mang đến trải nghiệm hiệu quả và hứng thú nơi khách hàng là điều vô cùng quan trọng", Shaw nói, "Bạn cần tránh bổ sung quá nhiều hiệu ứng thiết kế lẫn các tính năng không cần thiết, vì điều này sẽ gây khó khăn cho người truy cập".
                    <br><br>
                    </p>

                    <h6 class="text-danger">Kết quả cuối cùng cần đạt được là biến website TMĐT trở thành nhân viên bán hàng làm việc 24/7 cho công ty của bạn.</h6>
                    <br>

                    <p>Các nhà thiết kế website đồng ý rằng mọi yếu tố thiết kế lẫn tính năng website đều phải có mục đích cụ thể khi sử dụng. Ví dụ điển hình là tính năng live chat và pop-up trên website. Greenberg nhận định các tính năng này đều cần thiết để giúp tạo ra sự kết nối giữa website và người truy cập. Tuy nhiên, nếu sau một thời gian vận hành, người truy cập không có nhu cầu sử dụng hai tính năng này thì bạn cần loại bỏ chúng đi, nhằm tránh gây xao nhãng cho người truy cập.
                    <br><br>

                    "Nếu bạn có một đội ngũ túc trực để tương tác liên tục với khách hàng thì live chat sẽ phát huy được hiệu quả của nó. Song tôi đã từng thấy rất nhiều website không có được đội ngũ này, lẫn không có nhiều khách hàng liên lạc với doanh nghiệp qua live chat. Khi đó, tính năng này chỉ làm lãng phí không gian website của họ", Greenberg cho biết.
                    <br><br>
                    </p>

                    <h6>4. Tránh dùng hình minh họa bán sẵn</h6>

                    <p>Sử dụng hình ảnh là cách tuyệt vời để giao tiếp với khách hàng và giúp họ cảm nhận được phong cách của thương hiệu công ty. Tuy nhiên, tương tự như khi kể chuyện thương hiệu, doanh nghiệp cần chọn lọc kỹ các hình ảnh sử dụng. Theo Salamunovic, chủ doanh nghiệp nên dùng hình ảnh kinh doanh thực tế trên website của mình.
                        <br><br>

                        "Hãy tránh dùng các hình minh họa miễn phí hoặc bán sẵn trên mạng. Thay vào đó, dùng những hình ảnh hoạt động thực tế của doanh nghiệp được chụp với chất lượng cao sẽ giúp trang TMĐT của bạn tạo dựng niềm tin nơi khách hàng", Salamunovic nhấn mạnh.</p>

                    <h6>5. Chỉ đăng tải những nội dung xuất sắc</h6>

                    <p>
                        Một trong những cách tốt nhất để một trang TMĐT nổi bật trên thị trường chính là nội dung của trang. Nếu sản phẩm, dịch vụ là tâm điểm trên website TMĐT của bạn thì hãy sản xuất những nội dung có thể thu hút khách hàng trực tiếp tìm đến sản phẩm, dịch vụ đó. Các nội dung này có thể trình bày với đa dạng hình thức như bài blog, các post trên mạng xã hội lẫn hình ảnh, video...

                        <br><br>

                        Điều quan trọng là bạn chỉ nên đầu tư để tạo ra và đăng tải những nội dung có chất lượng cao. Đừng quá tập trung vào những nội dung thuần giới thiệu về doanh nghiệp hoặc mang nặng tính kêu gọi khách hàng mua sản phẩm, sử dụng dịch vụ.

                        <br><br>

                        Theo Greenberg, bạn đừng nên chỉ tạo ra một trang blog giới thiệu về công ty, mức độ thành công của doanh nghiệp...mà hãy tạo ra đa dạng hoạt động tương tác, đặt ở nhiều kênh khác nhau nhằm thu hút khách hàng kết nối với thương hiệu của bạn.

                        <br><br>

                        "Tôi nghĩ rằng ngày nay, mỗi khách hàng sẽ truy cập nhiều website khác nhau cùng một lúc, vì vậy điều họ muốn là mỗi thông tin đọc thấy phải liên quan đến nhu cầu của bản thân. Nếu bạn quyết định tạo blog thì hãy viết nên những điều mà khách hàng muốn đọc", theo Greenberg.

                        <br><br>
                        Kết
                        <br><br>
                        Những trang TMĐT tốt nhất hiện nay đều có thiết kế tối giản với mỗi tính năng thêm vào đều phải phục vụ một mục đích cụ thể. Khi xây dựng trang TMĐT của riêng mình, bạn có thể tham khảo trang TheBestDesigns.com, nơi tổng hợp những website thiết kế hàng đầu hiện nay.

                        <br><br>

                        Khi phân tích các trang thiết kế xuất sắc trên, điều quan trọng là bạn đừng nên sao chép tất cả những điều họ đang làm, đặc biệt là website của đối thủ.

                        <br><br>

                        "Đừng mãi xem website của đối thủ cả ngày. Cảm hứng thiết kế của bạn nên đến từ chính nhu cầu của nhóm khách hàng cụ thể, hoặc những công ty thành công nổi bật trên thị trường. Bạn có thể vay mượn ý tưởng từ các trường hợp thành công, nhưng đừng chỉ sao chép nguyên bản vì nếu không, bạn sẽ mãi chỉ là bản sao của một doanh nghiệp khác trong mắt của khách hàng", Salamunovic khuyên.
                        <br><br>
                    </p>
                </div>
                <div class="col-md-3 p-0" id="fe_tt_lienQuan">
                    <h4>TIN TỨC <span>SỰ KIỆN</span></h4>

                    <div class="d-flex align-items-center border mb-1">
                        <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg" alt="" style="width: 80px;height: auto">
                        <p class="pt-2">
                            <a href="">
                                5 xu hướng thiết kế website thương mại điện tử nổi bật năm 2018
                            </a>
                            <br>
                        <span>Posted : 30-04-2018</span></p>
                    </div>

                    <div class="d-flex align-items-center border mb-1">
                        <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg" alt="" style="width: 80px;height: auto">
                        <p class="pt-2">
                            <a href="">
                                5 xu hướng thiết kế website thương mại điện tử nổi bật năm 2018
                            </a>
                            <br>
                            <span>Posted : 30-04-2018</span></p>
                    </div>

                    <div class="d-flex align-items-center border mb-1">
                        <img src="http://oneoffice.com.vn/Content/UserFiles/Images/News/website-thuong-mai-dien-tu-2018.jpg" alt="" style="width: 80px;height: auto">
                        <p class="pt-2">
                            <a href="">
                                5 xu hướng thiết kế website thương mại điện tử nổi bật năm 2018
                            </a>
                            <br>
                            <span>Posted : 30-04-2018</span></p>
                    </div>






                </div>
            </div>
        </div>
    </div>

@endsection