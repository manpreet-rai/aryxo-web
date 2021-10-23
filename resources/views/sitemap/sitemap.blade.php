@extends('layout')

@section('custom-head')
    @include('scripts.custom-head')
@endsection

@include('sitemap.sitemap-contents')
@include('seo.index')
