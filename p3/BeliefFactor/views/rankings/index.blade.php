@extends('templates/master')

@section('title')
    All Rankings
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Rankings</h2>
    <div id="ranking-index">
        @foreach ($rankings as $ranking)
            <a class="ranking-link" href='/ranking?id={{ $ranking['id'] }}'>
                <div>
                    <div class='ranking-name link-secondary'>{{ $ranking['possible-int'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
