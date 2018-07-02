@extends('layouts.master')

@section('bodycontent')

    @include('Frontsend.Home.fe_home_banner_cameratop')
    @include('Frontsend.Home.fe_home_features')
    @include('Frontsend.Home.slogan')
    @include('Frontsend.Home.responsive_web')
    @include('Frontsend.Home.easy-interaction')
    @include('Frontsend.Home.create-website-you-want')
    <style>
        div#customer_services h3{
            font-size: 32px;
            position: relative;
        }

        div#customer_services h3:before{
            position: absolute;
            content: '';
            width: 38px;
            height: 3px;
            background-color: #6ca81d;
            left: 50%;
            transform: translate(-50%,0%);
            bottom: -10px;
        }

        div#customer_services p{
            padding-top: 30px;
            font-size: 20px;
        }
    </style>
    <div class="container-fluid pb-5" id="customer_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>CHÚNG TÔI LẮNG NGHE KHÁCH HÀNG</h3>
                    <p>Off the Shelf is a great product that comes with customer support to match. Whether you have a question,
                        a concern or need assistance, we treat you like a valued customers, not a nuisance.</p>
                    <img src="{{URL::asset('images/banner/maquette-billet.png')}}" alt="" style="width: 80%;height: auto;">
                </div>
            </div>
        </div>
    </div>

    @include('Frontsend.Home.slogan2')

    <style>
        div#bottom_customer p{
            font-size: 18px;
        }
        div#bottom_customer i{
            font-size: 45px;
        }

        div#phone_support{
            background: linear-gradient(to right, #066994 , #0983b8);
            color: white;
        }

        div#dev_support{
            background: linear-gradient(to right, #0983b8 , #0a95d1);
            color: white;
        }

        div#livechat_support{
            background: linear-gradient(to right, #0a95d1 , #0ba9ed);
            color: white;
        }

    </style>

    <div class="container-fluid" id="bottom_customer">
        <div class="row">
            <div class="col-lg-4 p-5 d-flex" id="phone_support">

                <i class="far fa-paper-plane"></i>
                <div class="pl-3">
                    <h4>Extensive Documentation</h4>
                    <p>Off the Shelf comes with a comprehensive, illustrated user
                        guide that explains the user interface and the theme's unique features.</p>
                </div>


            </div>
            <div class="col-lg-4 p-5 d-flex" id="dev_support">
                <i class="far fa-lightbulb"></i>
                <div class="pl-3">
                    <h4>Support by the Developers</h4>
                    <p>The exact same people that designed and developed the theme provide customer service.
                        You get access to support by trained professionals, 7 days a week.</p>
                </div>
            </div>
            <div class="col-lg-4 p-5 d-flex" id="livechat_support">
                <i class="far fa-comments"></i>
                <div class="pl-3">
                    <h4>Live Chat</h4>
                    <p>Chat with our customer support agents in a one-on-one chat session — help is just a click away.
                        Usually available on weekdays through our website</p>
                </div>
            </div>
        </div>
    </div>


@endsection