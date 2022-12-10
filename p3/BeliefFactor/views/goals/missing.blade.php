@extends('templates/master')

@section('title')
    Goal Not Found
@endsection

@section('content')
    <div class="container">
        <h2 test='goal-not-found-header'>Goal Not Found</h2>
        <p>Sorry, we were not able to find the goal you were looking for.</p>

        <a href='/goals'>&larr; Return to all goals</a>
    </div>
@endsection
