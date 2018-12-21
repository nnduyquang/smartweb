var plugins = {
    doRegisterWebsite: $('.do-register'),
    h7OwlCarousel:$('#owl-3'),
    d2OwlCarousel:$('#owl-4'),
    d3OwlCarousel:$('#owl-5'),
    d4OwlCarousel:$('#owl-6'),
    h8CountUp:$('#h_8'),
};
$(document).ready(function () {
    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }
    }
    function doRegisterWebsite() {
        $('#pl_modal_register').on('show.bs.modal', function (e) {
            var type = $(e.relatedTarget).data('id');
            $("select[name='register_type']").val(type);
            $(e.currentTarget).find('#btnRegister').click(function(){
                $('.loadingSending').css('display', 'inline-block');
                $('.input-text').removeClass('is-invalid');
                $('.input-area').removeClass('is-invalid');
                var data = new FormData($(this).get(0));
                data.append('type',$("select[name='register_type']").val());
                data.append('name', $("input[name='register_name']").val());
                data.append('email', $("input[name='register_email']").val());
                data.append('phone', $("input[name='register_phone']").val());
                data.append('note', $("textarea[name='register_note']").val());
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: getBaseURL() + "send-request-website/send",
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function (data) {
                        if (data.success) {
                            $('.loadingSending').css('display', 'none');
                            $('.successSending').css('display', 'inline-block');
                            $('.successSending').fadeIn(500);
                            $('.txt-success').css('display', 'inline-block');
                            $('.txt-success').fadeIn(500);
                            setTimeout("$('.successSending').fadeOut(1500);", 3000);
                            setTimeout("$('.txt-success').fadeOut(1500);", 3000);
                            $("input[name='register_name']").val("");
                            $("input[name='register_email']").val("");
                            $("input[name='register_phone']").val("");
                            $("textarea[name='register_note']").val("");
                            setTimeout("$('#pl_modal_register').modal('hide');",3500);
                        }
                        else {
                            $('.loadingSending').css('display', 'none');
                            var errors = data.validator;
                            if (errors.hasOwnProperty('email')) {
                                $('.ip-email .input-text').addClass('is-invalid');
                                $('.ip-email .invalid-feedback').html(errors['email']);
                            }
                            if (errors.hasOwnProperty('name')) {
                                $('.ip-name .input-text').addClass('is-invalid');
                                $('.ip-name .invalid-feedback').html(errors['name']);
                            }
                        }
                    }
                });
            });
        });
        $('#pl_modal_register').on('hide.bs.modal', function (e) {
            $(e.currentTarget).find('#btnRegister').unbind();
        });
    }
    function runH7OwlCarousel(){
        plugins.h7OwlCarousel.owlCarousel({
            // animateOut: 'fadeIn',
            // animateIn: 'fadeOut',
            loop:true,
            margin:10,
            nav:false,
            dots:true,
            responsive:{
                0:{

                    items:1
                },
                600:{

                    items:1
                },
                1000:{

                    items:1
                }
            }
        });
    }
    function runH8CountUp(){
        var waypoint = new Waypoint({
            element: document.getElementById('h_static'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("counter-number1", 0, 150, 0, 1.5,);
                var numHs2 = new CountUp("counter-number2", 0, 55, 0, 2,);
                var numHs3 = new CountUp("counter-number3", 0, 100, 0, 2.2, options1);
                var numHs4 = new CountUp("counter-number4", 0, 10, 0, 2,);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();
                waypoint.disable();
            },
            offset: '85%'
        })
    }
    function runD2OwlCarousel(){
        $('.customNextBtn').click(function () {
            plugins.d2OwlCarousel.trigger('next.owl.carousel');
        })
// Go to the previous item
        $('.customPrevBtn').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            plugins.d2OwlCarousel.trigger('prev.owl.carousel', [300]);
        })
        plugins.d2OwlCarousel.owlCarousel({
            center: true,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    // dots: true,
                    items: 1,
                    nav: false,
                    loop: true
                },
                600: {
                    // dots: true,
                    items: 2,
                    nav: false,
                    loop: true
                },
                1000: {
                    // dots: true,
                    items: 3,
                    nav: false,
                    loop: true

                }
            }
        });
    }
    function runD3OwlCarousel(){
        plugins.d3OwlCarousel.owlCarousel({
            dots: true,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
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
        });
    }
    if (plugins.doRegisterWebsite.length) {
        doRegisterWebsite();
    }
    if(plugins.h7OwlCarousel.length){
        runH7OwlCarousel();
    }
    if(plugins.h8CountUp.length){
        runH8CountUp();
    }
    if(plugins.d2OwlCarousel.length){
        runD2OwlCarousel();
    }
    if(plugins.d3OwlCarousel.length){
        runD3OwlCarousel();
    }
    new WOW().init();
});