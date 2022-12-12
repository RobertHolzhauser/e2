@extends('templates/master')

@section('title')
    New Goal
@endsection

@section('content')
    @if ($goalSaved)
        <div test='goal-added-confirmation' class='alert alert-success'>Thank you, your goal was added! <a
                href='/goal?id={{ $goal_id }}'>You
                can view it here...</a></div>
    @endif

    @if ($app->errorsExist())
        <div test='validation-errors-alert-goals' class='alert alert-danger'>Please correct the errors below.</div>
    @endif

    <h2 class="list-all-header text-center">New Goal</h2>
    <form id="new-goal-form" method='POST' action='/goals/save'>
        <div class="row" id="goalButtonsRow">
            <div class="mx-auto pt-5 pb-4">
                <button id="btnSaveGoal" type="submit" role="button" class="btn btn-success btn-sm side-button">
                    Save Goal
                </button>
            </div>
        </div>
        <div style="padding-left:10px;">
            <div class="container-fluid">

                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label test='goal-name-label' for="name" class="form-label">Goal</label>
                            <input test='goal-name-input' type="text" class="form-control" id="name" name="name"
                                aria-label="input goal name" placeholder="What is your goal?"
                                value='{{ $app->old('name') }}'>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="description" class="form-label">Detailed Description</label>
                            <textarea test='goal-description-input' class="form-control" id="description" name='description' rows="3"
                                value='{{ $app->old('description') }}'
                                placeholder="Provide a detailed description of your goal.  What will you see, hear, and feel when you're experiencing having this goal?  What will it be like?"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="purpose" class="form-label">Purpose</label>
                            <textarea class="form-control" id="purpose" name="purpose" rows="3" value='{{ $app->old('purpose') }}'
                                placeholder="What are your reasons for wanting to achieve this goal?  What are the beneficial long term effects this will create?  For what purpose do you want this?  What will this do for you, get for you, or allow you to do? Why do you want this?  What's important about this? What does this goal make possible?"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
