@extends('templates/master')

@section('title')
    {{ $user['user_name'] }}
@endsection

@section('content')
    <div class='container'>
        <div id='user-show'>
            <h1><u>User</u></h1>
            <h2 display-6>{{ $user['user_name'] }}</h2>

            <p class='user-first-name'>
                <strong>First Name:</strong> {{ $user['first_name'] }}
            </p>

            <p class='user-last-name'>
                <strong>Last Name:</strong> {{ $user['last_name'] }}
            </p>

            <p class='user-email'>
                <strong>Email:</strong> {{ $user['email'] }}
            </p>

            <p class='user-added-on'>
                <strong>Member Since:</strong> {{ $user['added_on'] }}
            </p>
        </div>
        <hr>
    </div>
@endsection
