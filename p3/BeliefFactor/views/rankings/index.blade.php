@extends('templates/master')

@section('title')
    All Rankings
@endsection

@section('content')
    <h2>All Rankings</h2>
    <div id="ranking-index">
        @foreach ($rankings as $ranking)
            <a class="ranking-link" href='/ranking?id={{ $ranking['id'] }}'>
                <div>
                    <div class='ranking-name'>{{ $ranking['name'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
