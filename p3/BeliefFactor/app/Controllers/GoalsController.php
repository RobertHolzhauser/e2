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
        dump('1');
        $goal = $this->app->inputAll();
        dump($goal);

        # inserting partial data 
        // $sql_insert = 'INSERT INTO goals (name, description, purpose) VALUES (:name, :description,:purpose)';
        // $data = [
        //     'name' => $goal['name'],
        //     'description' => $goal['description'],
        //     'purpose' => $goal['purpose']
        // ];
        // $this->app->db()->run($sql_insert, $data);

        // $goal_id = $this->app->db()->run('SELECT MAX(id) as goal_id FROM goals');   # most likely this will be accurate

        $this->app->redirect('goals/new', [
            'goalSaved' => true
            // 'goal_id' => $goal_id,
            // 'goal' => $goal
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