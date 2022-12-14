@extends('templates/master')

@section('title')
    {{ $action['name'] }}
@endsection

@section('content')
    <div class='container'>
        <div id='action-show'>
            <h1><u>Action Step</u></h1>
            <h2 display-6>{{ $action['name'] }}</h2>

            <p class='action-description'>
                <strong>Description:</strong> {{ $action['description'] }}
            </p>

            <p class='action-status'>
                <strong>Status:</strong> {{ $action['status'] }}
            </p>
        </div>
        <hr>
        <a id="btnNewRankings" type="button" role="button" class="btn btn-success btn-sm" href="/rankings/new">
            Rank Your Belief Factors
        </a>
    </div>
@endsection
