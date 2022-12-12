@extends('templates/master')

@section('title')
    New Rankings
@endsection

@section('content')
    @if ($rankingsSaved)
        <div test='rankings-added-confirmation' class='alert alert-success'>Thank you, your rankings were added! <a
                href='/ranking?id={{ $rankings_id }}'>You
                can view it here...</a></div>
    @endif

    @if ($app->errorsExist())
        <div test='validation-errors-alert-actions' class='alert alert-danger'>Please correct the errors below.</div>
    @endif

    <h2 class="list-all-header text-center">New Rankings</h2>
    <form id="new-rankings-form" method='POST' action='/rankings/save'>
        <div class="row" id="rankingsButtonsRow">
            <div class="mx-auto pt-5 pb-4">
                <button id="btnSaveaction" type="submit" role="button" class="btn btn-success btn-sm side-button">
                    Save Rankings
                </button>
            </div>
        </div>
        <div style="padding-left:10px;">
            <div class="container-fluid">
                <div class="card" style="width: 50rem;">
                    <div class="card-body">
                        {{-- <div class="form-group">
                        <label for="goal" class="col-md-4 control-label">Select a Goal</label>
                        <div class="col-md-6">

                            <select class="form-control" id="goal" name="goal">
                                <option value="">Select a Goal</option>
                                @foreach ($goals as $goal)
                                    <option value="{{ $goal->id }}">{{ $goal->goal }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Choose a Goal</li> {{-- Drop Down List --}}
                            <li class="list-group-item">Select an Action</li> {{-- Drop Down List --}}
                            <li class="list-group-item"><strong>It's Possible&nbsp;&nbsp;</strong>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox1"
                                        name="possibleCheckbox1" value="possible-rank1">
                                    <label class="form-check-label" for="possibleCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox2"
                                        name="possibleCheckbox2" value="possible-rank2">
                                    <label class="form-check-label" for="possibleCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox3"
                                        name="possibleCheckbox3" value="possible-rank3">
                                    <label class="form-check-label" for="possibleCheckbox3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox4"
                                        name="possibleCheckbox4" value="possible-rank4">
                                    <label class="form-check-label" for="possibleCheckbox4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox5"
                                        name="possibleCheckbox5" value="possible-rank5">
                                    <label class="form-check-label" for="possibleCheckbox5">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox6"
                                        name="possibleCheckbox6" value="possible-rank6">
                                    <label class="form-check-label" for="possibleCheckbox6">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox7"
                                        name="possibleCheckbox7" value="possible-rank7">
                                    <label class="form-check-label" for="possibleCheckbox7">7</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox8"
                                        name="possibleCheckbox8" value="possible-rank8">
                                    <label class="form-check-label" for="possibleCheckbox8">8</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox9"
                                        name="possibleCheckbox9" value="possible-rank9">
                                    <label class="form-check-label" for="possibleCheckbox9">9</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="possibleCheckbox10"
                                        name="possibleCheckbox10" value="possible-rank10">
                                    <label class="form-check-label" for="possibleCheckbox10">10</label>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>It's Desirable&nbsp;&nbsp;</strong>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox1"
                                        name="desirableCheckbox1" value="desirable-rank1">
                                    <label class="form-check-label" for="desirableCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox2"
                                        name="desirableCheckbox2" value="desirable-rank2">
                                    <label class="form-check-label" for="desirableCheckbox2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox3"
                                        name="desirableCheckbox3" value="desirable-rank3">
                                    <label class="form-check-label" for="desirableCheckbox3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox4"
                                        name="desirableCheckbox4" value="desirable-rank4">
                                    <label class="form-check-label" for="desirableCheckbox4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox5"
                                        name="desirableCheckbox5" value="desirable-rank5">
                                    <label class="form-check-label" for="desirableCheckbox5">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox6"
                                        name="desirableCheckbox6" value="desirable-rank6">
                                    <label class="form-check-label" for="desirableCheckbox6">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox7"
                                        name="desirableCheckbox7" value="desirable-rank7">
                                    <label class="form-check-label" for="desirableCheckbox7">7</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox8"
                                        name="desirableCheckbox8" value="desirable-rank8">
                                    <label class="form-check-label" for="desirableCheckbox8">8</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox9"
                                        name="desirableCheckbox9" value="desirable-rank9">
                                    <label class="form-check-label" for="desirableCheckbox9">9</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="desirableCheckbox10"
                                        name="desirableCheckbox10" value="desirable-rank10">
                                    <label class="form-check-label" for="desirableCheckbox10">10</label>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>It's Worth It&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>It's Appropriate and Ecological&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I'm Capable of it&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I'm Responsible For it&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>It's OK&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I Deserve it&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I'm Willing&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I'm Ready&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I can vividly Imagine it&nbsp;&nbsp;</strong></li>
                            <li class="list-group-item"><strong>I Allow Myself To&nbsp;&nbsp;</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
