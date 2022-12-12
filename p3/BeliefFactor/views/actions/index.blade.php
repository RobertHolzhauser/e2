@extends('templates/master')

@section('title')
    All Actions
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="list-all-header text-center">All Actions</h2>
            <div {{-- class="mx-auto pt-5 pb-4" --}}>
                <a id="btnNewAction" type="button" role="button" class="btn btn-success btn-sm" href="/actions/new">
                    New Action</a>
            </div>
        </div>

        <div id="actions-index">
            <div class="row">
            </div>
            <table class="table table-striped table-secondary">
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
                            <th scope="row">
                                <a class="action-link" href='/action?id={{ $action['id'] }}'>{{ $action['id'] }}</a>
                            </th>
                            <td>{{ $action['name'] }}</td>
                            <td>{{ $action['description'] }}</td>
                            <td>{{ $action['target_date'] }}</td>
                            <td>{{ $action['status'] }}</td>
                            <td>
                                <a class="bi bi-clipboard" href="/actions/edit/"></a>
                                <a class="bi bi-trash" href="/acions/delete/"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
