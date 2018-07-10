@extends('layouts.master')
@section('bodycontent')
    @include('Frontsend.Home.fe_home_banner_cameratop')
    @include('Frontsend.price_list.pl_info')
    @include('Frontsend.price_list.pl_add_on_info')
    @include('Frontsend.price_list.quick_contact')
@endsection