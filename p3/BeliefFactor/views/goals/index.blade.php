@extends('templates/master')

@section('title')
    All Goals
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Goals</h2>
    <div class="container">
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
                            <th scope="row">{{ $goal['id'] }}</th>
                            <td>{{ $goal['name'] }}</td>
                            <td>{{ $goal['description'] }}</td>
                            <td>{{ $goal['purpose'] }}</td>
                            <td> <a class="bi bi-trash" href="/goals/delete/"></a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
