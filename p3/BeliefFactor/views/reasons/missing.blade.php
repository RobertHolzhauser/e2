@extends('templates/master')

@section('title')
    Reasons Not Found
@endsection

@section('content')
    <div class="container">
        <h2 test='reasons-not-found-header'>Reasons Not Found</h2>
        <p>Sorry, we were not able to find the Belief Reasons you were looking for.</p>

        <a href='/reasons'>&larr; Return to all reasons</a><br>
    </div>
@endsection
