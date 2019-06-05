@extends('layout.main')

@section('header') 
    @include('layout.header')
@endsection

@section('content') 
    @include('layout.banner')
    @include('layout.' . $contentName)
    {{-- @include('layout.contact_us') --}}
@endsection

@section('footer')
    {{-- @include('layout.primary_footer') --}}
    @include('layout.bottom_footer')
@endsection