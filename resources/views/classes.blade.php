@extends('layouts.main')
@section('title','Classes')
@section('content')

        <!-- Page Header End -->
        @include('components.innerPagesHeader')
        <!-- Page Header End -->

        <!-- Classes Start -->
        @include('components.classes')
        <!-- Classes End -->


        <!-- Appointment Start -->
        @include('components.appointment')
        <!-- Appointment End -->

        <!-- Testimonial Start -->
        @include('components.testimonial')
        <!-- Testimonial End -->

@endsection