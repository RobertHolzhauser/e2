@extends('templates/master')

@section('title')
    New Goal
@endsection

@section('content')
    <h2 class="list-all-header text-center">New Goal</h2>
    <!--<div id="gsidebar" class="sidebar">-->
    <div class="row" id="goalButtonsRow">
        <div class="mx-auto pt-5 pb-4">
            <a id="btnSaveGoal" type="button" role="button" class="btn btn-success btn-sm side-button" href="/goals/save">
                Save Goal
            </a>
            <a id="btnAddAction" type="button" role="button" class="btn btn-success btn-sm side-button"
                href="/actions/new"> Add Action
            </a>
            <a id="btnAddGoalRanking" type="button" role="button" class="btn btn-success btn-sm side-button"
                href="/rankings/new"> Add Rankings
            </a>
            <a id="btnAddGoalReasons" type="button" role="button" class="btn btn-success btn-sm side-button"
                href="/reasons/new"> Add Reasons
            </a>
        </div>
    </div>
    <!--</div>-->
    <div style="padding-left:10px;">
        <div class="container-fluid">
            <form>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="newGoalname" class="form-label">Goal Name</label>
                            <input type="text" class="form-control" id="newGoalName" aria-label="input goal name"
                                placeholder="What is your goal?">
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="newGoalDescription" class="form-label">Detailed Description</label>
                            <textarea class="form-control" id="newGoalDescription" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
