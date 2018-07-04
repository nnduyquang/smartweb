<style>
    div#layout_master_copyright {
        background-color: #1d1d1d;
    }

    div#layout_master_footer {
        background-image: url(images/bg/body.png);
        color: white;
    }

    div#layout_master_footer ul {
        list-style-type: none;
        margin: 0;
        padding: 30px 0px;
    }

    div#layout_master_footer ul li {
        display: block;
        font-size: 16px;
        padding: 5px 0px;
    }

    div#layout_master_footer ul li:first-child {
        font-weight: 500;
    }

    div#layout_master_footer ul li a {
        font-size: 16px;
        color: white;
        transition: .3s;
    }

    div#layout_master_footer ul li a:hover {
        text-decoration: none;
        padding-left: 15px;
        color: white;
    }

    div#layout_master_footer ul li button{

        border: none;
        background-color: transparent;

    }


    /*Social network button */

    div#layout_master_footer ul li button i.fa-facebook-f,
    div#layout_master_footer ul li button i.fa-twitter,
    div#layout_master_footer ul li button i.fa-google-plus-g
    {
    width: 46px;
    height: 46px;
    font-size: 26px;
    padding: 10px 10px 10px 12px;
    border-radius: 50%;
    color: #dddcdc;
    transition: .3s;
    }

    div#layout_master_footer ul li button i.fa-facebook-f:hover{
    color: white;
    background-color: #05355b;
    }

    div#layout_master_footer ul li button i.fa-twitter:hover{
    color: white;
    background-color: #09a4fd;
    }

    div#layout_master_footer ul li button i.fa-google-plus-g:hover{
    color: white;
    background-color: #e3110c;
    }


</style>

<div class="container-fluid bg-dark" id="layout_master_footer">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <ul class="">
                    <li class="pb-3"><img src="images/logo/logo-footer.png" alt="" style="width: 100%;height: auto;">
                    </li>
                    <li>Khách hàng trao niềm tin chúng tôi tạo nên thương hiệu.</li>
                    <li>Khách hàng là giá trị là tài sản quý giá để dồng hành cùng phát triển.
                    </li>

                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <ul class="">
                    <li>THÔNG TIN VỀ CHÚNG TÔI</li>
                    <li>ĐỊA CHỈ : 25 Hoàng Diệu, Phường 12, Quận 4</li>
                    <li>Email support : Suport24.Smartweb@gmail.com</li>
                    <li>HOTLINE : 0914.348.131</li>
                    <li>SUPPORT : (028) 66830091</li>
                </ul>
            </div>

            {{--<div class="col-md-3 col-sm-6 col-12">--}}
                {{--<ul class="">--}}
                    {{--<li>BÀI VIẾT CÔNG NGHỆ</li>--}}
                    {{--<li>--}}
                       {{--<div class="d-flex align-items-center">--}}
                           {{--<img src="http://demos.shapingrain.com/offtheshelfwp/wp-content/uploads/sites/9/2015/06/blog_dummy8-120x120.jpg" alt="" style="width: 60px;height: auto;">--}}
                           {{--<div class="pl-2"><p class="p-0 m-0">This book will change your life</p>--}}
                           {{--<span style="color: #cccccc">June 3, 2015</span></div>--}}
                       {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<img src="http://demos.shapingrain.com/offtheshelfwp/wp-content/uploads/sites/9/2015/06/blog_dummy7-120x120.jpg" alt="" style="width: 60px;height: auto;">--}}
                            {{--<div class="pl-2"><p class="p-0 m-0">Essential Steps to Success</p>--}}
                                {{--<span style="color: #cccccc">June 3, 2015</span></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="d-flex align-items-center">--}}
                            {{--<img src="http://demos.shapingrain.com/offtheshelfwp/wp-content/uploads/sites/9/2015/06/blog_dummy4-120x120.jpg" alt="" style="width: 60px;height: auto;">--}}
                            {{--<div class="pl-2"><p class="p-0 m-0">Marketing trends of the year</p>--}}
                                {{--<span style="color: #cccccc">June 3, 2015</span></div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-md-3 col-sm-6 col-12">
                <ul class="">
                    <li>DIGITAL MARKETING</li>
                    <li>
                        <a href="">Google Ads.</a>
                    </li>
                    <li>
                        <a href=""> Google Display.</a>
                    </li>
                    <li>
                        <a href=""> Google Re Marketing.</a>
                    </li>
                    <li>
                        <a href="">  Facebook Ads.</a>
                    </li>
                    <li>
                        <a href=""> Youtube Ads.</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <ul class="">
                    <li>KẾT NỐI VỚI CHÚNG TÔI</li>
                    <li>
                        <button><i class="fab fa-facebook-f"></i></button>
                        <button><i class="fab fa-twitter"></i></button>
                        <button><i class="fab fa-google-plus-g"></i></button>
                    </li>
                </ul>
                
                <div>
                    <img src="{{URL::asset('images/Banner/GooglePartners.png')}}" alt="" style="width: 100%;height: auto;">
                </div>



            </div>


            {{--<div class="col-md-12 text-center" >--}}
                {{--<div class="pb-3 m-auto">--}}
                    {{--<img src="{{URL::asset('images/Banner/20150827110756-dathongbao.png')}}" alt="" style="width: 200px;height: auto;">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>

</div>
</div>
{{--copyright--}}
<div class="container-fluid text-light" id="layout_master_copyright">
    <div class="container p-0">
        <div class="row text-center">
            <div class="col-md-12 pt-2 pb-2" style="font-size: 14px;">
                Copyright © 2018 Smartlinks.vn . All Rights Reserved. <br>

                Công ty Smartlinks - Giấy phép kinh doanh số: 0312788587 cấp ngày 21/05/2014 bởi Sở Kế Hoạch và
                Đầu Tư Tp. Hồ Chí Minh
            </div>
        </div>

    </div>
</div>