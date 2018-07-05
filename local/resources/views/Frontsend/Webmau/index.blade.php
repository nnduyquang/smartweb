@extends('layouts.master')
@section('bodycontent')
    @include('Frontsend.Webmau.banner')
    @include('Frontsend.Webmau.Giaodientheonganh')
    {{--@include('Frontsend.Webmau.documentmorong')--}}
    @include('Frontsend.Webmau.giaodienmau')
    @include('Frontsend.Webmau.start_your_web')


    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');

// Go to the next item
            $('.customNextBtn').click(function () {
                owl.trigger('next.owl.carousel');
            })
// Go to the previous item
            $('.customPrevBtn').click(function () {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            })

            $('.owl-carousel').owlCarousel({
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

        });
    </script>
@endsection