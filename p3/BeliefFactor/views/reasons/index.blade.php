@extends('templates/master')

@section('title')
    All Reasons
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Reasons</h2>
    <div class="container">
        <div id="reason-index">
            @foreach ($reasons as $reason)
                <div class='reason-name'>
                    <a class="reason-link list-all-header link-secondary" href='/reason?id={{ $reason['id'] }}'>
                        <div>
                            <div>{{ $reason['because'] }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
