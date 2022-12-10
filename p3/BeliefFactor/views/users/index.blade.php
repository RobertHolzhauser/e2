@extends('templates/master')

@section('title')
    All Users
@endsection

@section('content')
    <h2 class="list-all-header text-center">All Users</h2>
    <div class="container">
        <div id="users-index">
            <table class="table table-striped table-secondary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Added On</th>
                        <th scope="col">Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">
                                <a class="user-link" href='/user?id={{ $user['id'] }}'>{{ $user['id'] }}</a>
                            </th>
                            <td>{{ $user['user_name'] }}</td>
                            <td>{{ $user['first_name'] }}</td>
                            <td>{{ $user['last_name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['added_on'] }}</td>
                            <td>
                                <a class="bi bi-clipboard" href="/users/edit/"></a>
                                <a class="bi bi-trash" href="/users/delete/"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
