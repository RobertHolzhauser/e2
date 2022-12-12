@extends('templates/master')

@section('title')
    All Rankings
@endsection

@section('content')
    <div style="float: left; margin-left: 10px;">
        <a id="btnNewRankings" type="button" role="button" class="btn btn-success btn-sm" href="/rankings/new">
            New Rankings
        </a>
    </div>
    <h2 class="list-all-header text-center">All Rankings

    </h2>
    <div id="ranking-index">
        <table class="table table-striped table-secondary" style="margin-left: 8px;">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Goal or Action</th>
                    <th scope="col">Possible</th>
                    <th scope="col">Desirable</th>
                    <th scope="col">Worth It</th>
                    <th scope="col">Appropriate & <br> Ecological</th>
                    <th scope="col">Capable</th>
                    <th scope="col">Responsible</th>
                    <th scope="col">Ok</th>
                    <th scope="col">Deserve</th>
                    <th scope="col">Willing</th>
                    <th scope="col">Ready</th>
                    <th scope="col">Imagine</th>
                    <th scope="col">Allow Self</th>
                    <th scope="col">Edit / Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rankings as $ranking)
                    <tr>
                        <th scope="row"><a class="rankings-link"
                                href="/ranking?id={{ $ranking['rankings_id'] }}">{{ $ranking['rankings_id'] }}</a></th>
                        <td>
                            @if (empty($ranking['action_id']))
                                <a test='goal-link' class="goal-link"
                                    href="/goal?id={{ $ranking['goal_id'] }}">{{ $ranking['goal_name'] }} </a>
                            @else
                                <a class='action-link' test='action-link'
                                    href="/action?id={{ $ranking['action_id'] }}">{{ $ranking['action_name'] }}</a>
                            @endif
                        </td>
                        <td>{{ $ranking['possible'] }}</td>
                        <td>{{ $ranking['desirable'] }}</td>
                        <td>{{ $ranking['worth_it'] }}</td>
                        <td>{{ $ranking['appropriate_ecological'] }}</td>
                        <td>{{ $ranking['capable'] }}</td>
                        <td>{{ $ranking['responsible'] }}</td>
                        <td>{{ $ranking['ok'] }}</td>
                        <td>{{ $ranking['deserve'] }}</td>
                        <td>{{ $ranking['willing'] }}</td>
                        <td>{{ $ranking['ready'] }}</td>
                        <td>{{ $ranking['imagine'] }}</td>
                        <td>{{ $ranking['allow_self'] }}</td>
                        <td>
                            <a class="bi bi-clipboard" href="/rankings/edit/"></a>
                            <a class="bi bi-trash" href="/rankings/delete/"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
