@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection


@section('content')
    <h2 class="text-center">404 Page Not Found</h2>
    <a href='{{ $app->config('app.url') }}'>{{ $app->config('app.url') }}</a>
@endsection
