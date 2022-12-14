@extends('templates/master')

@section('title')
    {{ $rankings['name'] }}
@endsection

@section('content')
    <div class='container'>
        <div id='rankings-show'>
            <h1><u>Rankings</u></h1>
            <h2 display-6>Goal: {{ $rankings['goal_name'] }}</h2>
            @if (!empty($rankings['action_name']))
                <h3> Action: {{ $rankings['action_name'] }}</h3>
            @endif
            <p class='rankings-possible'>
                It's <strong>POSSIBLE</strong>
                @if (!empty($rankings['action_name']))
                    to take the action of <u> {{ $rankings['action_name'] }} </u> in order
                @endif
                to achieve my goal of: <u> {{ $rankings['goal_name'] }} </u>:&nbsp;<strong> {{ $rankings['possible'] }}
                </strong>
            </p>
            <p class='rankings-desirable'>
                I <strong>WANT</strong> to
                @if (!empty($rankings['action_name']))
                    take the action of <u> {{ $rankings['action_name'] }} </u>
                    in order to
                @endif
                achieve the goal of <u>{{ $rankings['goal_name'] }}</u>: &nbsp;<strong>{{ $rankings['desirable'] }}</strong>
            </p>
            <p class='rankings-worth_it'>
                It's <strong>WORTH</strong> doing what it will take
                @if (!empty($rankings['action_name']))
                    to <u> {{ $rankings['action_name'] }} </u>
                @endif
                in order to achieve the goal of <u>{{ $rankings['goal_name'] }}</u>:
                &nbsp;<strong>{{ $rankings['worth_it'] }}</strong>
            </p>
            <p class='ranking-appropriate_ecological'>
                @if (!empty($rankings['action_name']))
                    <u> {{ $rankings['action_name'] }} </u> to achieve
                @endif
                the goal of <u> {{ $rankings['goal_name'] }} </u>
                is <strong>APPROPRIATE and
                    ECOLOGICAL:</strong><strong>&nbsp; {{ $rankings['appropriate_ecological'] }}</strong>
            <p class='rankings-capable'>
                I am <strong>CAPABLE OF </strong>
                @if (!empty($rankings['action_name']))
                    <u> {{ $rankings['action_name'] }} </u> and
                @endif
                achieving my goal to <u> {{ $rankings['goal_name'] }} </u>:
                &nbsp;<strong>{{ $rankings['capable'] }}</strong>
            </p>
            <p class='rankings-responsible'>
                I am <strong>RESPONSIBLE:</strong> for
                @if (!empty($rankings['action_name']))
                    <u> {{ $rankings['action_name'] }} </u>
                @endif
                making this goal of <u> {{ $rankings['goal_name'] }} </u> happen: &nbsp;
                <strong> {{ $rankings['responsible'] }}
                </strong>
            </p>
            <p class='rankings-ok'>
                It is completely <strong>OK</strong> for me
                @if (!empty($rankings['action_name']))
                    to <u> {{ $rankings['action_name'] }} </u> in order to
                @endif
                to achieve my goal of <u> {{ $rankings['goal_name'] }} </u>: &nbsp;<strong>{{ $rankings['ok'] }} </strong>
            </p>
            <p class='rankings-deserve'>
                I absolutely <strong>DESERVE</strong>
                @if (!empty($rankings['action_name']))
                    to <u> {{ $rankings['action_name'] }} </u> in order to
                @endif
                <u> {{ $rankings['goal_name'] }} </u>: &nbsp;<strong>{{ $rankings['deserve'] }}</strong>
            </p>
            <p class='rankings-willing'>
                I am totally <strong>WILLING</strong> to do whatever it takes
                @if (!empty($rankings['action_name']))
                    to <u> {{ $rankings['action_name'] }} </u> in order to
                @endif
                to achieve <u> {{ $rankings['goal_name'] }} </u>: &nbsp;<strong> {{ $rankings['willing'] }} </strong>
            </p>
            <p class='rankings-ready'>
                I am <strong>READY</strong> to
                @if (!empty($rankings['action_name']))
                    <u> {{ $rankings['action_name'] }} </u> in order to
                @endif
                reach my goal of <u> {{ $rankings['goal_name'] }} </u>: &nbsp;<strong>{{ $rankings['ready'] }}</strong>
            </p>
            <p class='rankings-imagine'>
                I can vividly <strong>IMAGINE</strong>
                @if (!empty($rankings['action_name']))
                    <u> {{ $rankings['action_name'] }} </u> and
                @endif
                having <u> {{ $rankings['goal_name'] }} </u>: &nbsp;<strong>{{ $rankings['imagine'] }}</strong>
            </p>
            <p class='rankings-allow_self'>
                I fully <strong>ALLOW MYSELF</strong> to
                @if (!empty($rankings['action_name']))
                    <u> {{ $rankings['action_name'] }} </u> and
                @endif
                successfully reach my goal of <u> {{ $rankings['goal_name'] }} </u>:
                &nbsp;<strong>{{ $rankings['allow_self'] }}</strong>
            </p>

        </div>
        <hr>
        <a id="btnNewReasons" type="button" role="button" class="btn btn-success btn-sm" href="/reasons/new">
            <strong>Strengthen Your Belief Factors</strong>
        </a>
    </div>
@endsection
