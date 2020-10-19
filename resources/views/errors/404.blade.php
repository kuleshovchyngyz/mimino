@extends('layouts.main')

@section('title')
    {{ __('Error 404') }}
@endsection
@section('head')
    <style>

    </style>
@endsection


@section('content')
    <div class="column">
        <section class="section is-large">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column has-text-centered">
                        <h1 class="title"> {{ __('404 Page Not Found') }}</h1>
                        <p class="subtitle">{{ __('An unexpected error has occurred') }}</p>
                        <a class="button" href="{{ URL::to('/') }}">{{ __('Home') }}</a>
                    </div>
                </div>
            </div>
      </section>
    </div>
@endsection
