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
        $goal_id = $this->app->param('id');

        if (is_null($goal_id)) {
            $this->app->redirect('/goals');
        }

        $goal = $this->app->db()->findById('goals', $goal_id);

        if (empty($goal)) {
            return $this->app->redirect('/goals/missing');
        }

        $actions = $this->app->db()->findByColumn('actions', 'goal_id', '=', $goal_id);
        // TODO del dump($actions);
        $rankings = $this->app->db()->findByColumn('rankings', 'goal_id', '=', $goal_id);
        // TODO del dump($rankings);

        $reasons = $this->app->db()->findByColumn('reasons', 'goal_id', '=', $goal_id);
        // TODO del dump($reasons);

        return $this->app->view('goals/show', [
            'goal' => $goal,
            'actions' => $actions,
            'rankings' => $rankings,
            'reasons' => $reasons
        ]);
    }

    public function missing()
    {
        return $this->app->view('goals/missing', []);
    }
}