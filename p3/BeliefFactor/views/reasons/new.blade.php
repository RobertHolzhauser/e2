@extends('templates/master')

@section('title')
    New Reasons
@endsection

@section('content')
    @if ($reasonsSaved)
        <div test='action-added-confirmation' class='alert alert-success'>Thank you, your reasons were added! <a
                href='/reasons?id={{ $reasons_id }}'>You
                can view it here...</a></div>
    @endif

    @if ($app->errorsExist())
        <div test='validation-errors-alert-actions' class='alert alert-danger'>Please correct the errors below.</div>
    @endif

    <h2 class="list-all-header text-center">New Empowering Reasons</h2>
    <form id="new-action-form" method='POST' action='/reasons/save'>
        <div class="row" id="reasonsButtonsRow">
            <div class="mx-auto pt-5 pb-4">
                <button id="btnSaveReasons" type="submit" role="button" class="btn btn-success btn-sm side-button">
                    <strong>Save Reasons</strong>
                </button>
            </div>
        </div>
        <div style="padding-left:10px;">
            <div class="container-fluid">
                <div class="card" style="width: 75rem;">
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="goal" class="col-md-4 control-label"><strong>Goal</strong></label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="goal" name="goal">
                                            <option value="">Select a Goal</option>
                                            @for ($i = 0; $i < $g_cnt; $i++)
                                                <option value="{{ $goals[$i]['id'] }}">{{ $goals[$i]['name'] }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="action" class="col-md-4 control-label"><strong>Action</strong></label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="action" name="action">
                                            <option value="">Select an Action</option>
                                            @for ($i = 0; $i < $a_cnt; $i++)
                                                <option value="{{ $actions[$i]['id'] }}">{{ $actions[$i]['name'] }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <label for="action" class="col-md-4 control-label"><strong>Belief
                                            Factor</strong></label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="rank-type" name="rank-type">
                                            <option value="">Select a Belief Factor</option>
                                            <option value="possible">It is Possible</option>
                                            <option value="desirable">I Want this</option>
                                            <option value="worth_it">It is Worth It</option>
                                            <option value="appropriate_ecological">It is Appropriate and Ecological</option>
                                            <option value="capable">I am Capable</option>
                                            <option value="responsible">I am Responsible</option>
                                            <option value="ok">It is OK</option>
                                            <option value="deserve">I Deserve it</option>
                                            <option value="willing">I am Willing</option>
                                            <option value="ready">I am Ready</option>
                                            <option value="imagine">I can vividly Imagine it</option>
                                            <option value="allow_self">I Allow Myself To</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <label test='reason-perspective-label' for="name" class="form-label">Perspective</label>
                                <input test='reason-perspective-input' type="text" class="form-control" id="perspective"
                                    name="perspective" aria-label="input perspective"
                                    placeholder="From the perspective of ..." value='{{ $app->old('perspective') }}'>

                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="because" class="form-label">Because</label>
                                    <textarea class="form-control" id="because" name="because" rows="2" value='{{ $app->old('because') }}'
                                        placeholder="Because ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="therefore" class="form-label">Therefore</label>
                                    <textarea class="form-control" id="therefore" name="therefore" rows="2" value='{{ $app->old('therefore') }}'
                                        placeholder="Therefore ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="after_" class="form-label">After</label>
                                    <textarea class="form-control" id="after_" name="after_" rows="2" value='{{ $app->old('after_') }}'
                                        placeholder="After ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="while_" class="form-label">While</label>
                                    <textarea class="form-control" id="while_" name="while_" rows="2" value='{{ $app->old('while_') }}'
                                        placeholder="While ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="whenever" class="form-label">Whenever</label>
                                    <textarea class="form-control" id="whenever" name="whenever" rows="2" value='{{ $app->old('whenever') }}'
                                        placeholder="Whenever ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="so_that" class="form-label">So That</label>
                                    <textarea class="form-control" id="so_that" name="so_that" rows="2" value='{{ $app->old('so_that') }}'
                                        placeholder="So that ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="if_" class="form-label">If</label>
                                    <textarea class="form-control" id="if_" name="if_" rows="2" value='{{ $app->old('if_') }}'
                                        placeholder="If ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="although" class="form-label">Although</label>
                                    <textarea class="form-control" id="although" name="although" rows="2" value='{{ $app->old('although') }}'
                                        placeholder="Although ..."></textarea>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mb-3">
                                    <label for="in_the_same_way_that" class="form-label">In The Same Way That</label>
                                    <textarea class="form-control" id="in_the_same_way_that" name="in_the_same_way_that" rows="2"
                                        value='{{ $app->old('in_the_same_way_that') }}' placeholder="In the same way that ..."></textarea>
                                </div>
                            </li>
                        </ul>
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
