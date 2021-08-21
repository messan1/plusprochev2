
@extends("layouts.applayout")

@section("content")


        <!-- Search Bar -->
        @include('includes.searchBar')

        <!-- End Search Bar -->


        <!-- Offers Bar -->
        @include('includes.recentsOffers', [
            'recentoffers1' => [],
            'recentoffers2' => []
        ])

        <!-- End Offers Bar -->


        <!-- Testimonials Bar -->
        @include('includes.testimonials')

        <!-- Testimonials Bar -->


@stop
