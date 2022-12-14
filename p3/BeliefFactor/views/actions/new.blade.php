@extends('templates/master')

@section('title')
    New Action
@endsection

@section('content')
    @if ($actionSaved)
        <div test='action-added-confirmation' class='alert alert-success'>Thank you, your action was added! <a
                href='/action?id={{ $action_id }}'>You
                can view it here...</a></div>
    @endif

    @if ($app->errorsExist())
        <div test='validation-errors-alert-actions' class='alert alert-danger'>Please correct the errors below.</div>
    @endif

    <h2 class="list-all-header text-center">New Action</h2>
    <form id="new-action-form" method='POST' action='/actions/save'>
        <div class="row" id="actionButtonsRow">
            <div class="mx-auto pt-5 pb-4">
                <button id="btnSaveaction" type="submit" role="button" class="btn btn-success btn-sm side-button">
                    Save Action
                </button>
            </div>
        </div>
        <div style="padding-left:10px;">
            <div class="container-fluid">

                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label test='action-name-label' for="name" class="form-label">Action</label>
                            <input test='action-name-input' type="text" class="form-control" id="name"
                                name="name" aria-label="input action name" placeholder="What is your action?"
                                value='{{ $app->old('name') }}'>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="description" class="form-label">Detailed Description</label>
                            <textarea test='action-description-input' class="form-control" id="description" name='description' rows="3"
                                value='{{ $app->old('description') }}' placeholder="Provide a detailed description of your action."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status (25 characters or less)</label>
                            <textarea class="form-control" id="status" name="status" rows="1" value='{{ $app->old('status') }}'
                                placeholder="What's the status of this action?"></textarea>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
