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
                <div class="card" style="width: 53rem;">
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
                            <li class="list-group-item"><strong>It's Possible&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleRadio1"
                                            name="possibleRadio" value="1">
                                        <label class="form-radio-label" for="possibleRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox2"
                                            name="possibleCheckbox" value="2">
                                        <label class="form-check-label" for="possibleCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox"
                                            name="possibleCheckbox" value="3">
                                        <label class="form-check-label" for="possibleCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox4"
                                            name="possibleCheckbox" value="4">
                                        <label class="form-check-label" for="possibleCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox5"
                                            name="possibleCheckbox" value="5">
                                        <label class="form-check-label" for="possibleCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox6"
                                            name="possibleCheckbox" value="6">
                                        <label class="form-check-label" for="possibleCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox7"
                                            name="possibleCheckbox" value="7">
                                        <label class="form-check-label" for="possibleCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox8"
                                            name="possibleCheckbox" value="8">
                                        <label class="form-check-label" for="possibleCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox9"
                                            name="possibleCheckbox" value="9">
                                        <label class="form-check-label" for="possibleCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="possibleCheckbox10"
                                            name="possibleCheckbox" value="10">
                                        <label class="form-check-label" for="possibleCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>It's Desirable&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox1"
                                            name="desirableCheckbox" value="desirable-rank1">
                                        <label class="form-check-label" for="desirableCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox2"
                                            name="desirableCheckbox" value="desirable-rank2">
                                        <label class="form-check-label" for="desirableCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox3"
                                            name="desirableCheckbox" value="desirable-rank3">
                                        <label class="form-check-label" for="desirableCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox4"
                                            name="desirableCheckbox" value="desirable-rank4">
                                        <label class="form-check-label" for="desirableCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox5"
                                            name="desirableCheckbox" value="desirable-rank5">
                                        <label class="form-check-label" for="desirableCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox6"
                                            name="desirableCheckbox" value="desirable-rank6">
                                        <label class="form-check-label" for="desirableCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox7"
                                            name="desirableCheckbox" value="desirable-rank7">
                                        <label class="form-check-label" for="desirableCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox8"
                                            name="desirableCheckbox" value="desirable-rank8">
                                        <label class="form-check-label" for="desirableCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox9"
                                            name="desirableCheckbox" value="desirable-rank9">
                                        <label class="form-check-label" for="desirableCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="desirableCheckbox10"
                                            name="desirableCheckbox" value="desirable-rank10">
                                        <label class="form-check-label" for="desirableCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>It's Worth It&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox1"
                                            name="worth-itCheckbox" value="worth-it-rank1">
                                        <label class="form-check-label" for="worth-itCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox2"
                                            name="worth-itCheckbox" value="worth-it-rank2">
                                        <label class="form-check-label" for="worth-itCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox3"
                                            name="worth-itCheckbox" value="worth-it-rank3">
                                        <label class="form-check-label" for="worth-itCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox4"
                                            name="worth-itCheckbox" value="worth-it-rank4">
                                        <label class="form-check-label" for="worth-itCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox5"
                                            name="worth-itCheckbox" value="worth-it-rank5">
                                        <label class="form-check-label" for="worth-itCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox6"
                                            name="worth-itCheckbox" value="worth-it-rank6">
                                        <label class="form-check-label" for="worth-itCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox7"
                                            name="worth-itCheckbox" value="worth-it-rank7">
                                        <label class="form-check-label" for="worth-itCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox8"
                                            name="worth-itCheckbox" value="worth-it-rank8">
                                        <label class="form-check-label" for="worth-itCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox9"
                                            name="worth-itCheckbox" value="worth-it-rank9">
                                        <label class="form-check-label" for="worth-itCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="worth-itCheckbox10"
                                            name="worth-itCheckbox" value="worth-it-rank10">
                                        <label class="form-check-label" for="worth-itCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>It's Appropriate and Ecological&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox1" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank1">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox2" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank2">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox3" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank3">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox4" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank4">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox5" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank5">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox6" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank6">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox7" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank7">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox8" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank8">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox9" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank9">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                            id="appropriate-ecologicalCheckbox10" name="appropriate-ecologicalCheckbox"
                                            value="appropriate-ecological-rank10">
                                        <label class="form-check-label" for="appropriate-ecologicalCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I'm Capable of it&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox1"
                                            name="capableCheckbox" value="capable-rank1">
                                        <label class="form-check-label" for="capableCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox2"
                                            name="capableCheckbox" value="capable-rank2">
                                        <label class="form-check-label" for="capableCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox3"
                                            name="capableCheckbox" value="capable-rank3">
                                        <label class="form-check-label" for="capableCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox4"
                                            name="capableCheckbox" value="capable-rank4">
                                        <label class="form-check-label" for="capableCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox5"
                                            name="capableCheckbox" value="capable-rank5">
                                        <label class="form-check-label" for="capableCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox6"
                                            name="capableCheckbox" value="capable-rank6">
                                        <label class="form-check-label" for="capableCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox7"
                                            name="capableCheckbox" value="capable-rank7">
                                        <label class="form-check-label" for="capableCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox8"
                                            name="capableCheckbox" value="capable-rank8">
                                        <label class="form-check-label" for="capableCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox9"
                                            name="capableCheckbox" value="capable-rank9">
                                        <label class="form-check-label" for="capableCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="capableCheckbox10"
                                            name="capableCheckbox" value="capable-rank10">
                                        <label class="form-check-label" for="capableCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I'm Responsible For it&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox1"
                                            name="responsibleCheckbox" value="responsible-rank1">
                                        <label class="form-check-label" for="responsibleCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox2"
                                            name="responsibleCheckbox" value="responsible-rank2">
                                        <label class="form-check-label" for="responsibleCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox3"
                                            name="responsibleCheckbox" value="responsible-rank3">
                                        <label class="form-check-label" for="responsibleCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox4"
                                            name="responsibleCheckbox" value="responsible-rank4">
                                        <label class="form-check-label" for="responsibleCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox5"
                                            name="responsibleCheckbox" value="responsible-rank5">
                                        <label class="form-check-label" for="responsibleCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox6"
                                            name="responsibleCheckbox" value="responsible-rank6">
                                        <label class="form-check-label" for="responsibleCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox7"
                                            name="responsibleCheckbox" value="responsible-rank7">
                                        <label class="form-check-label" for="responsibleCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox8"
                                            name="responsibleCheckbox" value="responsible-rank8">
                                        <label class="form-check-label" for="responsibleCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox9"
                                            name="responsibleCheckbox" value="responsible-rank9">
                                        <label class="form-check-label" for="responsibleCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="responsibleCheckbox10"
                                            name="responsibleCheckbox" value="responsible-rank10">
                                        <label class="form-check-label" for="responsibleCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>It's OK&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox1"
                                            name="okCheckbox" value="ok-rank1">
                                        <label class="form-check-label" for="okCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox2"
                                            name="okCheckbox" value="ok-rank2">
                                        <label class="form-check-label" for="okCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox3"
                                            name="okCheckbox" value="ok-rank3">
                                        <label class="form-check-label" for="okCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox4"
                                            name="okCheckbox" value="ok-rank4">
                                        <label class="form-check-label" for="okCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox5"
                                            name="okCheckbox" value="ok-rank5">
                                        <label class="form-check-label" for="okCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox6"
                                            name="okCheckbox" value="ok-rank6">
                                        <label class="form-check-label" for="okCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox7"
                                            name="okCheckbox" value="ok-rank7">
                                        <label class="form-check-label" for="okCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox8"
                                            name="okCheckbox" value="ok-rank8">
                                        <label class="form-check-label" for="okCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox9"
                                            name="okCheckbox" value="ok-rank9">
                                        <label class="form-check-label" for="okCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="okCheckbox10"
                                            name="okCheckbox" value="ok-rank10">
                                        <label class="form-check-label" for="okCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I Deserve it&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox1"
                                            name="deserveCheckbox" value="deserve-rank1">
                                        <label class="form-check-label" for="deserveCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox2"
                                            name="deserveCheckbox" value="deserve-rank2">
                                        <label class="form-check-label" for="deserveCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox3"
                                            name="deserveCheckbox" value="deserve-rank3">
                                        <label class="form-check-label" for="deserveCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox4"
                                            name="deserveCheckbox" value="deserve-rank4">
                                        <label class="form-check-label" for="deserveCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox5"
                                            name="deserveCheckbox" value="deserve-rank5">
                                        <label class="form-check-label" for="deserveCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox6"
                                            name="deserveCheckbox" value="deserve-rank6">
                                        <label class="form-check-label" for="deserveCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox7"
                                            name="deserveCheckbox" value="deserve-rank7">
                                        <label class="form-check-label" for="deserveCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox8"
                                            name="deserveCheckbox" value="deserve-rank8">
                                        <label class="form-check-label" for="deserveCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox9"
                                            name="deserveCheckbox" value="deserve-rank9">
                                        <label class="form-check-label" for="deserveCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="deserveCheckbox10"
                                            name="deserveCheckbox" value="deserve-rank10">
                                        <label class="form-check-label" for="deserveCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I'm Willing&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox1"
                                            name="willingCheckbox" value="willing-rank1">
                                        <label class="form-check-label" for="willingCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox2"
                                            name="willingCheckbox" value="willing-rank2">
                                        <label class="form-check-label" for="willingCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox3"
                                            name="willingCheckbox" value="willing-rank3">
                                        <label class="form-check-label" for="willingCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox4"
                                            name="willingCheckbox" value="willing-rank4">
                                        <label class="form-check-label" for="willingCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox5"
                                            name="willingCheckbox" value="willing-rank5">
                                        <label class="form-check-label" for="willingCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox6"
                                            name="willingCheckbox" value="willing-rank6">
                                        <label class="form-check-label" for="willingCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox7"
                                            name="willingCheckbox" value="willing-rank7">
                                        <label class="form-check-label" for="willingCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox8"
                                            name="willingCheckbox" value="willing-rank8">
                                        <label class="form-check-label" for="willingCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox9"
                                            name="willingCheckbox" value="willing-rank9">
                                        <label class="form-check-label" for="willingCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="willingCheckbox10"
                                            name="willingCheckbox" value="willing-rank10">
                                        <label class="form-check-label" for="willingCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I'm Ready&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox1"
                                            name="readyCheckbox" value="ready-rank1">
                                        <label class="form-check-label" for="readyCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox2"
                                            name="readyCheckbox" value="ready-rank2">
                                        <label class="form-check-label" for="readyCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox3"
                                            name="readyCheckbox" value="ready-rank3">
                                        <label class="form-check-label" for="readyCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox4"
                                            name="readyCheckbox" value="ready-rank4">
                                        <label class="form-check-label" for="readyCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox5"
                                            name="readyCheckbox" value="ready-rank5">
                                        <label class="form-check-label" for="readyCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox6"
                                            name="readyCheckbox" value="ready-rank6">
                                        <label class="form-check-label" for="readyCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox7"
                                            name="readyCheckbox" value="ready-rank7">
                                        <label class="form-check-label" for="readyCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox8"
                                            name="readyCheckbox" value="ready-rank8">
                                        <label class="form-check-label" for="readyCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox9"
                                            name="readyCheckbox" value="ready-rank9">
                                        <label class="form-check-label" for="readyCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="readyCheckbox10"
                                            name="readyCheckbox" value="ready-rank10">
                                        <label class="form-check-label" for="readyCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I Can Vividly Imagine it&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox1"
                                            name="imagineCheckbox" value="imagine-rank1">
                                        <label class="form-check-label" for="imagineCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox2"
                                            name="imagineCheckbox" value="imagine-rank2">
                                        <label class="form-check-label" for="imagineCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox3"
                                            name="imagineCheckbox" value="imagine-rank3">
                                        <label class="form-check-label" for="imagineCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox4"
                                            name="imagineCheckbox" value="imagine-rank4">
                                        <label class="form-check-label" for="imagineCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox5"
                                            name="imagineCheckbox" value="imagine-rank5">
                                        <label class="form-check-label" for="imagineCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox6"
                                            name="imagineCheckbox" value="imagine-rank6">
                                        <label class="form-check-label" for="imagineCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox7"
                                            name="imagineCheckbox" value="imagine-rank7">
                                        <label class="form-check-label" for="imagineCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox8"
                                            name="imagineCheckbox" value="imagine-rank8">
                                        <label class="form-check-label" for="imagineCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox9"
                                            name="imagineCheckbox" value="imagine-rank9">
                                        <label class="form-check-label" for="imagineCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="imagineCheckbox10"
                                            name="imagineCheckbox" value="imagine-rank10">
                                        <label class="form-check-label" for="imagineCheckbox10">10</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item"><strong>I Allow Myself To&nbsp;&nbsp;</strong>
                                <div class='btn-group'>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox1"
                                            name="allowCheckbox" value="allow-rank1">
                                        <label class="form-check-label" for="allowCheckbox1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox2"
                                            name="allowCheckbox" value="allow-rank2">
                                        <label class="form-check-label" for="allowCheckbox2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox3"
                                            name="allowCheckbox" value="allow-rank3">
                                        <label class="form-check-label" for="allowCheckbox3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox4"
                                            name="allowCheckbox" value="allow-rank4">
                                        <label class="form-check-label" for="allowCheckbox4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox5"
                                            name="allowCheckbox" value="allow-rank5">
                                        <label class="form-check-label" for="allowCheckbox5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox6"
                                            name="allowCheckbox" value="allow-rank6">
                                        <label class="form-check-label" for="allowCheckbox6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox7"
                                            name="allowCheckbox" value="allow-rank7">
                                        <label class="form-check-label" for="allowCheckbox7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox8"
                                            name="allowCheckbox" value="allow-rank8">
                                        <label class="form-check-label" for="allowCheckbox8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox9"
                                            name="allowCheckbox" value="allow-rank9">
                                        <label class="form-check-label" for="allowCheckbox9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="allowCheckbox10"
                                            name="allowCheckbox" value="allow-rank10">
                                        <label class="form-check-label" for="allowCheckbox10">10</label>
                                    </div>
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
