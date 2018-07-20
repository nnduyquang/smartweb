<style>
    div#fe_h_fouder {
        background-image: url({{URL::asset('images/bg/testimonial.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }

    div#fe_h_fouder h5 {
        position: relative;
        font-size: 38px;
        color: white;
        padding-top: 60px;
        padding-bottom: 20px;
        margin-bottom: 50px;
    }

    div#fe_h_fouder h5:before {
        content: '';
        position: absolute;
        height: 2px;
        width: 60px;
        bottom: 0;
        left: 50%;
        transform: translatex(-50%);
        background-color: #0a95d1;
    }

    div#fe_h_fouder p {
        position: relative;
        padding-top: 30px;
        font-size: 16px;
        color: white;
        width: 80%;
        margin: auto;
    }

    div#fe_h_fouder p:before {
        content: '\f10d';
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        position: absolute;
        top: -5px;
        left: -29px;
        color: #00a2ff75;
        font-size: 43px;
        font-style: normal;
    }

    div#fe_h_fouder h6 {
        font-size: 23px;
        color: white;
        margin: 0;
        padding: 0;
    }

    div#fe_h_fouder span {
        font-size: 15px;
        color: white;
    }


</style>

<div class="container-fluid pb-5" id="fe_h_fouder">
    <div class="container">
        <div class="row">
            <div id="owl-3" class="col-md-12 owl-carousel owl-theme">

                @for ($i = 0; $i < 3; $i++)
                    <div class="col-12 text-center">
                        <h5>TESTIMONIALS</h5>
                        <img src="{{URL::asset('images/icon/testimonial-1.jpg')}}" alt=""
                             style="border-radius: 50%;border: 3px solid #bbbbbb;width: 86px;height: 86px;margin: auto">

                        <p class="pl-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a elit.
                            Proin auctor, neque ut facilisis sollicitudin, quam lacus consectetur massa,
                            in mollis nibh lacus non ex. Sed eu diam dapibus, sollicitudin elit sit amet,
                            pretium
                            ligula. Nullam velit sapien dictum.</p>

                        <h6>KETY YORK</h6>
                        <span>CEO & Founder</span>



                    </div>
                @endfor


            </div>


        </div>
    </div>
</div>

<style>
    div#fe_h_fouder_counter {
        background-color: #0a95d1;
    }

    div#fe_h_fouder_counter p {
        font-size: 48px;
        line-height: 18px;
    }

    div#fe_h_fouder_counter p span {
        font-size: 16px;
    }

    span#counter-number1, span#counter-number2, span#counter-number3, span#counter-number4 {
        font-size: 50px;
        line-height: 50px;
        font-weight: 600;
        color: white;
    }

    span.counter-text {
        margin-left: 10px;
        font-size: 13px;
        color: white;
    }
</style>

<div class="container-fluid pt-5 pb-5" id="fe_h_fouder_counter">
    <div class="container">
        <div id="h_static" class="row">

            <div class="col-lg-3 text-center col-md-6 pb-3 col-12 d-flex align-items-center justify-content-center">
                <i class="fas fa-users fa-2x text-white"></i>
                <div class="counter_area d-flex flex-column justify-content-center pl-3">
                    <span id="counter-number1" class="h_static" data-from="1" data-to="150" data-speed="1000">
                        </span>
                    <span class="counter-text p-0 m-0">Members</span>
                </div>
            </div>

            <div class="col-lg-3 text-center col-md-6 pb-3 col-12 d-flex align-items-center justify-content-center">
                <i class="fas fa-university fa-2x text-white"></i>
                <div class="counter_area d-flex flex-column justify-content-center pl-3">
                    <span id="counter-number2" class="h_static" data-from="1" data-to="150" data-speed="1000">
                        </span>
                    <span class="counter-text p-0 m-0">Experience</span>
                </div>
            </div>

            <div class="col-lg-3 text-center col-md-6 pb-3 col-12 d-flex align-items-center justify-content-center">
                <i class="fas fa-laptop fa-2x text-white"></i>
                <div class="counter_area d-flex flex-column justify-content-center pl-3">
                    <span id="counter-number3" class="h_static" data-from="1" data-to="150" data-speed="1000">
                        </span>
                    <span class="counter-text p-0 m-0">Projects</span>
                </div>
            </div>

            <div class="col-lg-3 text-center col-md-6 pb-3 col-12 d-flex align-items-center justify-content-center">
                <i class="fas fa-trophy fa-2x text-white"></i>
                <div class="counter_area d-flex flex-column justify-content-center pl-3">
                    <span id="counter-number4" class="h_static" data-from="1" data-to="150" data-speed="1000">
                        </span>
                    <span class="counter-text p-0 m-0">Award</span>
                </div>
            </div>

        </div>
    </div>
</div>

@section('script')
    <script src="{{URL::asset('local/bower_components/waypoints/lib/noframework.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/countUp.js')}}"></script>
    <script>

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

        $('#owl-3').owlCarousel({
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
        })

        var owl2 = $('#owl-3');
        // Go to the next item
        $('.customNextBtn').click(function() {
            owl2.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl2.trigger('prev.owl.carousel', [300]);
        })

    </script>
@endsection

