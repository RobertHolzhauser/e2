@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection


@section('content')
    <div class="container">
        <h3 class="text-center">Apologies, it seems like our Belief Factors aren't fully aligned for that page. We'll
            keep working on it.
        </h3>
        <br>
        <a href='/'>Return to the main page</a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
