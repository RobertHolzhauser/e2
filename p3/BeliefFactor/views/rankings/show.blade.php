@extends('templates/master')

@section('title')
    {{ $rankings['name'] }}
@endsection

@section('content')
    <div class='container'>
        <div id='rankings-show'>
            <h1><u>Ranking</u></h1>
            <h2 display-6>{{ $rankings['id'] }}</h2>

            <p class='rankings-possible'>
                It's <strong>possible</strong> to achieve this goal:{{ $rankings['possible'] }}
            </p>
            <p class='rankings-desirable'>
                The Goal is <strong>desirable</strong>: {{ $rankings['desirable'] }}
            </p>
            <p class='rankings-worth_it'>
                The Goal is <strong>worth</strong> what it will take to achieve it: {{ $rankings['worth_it'] }}
            </p>
            <p class='ranking-appropriate_ecological'>
                The Goal is <strong>appropriate and ecological</strong> {{ $rankings['appropriate_ecological'] }}
            </p>
            <p class='rankings-capable'>
                I am <strong>capable</strong> of achieving this goal: {{ $rankings['capable'] }}
            </p>
            <p class='rankings-responsible'>
                I am <strong>responsible:</strong> for making this goal happen {{ $rankings['responsible'] }}
            </p>
            <p class='rankings-ok'>
                It is completely <strong>Ok</strong> to achieve this goal. {{ $rankings['ok'] }}
            </p>
            <p class='rankings-deserve'>
                I absolutely <strong>deserve</strong> this goal: {{ $rankings['deserve'] }}
            </p>
            <p class='rankings-willing'>
                I am <strong>willing</strong> to do whatever it takes to achieve this goal:{{ $rankings['willing'] }}
            </p>
            <p class='rankings-ready'>
                I am <strong>Ready</strong> to achieve this goal {{ $rankings['ready'] }}
            </p>
            <p class='rankings-imagine'>
                I can vividly <strong>Imagine</strong> having this goal: {{ $rankings['imagine'] }}
            </p>
            <p class='rankings-allow_self'>
                I fully <strong>Allow</strong> myself to have this goal: {{ $rankings['allow_self'] }}
            </p>

        </div>
        <hr>
    </div>
@endsection
