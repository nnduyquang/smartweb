@extends('layouts.master')
@section('bodycontent')
    @include('Frontsend.Pages.banner')
    @include('Frontsend.Pages.easy-interaction')

    <style>
        div#fe_p_wecareourcustomer {
            background-image: url(images/bg/bg_envato_elite_white.jpg);
            /*background-attachment: fixed;*/
            -webkit-background-size: cover;
            background-size: cover;

        }

        div#fe_p_wecareourcustomer h5 {
            font-weight: normal;
            font-size: 20px;
            color: #1b1e21;
            padding-top: 20px;
            padding-bottom: 10px;

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
                    <h3>We Listen to Our Customers</h3>
                    <h5>More than 12 years of experience in the marketing business, developers of the most succesfull
                        landing page theme on themeforest</h5>
                    <p class="pt-3 pb-3">Off the Shelf is the result of many years of experience as marketers and web
                        developers. We were fortunate enough to work on a vast variety of projects: from local
                        businesses that needed to attract more customers to large scale PPC campaigns with thousands of
                        visitors a day.</p>
                    <div class="d-flex">
                        <img src="{{URL::asset('images/icon/nils-120x120.jpg')}}" alt="">
                        <div>
                            <p style="font-size: 21px">"Some of the best features in this theme were the direct result
                                of
                                feedback from our customers. Keep them coming!"</p>
                            <span>
                                <p class="font-weight-boldl p-0 m-0">Nils H. <br>
                                Web Designer at ShapingRain
                                </p>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Frontsend.Pages.linebreak')
@endsection