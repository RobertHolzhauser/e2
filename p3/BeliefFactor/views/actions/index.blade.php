@extends('templates/master')

@section('title')
    All Actions
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Actions</h2>
    <div id="actions-index">
        @foreach ($actions as $action)
            <a class="action-link" href='/action?id={{ $action['id'] }}'>
                <div>
                    <div class='action-name'>{{ $action['name'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
