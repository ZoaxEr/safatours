@extends('layout.main')

@section('header') 
    @include('layout.header')
@endsection

@section('banner') 
    @include('layout.slider_banner')
@endsection

@section('content') 
    @include('layout.bestoffer')
    {{-- @include('layout.dealers') --}}
    @include('layout.we_do')
    @include('layout.rental_vehicles')
    {{-- @include('layout.co_founder') --}}
    {{-- @include('layout.payment_methods') --}}
    {{-- @include('layout.vehicles_filter') --}}
    {{-- @include('layout.executive_team') --}}
    {{-- @include('layout.map') --}}
    @include('layout.contact_us')
    @include('layout.need_help')
@endsection

@section('footer')
    @include('layout.primary_footer')
    @include('layout.bottom_footer')
@endsection