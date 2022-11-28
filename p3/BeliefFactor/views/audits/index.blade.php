@extends('templates/master')

@section('title')
    All Audits
@endsection

@section('content')
    <h2>All Audits</h2>
    <div id="audit-index">
        @foreach ($audits as $audit)
            <a class="audit-link" href='/audit?id={{ $audit['id'] }}'>
                <div>
                    <div class='audit-name'>{{ $audit['name'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
