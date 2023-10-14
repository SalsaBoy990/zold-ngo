@extends('errors::layout-not-found')

@section('title', __('Not Found'))
@section('code', '404')
@section('message')
    Page not <span class="fw-bolder text-primary">found</span>
@endsection
@section('description', __('Oops! Looks like you followed a bad link. If you think this is a problem with us, please tell us.'))




