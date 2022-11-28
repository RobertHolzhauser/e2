@extends('templates/master')

@section('title')
    All Goals
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Goals</h2>
    <div id="goal-index">
        @foreach ($goals as $goal)
            <a class="goal-link" href='/goal?id={{ $goal['id'] }}'>
                <div>
                    <div class='goal-name'>{{ $goal['name'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
