@extends('frontend.master')
@section('container')
    @include('frontend.common.Home.fe_home_banner_cameratop')
    @include('frontend.price_list.pl_info')
    @include('frontend.price_list.pl_add_on_info')
    @include('frontend.price_list.quick_contact')
@endsection