@extends('templates/master')

@section('title')
    {{ $goal['name'] }}
@endsection

@section('content')
    @if ($goalSaved)
        <div class="alert alert-success">Your goal is now active.</div>
    @endif

    @if ($app->errorExist())
        <div class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <div id='goal-show'>
        <h2 display-6>{{ $goal['name'] }}</h2>

        <p class='goal-description'>
            {{ $goal['description'] }}
        </p>

        <p class='goal-purpose'>
            {{ $goal['purpose'] }}
        </p>

    </div>
    <hr>
    <div style="padding-left:10px;">
        <div class="container-fluid">
            <div id="goal-action-list">
                <table id="tblgoal-actions-list" class="table table-striped table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Action</th>
                            <th scope="col">Description</th>
                            <th scope="col">Target Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit / Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actions as $action)
                            <tr>
                                <th scope="row"><a class='action-link'
                                        href='/action?id={{ $action['id'] }}'>{{ $action['id'] }}</a></th>
                                <td>{{ $action['name'] }}</td>
                                <td>{{ $action['description'] }}</td>
                                <td>{{ $action['target_date'] }}</td>
                                <td>{{ $action['status'] }}</td>
                                <td>
                                    <a class="bi bi-clipboard" href="/actions/edit/"></a>
                                    <a class="bi bi-trash" href="/actions/delete/"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <hr />
        <h2 class="list-all-header text-center">All Rankings</h2>
        <div id="ranking-index">
            <table id="tblgoal-ranking-list" class="table table-striped table-secondary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Date</th>
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
                            <th scope="row">{{ $ranking['id'] }}</th>
                            <td>{{ $ranking['ranking_date'] }}</td>
                            <td>{{ $ranking['goal_id'] }}</td>
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
    </div>
    {{-- </div> --}}

    <script>
        $(document).ready(function() {
            $('#tblgoal-actions-list').DataTable();
            $('#tblgoal-ranking-list').DataTable();
        });
    </script>
@endsection
