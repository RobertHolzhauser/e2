@extends('templates/master')

@section('title')
    User Not Found
@endsection

@section('content')
    <div class="container">
        <h2 test='user-not-found-header'>User Not Found</h2>
        <p>Sorry, we were not able to find the user you were looking for.</p>

        <a href='/users'>&larr; Return to all users</a><br>
    </div>
@endsection
