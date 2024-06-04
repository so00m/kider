@extends('layouts.main')
@section('title','About Us')
@section('content')

        <!-- Page Header End -->
        @include('components.innerPagesHeader')
        <!-- Page Header End -->


        <!-- About Start -->
        @include('components.about')
        <!-- About End -->


        <!-- Call To Action Start -->
        @include('components.call-to-action')
        <!-- Call To Action End -->


        <!-- Team Start -->
        @include('components.team')
        <!-- Team End -->
        
@endsection

