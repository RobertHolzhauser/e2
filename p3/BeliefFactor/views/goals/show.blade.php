@extends('templates/master')

@section('title')
    {{ $goal['name'] }}
@endsection

@section('content')
    <div class='container'>
        <div id='goal-show'>
            <h1><u>Goal</u></h1>
            <h2 display-6>{{ $goal['name'] }}</h2>

            <p class='goal-description'>
                <strong>Description:</strong> {{ $goal['description'] }}
            </p>

            <p class='goal-purpose'>
                <strong>Purpose:</strong> {{ $goal['purpose'] }}
            </p>

        </div>
        <hr>

        <h2 class="list-all-header text-center"><u>Action Plan</u></h2>

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
            <a id="btnNewAction" type="button" role="button" class="btn btn-success btn-sm" href="/actions/new">
                New Action</a>
        </div>
    @endsection
