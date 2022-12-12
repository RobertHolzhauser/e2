<?php

namespace App\Controllers;

use App\Ranking;

class RankingsController extends Controller
{
    /**
     * This method is triggered by the route "/rankings"
     */
    public function index()
    {
        $rankings = $this->app->db()->run('SELECT * FROM vgoal_action_rankings ORDER BY rankings_id DESC');

        return $this->app->view('rankings/index', ['rankings' => $rankings]);
    }

    /**
     * This method is triggered by the route "/ranking?id=123"
     */
    public function show()
    {
        $rankings_id = $this->app->param('id');

        if (is_null($rankings_id)) {
            $this->app->redirect('/rankings');
        }

        $rankingsQuery = $this->app->db()->findByColumn('vgoal_action_rankings', 'rankings_id', '=', $rankings_id);

        if (empty($rankingsQuery)) {
            return $this->app->redirect('/rankings/missing');
        } else {
            $rankings = $rankingsQuery[0];
        }

        return $this->app->view('rankings/show', [
            'rankings' => $rankings
        ]);
    }

    public function missing()
    {
        return $this->app->view('rankings/missing', []);
    }

    /**
     * This method is triggered by the route "/rankings/new => "
     */
    public function new()
    {
        $goals_query = $this->app->db()->run('SELECT id, name FROM goals');   # retrieve a list of goals for use in drop down list
        $goals = $goals_query->fetchAll();

        $rankingsSaved = $this->app->old('rankingsSaved');
        return $this->app->view('rankings/new', [
            'rankingsSaved' => $rankingsSaved,
            'rankings_id' => $this->app->old('rankings_id'),
            'rankings' => $this->app->old('rankings'),
            'goals' => $goals
        ]);
    }
}