<?php

namespace App\Controllers;

use App\Goal;

class GoalsController extends Controller
{
    /**
     * This method is triggered by the route "/goals"
     */
    public function index()
    {
        $goals = $this->app->db()->all('goals');

        return $this->app->view('goals/index', ['goals' => $goals]);
    }

    /**
     * This method is triggered by the route "/goals/new => "
     */
    public function new()
    {
        $goalSaved = $this->app->old('goalSaved');
        return $this->app->view('goals/new', [
            'goalSaved' => $goalSaved
        ]);
    }

    /***
     * This method is triggered by the route "/goals/save"
     **/
    public function save()
    {
        $this->app->validate([
            'name' => 'required',
            'description' => 'required',
            'purpose' => 'required'
        ]);

        $this->app->db()->insert('goals', $this->app->inputAll());

        $this->app->redirect('goals/new', [
            'goalSaved' => true
        ]);
    }

    /**
     * triggered by /goals/show?id=
     * displays the goal form with goal info.
     */
    public function show()
    {
        $id = $this->app->param('id');

        if (is_null($id)) {
            $this->app->redirect('/goals');
        }

        $goalQuery = $this->app->db()->findById('goals', $id);

        if (empty($goalQuery)) {
            return $this->app->redirect('/goals');
        } else {
            $goal = $goalQuery[0];
        }

        $actionsQuery = $this->app->db()->findByColumn('actions', 'goal_id', '=', $id);

        $rankingsQuery = $this->app->db()->findByColumn('rankings', 'goal_id', '=', $id);

        $reasonsQuery = $this->app->db()->findByColumn('reasons', 'goal_id', '=', $id);

        return $this->app->view('goals/show', [
            'goal' => $goal,
            'actions' => $actionsQuery,
            'rankings' => $rankingsQuery,
            'reasons' => $reasonsQuery
        ]);
    }
}