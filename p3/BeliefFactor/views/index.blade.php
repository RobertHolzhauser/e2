@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')
    <div class="container">
        <h2 classs="list-all-header text-center">Welcome to Belief Factor!</h2>
        <p class="lead">Psychologists Alfred Bandura and Robert Dilts have found that there are specific factors of belief
            that
            empower us to be able to
            efficiently achieve our goals.</p>
        <p>This simple yet powerful process allows you to assess and strengthen these belief factors to keep yourself in
            the optimum frame of mind for goal achievement.</p>
        <ol>
            <li> The goal is possible to achieve. </li>
            <li> The goal is desirable. </li>
            <li> The goal is worth doing what it will take to achieve it.</li>
            <li> The goal is appropriate and ecological. </li>
            <li> You are capable of achieving your goal. </li>
            <li> You are responsible for taking the actions necessary to achieve your goal. </li>
            <li> You deserve to achieve your goal. </li>
            <li> It's ok for you to achieve your goal. </li>
            <li> You are willing to take the actions necessary. </li>
            <li> You're ready to achieve your goal. </li>
            <li> You allow yourself to fully and enduringly have the successful achievement. </li>
        </ol>
        <h3>The Process </h3>
        <ol>
            <li>Create a goal for yourself.</li>
            <li>Define an action plan to accomplish your goal.</li>
            <li>Assess your goal and each of the actions (aka sub - goals) according to the 11 Belief Factors.</li>
            <li>Discover your Reasons to strengthen any belief factors that are less than optimum. </li>
        </ol>
    </div>
@endsection
