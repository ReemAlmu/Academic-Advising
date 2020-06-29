@extends('layouts.app')
@section('title', __('About me'))
 @section('content')


@include('-partials._closed_alert')

     <h2> {{__("Welcome to our website") }}, {{$userName}} </h2>
        <a href="clear-my-name"> remove</a>

 @endsection
