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
        <div class="row">

            <h3>The Process &nbsp;&nbsp;&nbsp;<a id="btnNewGoal" type="button" role="button" class="btn btn-success btn-sm"
                    href="/goals/new">
                    <strong>Get Started Now</strong></a>
                </span>
            </h3>

        </div>
        <ol>
            <li>Create a goal for yourself.</li>
            <li>Define an action plan to accomplish your goal.</li>
            <li>Assess your goal and each of the actions (aka sub - goals) according to the 11 Belief Factors.</li>
            <li>Discover your Reasons to strengthen any belief factors that are less than optimum. </li>
        </ol>
        <hr>
        <div class="row">
            <h3>Instructions:</h3>
            <ol>
                <li>Click Here to Create a Goal --> <a id="btnNewGoal" type="button" role="button"
                        class="btn btn-success btn-sm" href="/goals/new">
                        <strong>Get Started Now</strong></a>
                </li>
                <li style="margin-top:.5rem;">Click Here to Create an An Action --><a id="btnNewAction" type="button"
                        role="button" class="btn btn-success btn-sm" href="/actions/new">
                        <strong>New Action</strong></a>
                </li>
                <li style="margin-top:.5rem;">Click Here to Rank your Goal and Action according to the 11 Belief Factors -->
                    <a id="btnNewRankings" type="button" role="button" class="btn btn-success btn-sm"
                        href="/rankings/new">
                        <strong>New Rankings</strong>
                    </a>
                </li>
                <li style="margin-top:.5rem;">
                    Click Here to Discover Empowering Reasons to Strengthen Your Belief Factors -->
                    <a id="btnNewReasons" type="button" role="button" class="btn btn-success btn-sm" href="/reasons/new">
                        <strong>New Reasons</strong>
                    </a>
                </li>
            </ol>
        </div>
    </div>
@endsection
