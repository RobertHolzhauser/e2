<?php

namespace App\Controllers;

use App\Audit;

class ReasonsController extends Controller
{
    /**
     * This method is triggered by the route "/reasons"
     */
    public function index()
    {
        $reasons = $this->app->db()->run('SELECT * FROM vgoal_action_reasons ORDER BY reasons_id DESC');

        return $this->app->view('reasons/index', ['reasons' => $reasons]);
    }

    /**
     * This method is triggered by the route "/reason?id=123"
     */
    public function show()
    {
        $reasons_id = $this->app->param('id');

        if (is_null($reasons_id)) {
            $this->app->redirect('/reasons');
        }

        $reasonsQuery = $this->app->db()->findByColumn('vgoal_action_reasons', 'reasons_id', '=', $reasons_id);

        if (empty($reasonsQuery)) {
            return $this->app->redirect('/reasons/missing');
        } else {
            $reasons = $reasonsQuery[0];
        }

        return $this->app->view('reasons/show', [
            'reasons' => $reasons
        ]);
    }

    /**
     * This method is triggered by the route "reasons/missing"
     */
    public function missing()
    {
        return $this->app->view('reasons/missing', []);
    }

    /**
     * This method is triggered by the route "/reasons/new => "
     */
    public function new()
    {
        $goals_query = $this->app->db()->run('SELECT id, name FROM goals');   # retrieve a list of goals for use in drop down list
        $goals = $goals_query->fetchAll();
        $g_cnt = count($goals);                                                 # find the count of goals

        $actions_query = $this->app->db()->run('SELECT id, name FROM actions');   # retrieve a list of actions for use in drop down list
        $actions = $actions_query->fetchAll();
        $a_cnt = count($actions);

        $reasonsSaved = $this->app->old('reasonsSaved');
        return $this->app->view('reasons/new', [
            'reasonsSaved' => $reasonsSaved,
            'reasons_id' => $this->app->old('reasons_id'),
            'reasons' => $this->app->old('reasons'),
            'goals' => $goals,
            'g_cnt' => $g_cnt,
            'actions' => $actions,
            'a_cnt' => $a_cnt
        ]);
    }

    /***
     * This method is triggered by the route "/reasons/save"
     **/
    public function save()
    {
        $this->app->validate([
            'goal' => 'required',
            "because" => 'required',
            "therefore" => 'required',
            "after_" => 'required',
            "while_" => 'required',
            "whenever" => 'required',
            "so_that" => 'required',
            "if_" => 'required',
            "although" => 'required',
            "in_the_same_way_that" => 'required'
        ]);

        $reasons = $this->app->inputAll();
        $now = getdate();

        $data = [
            "user_id" => 0,
            "goal_id" => $reasons['goal'],
            "action_id" => $reasons['action'],
            "ranking_id" => 0,
            "rank_type" => $reasons["rank_type"],
            "perspective" => $reasons["perspective"],
            "because" => $reasons["because"],
            "therefore" => $reasons["therefore"],
            "after_" => $reasons["after_"],
            "while_" => $reasons["while_"],
            "whenever" => $reasons["whenever"],
            "so_that" => $reasons["so_that"],
            "if_" => $reasons["if_"],
            "although" => $reasons["although"],
            "in_the_same_way_that" => $reasons["in_the_same_way_that"]
        ];

        # insert the rankings
        $reasons_id = $this->app->db()->insert('reasons', $data);

        $this->app->redirect('/reasons/new', [
            'reasonsSaved' => true,
            'reasons_id' => $reasons_id,
            'reasons' => $reasons
        ]);
    }
}