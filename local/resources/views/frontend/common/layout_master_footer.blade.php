<style>
    div#layout_master_copyright {
        background-color: #1d1d1d;
    }

    div#layout_master_footer {
        background-image: url({{URL::asset('images/bg/body.png')}});
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
        padding-left: 5px;
        color: #09a4fd;
    }

    div#layout_master_footer ul li button {

        border: none;
        background-color: transparent;

    }

    /*Social network button */

    div#layout_master_footer ul li button i.fa-facebook-f,
    div#layout_master_footer ul li button i.fa-twitter,
    div#layout_master_footer ul li button i.fa-google-plus-g {
        width: 46px;
        height: 46px;
        font-size: 26px;
        padding: 10px 10px 10px 12px;
        border-radius: 50%;
        color: #dddcdc;
        transition: .3s;
    }

    div#layout_master_footer ul li button i.fa-facebook-f:hover {
        color: white;
        background-color: #05355b;
    }

    div#layout_master_footer ul li button i.fa-twitter:hover {
        color: white;
        background-color: #09a4fd;
    }

    div#layout_master_footer ul li button i.fa-google-plus-g:hover {
        color: white;
        background-color: #e3110c;
    }


</style>

<div class="container-fluid bg-dark" id="layout_master_footer">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <ul class="">
                    <li class="pb-3"><img src="{{URL::asset('images/logo/logo-footer.png')}}" alt=""
                                          style="width: 100%;height: auto;">
                    </li>
                    <li>Khách hàng trao niềm tin chúng tôi tạo nên thương hiệu.</li>
                    <li>Khách hàng là giá trị là tài sản quý giá để đồng hành cùng phát triển.
                    </li>

                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <ul class="">
                    <li>THÔNG TIN VỀ CHÚNG TÔI</li>
                    <li><i class="fas fa-map-marker-alt"></i> 25 Hoàng Diệu, Phường 12, Quận 4, TPHCM.</li>
                    <li><i class="fas fa-envelope"></i> info@smartlinks.vn</li>
                    <li><i class="fas fa-headphones"></i> 0914.348.131</li>
                    <li><i class="fas fa-phone-square"></i> (028) 66830091</li>
                </ul>
            </div>

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
                        <a href=""> Google Re-Marketing.</a>
                    </li>
                    <li>
                        <a href=""> Facebook Ads.</a>
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
                    <img src="{{URL::asset('images/Banner/GooglePartners.png')}}" alt=""
                         style="width: 100%;height: auto;">
                </div>


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

                Công Ty TNHH Truyền Thông và Đầu Tư Smartlinks - Giấy phép kinh doanh số: 0312788587 cấp ngày 21/05/2014
                bởi Sở Kế Hoạch và
                Đầu Tư Tp. Hồ Chí Minh
            </div>
        </div>

    </div>
</div>