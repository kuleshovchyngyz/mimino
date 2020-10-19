@extends('layouts.main')

@section('title')
    {{ __('Error 404') }}
@endsection
@section('head')
    <style>
        .navbar.is-info {
            display: none!important;
        }
    </style>
@endsection


@section('content')
    <div class="column">
        <section class="section is-large">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column has-text-centered">
                        <h1 class="title"> {{ __('403 Forbidden') }}</h1>
                        <p class="subtitle">{{ __("You don't have rights to view this page") }}</p>
                        <router-link class="button" to="/">{{ 'Home' }}</router-link>
                    </div>
                </div>
            </div>
      </section>
    </div>
@endsection
