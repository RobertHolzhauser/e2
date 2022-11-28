@extends('templates/master')

@section('title')
    All Reasons
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Reasons</h2>
    <div id="reason-index">
        @foreach ($reasons as $reason)
            <a class="reason-link list-all-header" href='/reason?id={{ $reason['id'] }}'>
                <div>
                    <div class='reason-name'>{{ $audit['name'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
