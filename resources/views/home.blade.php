@extends('layouts.main')
@section('title','Kider Preschool')
@section('content')

        <!-- Carousel Start -->
        @include('components.carousel')
        <!-- Carousel End -->

        <!-- Facilities Start -->
        @include('components.facilities')
        <!-- Facilities End -->


        <!-- About Start -->
       @include('components.about')
        <!-- About End -->


        <!-- Call To Action Start -->
       @include('components.call-to-action')
        <!-- Call To Action End -->


        <!-- Classes Start -->
       @include('components.classes')
        <!-- Classes End -->


        <!-- Appointment Start -->
        @include('components.appointment')
        <!-- Appointment End -->


        <!-- Team Start -->
        @include('components.team')
        <!-- Team End -->


        <!-- Testimonial Start -->
        @include('components.testimonial')
        <!-- Testimonial End -->
@endsection
