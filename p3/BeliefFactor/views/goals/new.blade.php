@extends('templates/master')

@section('title')
    New Goal
@endsection

@section('content')
    <h2 class="list-all-header text-center">New Goal</h2>
    <form id="new-goal-form" method='POST' action='/goals/save'>
        <div class="row" id="goalButtonsRow">
            <div class="mx-auto pt-5 pb-4">
                <a id="btnSaveGoal" type="submit" role="button" class="btn btn-success btn-sm side-button"
                    href="/goals/save">
                    Save Goal
                </a>
            </div>
        </div>
        <div style="padding-left:10px;">
            <div class="container-fluid">

                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="newGoalname" class="form-label">Goal</label>
                            <input type="text" class="form-control" id="newGoalName" aria-label="input goal name"
                                placeholder="What is your goal?">
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="newGoalDescription" class="form-label">Detailed Description</label>
                            <textarea class="form-control" id="newGoalDescription" rows="3"
                                placeholder="Provide a detailed description of your goal.  What will you see, hear, and feel when you're experiencing having this goal?  What will it be like?"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="newGoalPurpose" class="form-label">Purpose</label>
                            <textarea class="form-control" id="newGoalPurpose" rows="3"
                                placeholder="What are your reasons for wanting to achieve this goal?  What are the beneficial long term effects this will create?  For what purpose do you want this?  What will this do for you, get for you, or allow you to do? Why do you want this?  What's important about this? What does this goal make possible?"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
