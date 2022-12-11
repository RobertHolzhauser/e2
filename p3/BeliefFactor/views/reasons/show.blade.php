@extends('templates/master')

@section('title')
    Reasons For {{ $reasons['goal_name'] }}
@endsection

@section('content')
    <div class='container'>
        <div id='reasons-show'>
            <h1><u>Reasons</u></h1>
            <h2 display-6>Goal: {{ $reasons['goal_name'] }}</h2>
            @if (!empty($reasons['action_name']))
                <h3> Action: {{ $reasons['action_name'] }}</h3>
            @endif
            <p class='overall-rankings'>
                Overall Ranking: <strong> {{ $reasons['overall_ranking'] }} </strong>
            </p>
            <p class='rank-type'>
                Rank Type: {{ ucfirst($reasons['rank_type']) }}
            </p>
            @if (!empty($reasons['perspective']))
                <p class='reasons_perspective'>
                    Perspective: {{ $reasons['perspective'] }}
                </p>
            @endif
            <h5> Supporting Reasons </h5>
            <p class='reasons_combined'>
                {{ $reasons['because'] }} &nbsp;&nbsp;{{ $reasons['therefore'] }}&nbsp;&nbsp; {{ $reasons['after_'] }}
                &nbsp;&nbsp; {{ $reasons['while_'] }}&nbsp;&nbsp; {{ $reasons['whenever'] }}&nbsp;&nbsp;
                {{ $reasons['so_that'] }}
                &nbsp;&nbsp; {{ $reasons['if_'] }} &nbsp;&nbsp;{{ $reasons['although'] }}&nbsp;&nbsp;&nbsp;&nbsp;
                {{ $reasons['in_the_same_way_that'] }}
            </p>

        </div>
        <hr>
    </div>
@endsection
