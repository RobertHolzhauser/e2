@extends('templates/master')

@section('title')
    All Goals
@endsection

@section('content')
    <h2 test="all-goals-header" class="list-all-header text-center">All Goals</h2>
    <div class="wrapper">
        <div id="gsidebar" class="sidebar">
            <div class="row" id="divCalc">
                <div class="mx-auto pt-5 pb-4">
                    <a id="btnNewGoal" type="button" role="button" class="btn btn-success btn-sm side-button"
                        href="/goals/new">
                        New Goal</a>
                </div>
            </div>
        </div>
        <div style="padding-left:10px;">
            <div class="container-fluid">
                <div id="goal-index">
                    <table class="table table-striped table-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Goal</th>
                                <th scope="col">Description</th>
                                <th scope="col">Purpose</th>
                                <th scope="col">Edit / Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($goals as $goal)
                                <tr>
                                    <th scope="row"><a class="goal-link"
                                            href='/goal?id={{ $goal['id'] }}'>{{ $goal['id'] }}</a></th>
                                    <td>{{ $goal['name'] }}</td>
                                    <td>{{ $goal['description'] }}</td>
                                    <td>{{ $goal['purpose'] }}</td>
                                    <td>
                                        <a class="bi bi-clipboard" href="/goals/edit/"></a>
                                        <a class="bi bi-trash" href="/goals/delete/"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
