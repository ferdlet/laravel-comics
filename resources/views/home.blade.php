@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    @include('../partials.jumbotron')
    @include('../partials.currentSeries')
@endsection