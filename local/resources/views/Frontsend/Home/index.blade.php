@extends('layouts.master')

@section('bodycontent')

    @include('Frontsend.Home.fe_home_banner_cameratop')
    @include('Frontsend.Home.ChaoMungWebDesign')
    @include('Frontsend.Home.OutBestServices')
    {{--@include('Frontsend.Home.fe_home_features')--}}
    {{--@include('Frontsend.Home.slogan')--}}
    @include('Frontsend.Home.responsive_web')
    @include('Frontsend.Home.OurRecentPort')
    @include('Frontsend.Home.QuyTrinhTrienKhai')
    {{--@include('Frontsend.Home.create-website-you-want')--}}
    @include('Frontsend.Home.fouder')
    @include('Frontsend.price_list.pl_info')
    @include('Frontsend.Home.tintuc')
    @include('Frontsend.Home.TuVanThietKeWeb')
    {{--@include('Frontsend.Home.customer_services')--}}
    {{--@include('Frontsend.Home.slogan2')--}}


@endsection