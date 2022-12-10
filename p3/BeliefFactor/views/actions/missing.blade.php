@extends('templates/master')

@section('title')
    Action Not Found
@endsection

@section('content')
    <div class="container">
        <h2 test='action-not-found-header'>Action Not Found</h2>
        <p>Sorry, we were not able to find the action step you were looking for.</p>

        <a href='/goals'>&larr; Return to all goals</a><br>
        <a href='/actions'>&larr; Return to all actions</a>
    </div>
@endsection
