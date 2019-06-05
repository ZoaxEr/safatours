@extends('layout.main')

@section('header') 
    @include('layout.header')
@endsection

@section('content') 
    @include('layout.banner')
    @include('layout.all_vehicles')
    @include('layout.contact_us')
@endsection

@section('footer')
    @include('layout.bottom_footer')
@endsection