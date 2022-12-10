@extends('templates/master')

@section('title')
    Rankings Not Found
@endsection

@section('content')
    <div class="container">
        <h2 test='rankings-not-found-header'>Rankings Not Found</h2>
        <p>Sorry, we were not able to find the rankings you were looking for.</p>

        <a href='/rankings'>&larr; Return to all rankings</a><br>
    </div>
@endsection
