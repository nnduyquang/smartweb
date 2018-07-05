<style>
    .glyph-icon2 {
        padding: 10px;
        display: block;
        font-family: "Flaticon";
        line-height: 1;
        background-color: #0a95d1;

    }

    .glyph-icon2:before {
        font-size: 46px;
        color: white;
        margin-left: 0;
    }

    div.webmau_slider {
        width: 99.5%;
        margin: auto;
        height: auto;
        background-color: #0a95d1;
    }

    div.webmau_slider > span {
        color: white;
        font-size: 16px;
    }

</style>

<div class="col-md-12 mb-0 pb-0">
    <div class="owl-two owl-carousel">
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-hair" style=""></i>
            <span>LÀM ĐẸP</span></div>
        <div class="text-center webmau_slider"><i
                    class="glyph-icon2 flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view" style=""></i>
            <span>DỊCH VỤ</span></div>
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-baby-boy" style=""></i>
            <span>BABY</span></div>
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-cream" style=""></i>
            <span>MỸ PHẨM</span></div>
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-cityscape" style=""></i>
            <span>BẤT ĐỘNG SẢN</span></div>
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-medicine" style=""></i>
            <span>THUỐC</span></div>
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-bedside-table" style=""></i>
            <span>NỘI THẤT</span></div>
        <div class="text-center webmau_slider"><i class="glyph-icon2 flaticon-plumber" style=""></i>
            <span>SỮA CHỮA</span></div>


    </div>
</div>

<script>
    $(document).ready(function () {

        $('.owl-two').owlCarousel({
            dots: true,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    dots: true,
                    items: 2,
                    nav: false,
                    loop: true
                },
                600: {
                    dots: true,
                    items: 4,
                    nav: false,
                    loop: true
                },
                1000: {
                    dots: true,
                    items: 8,
                    nav: false,
                    loop: true

                }
            }
        })
    });
</script>