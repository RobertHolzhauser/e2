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
        $g_cnt = count($goals);                                                 # find the count of goals

        $actions_query = $this->app->db()->run('SELECT id, name FROM actions');   # retrieve a list of actions for use in drop down list
        $actions = $actions_query->fetchAll();
        $a_cnt = count($actions);

        $rankingsSaved = $this->app->old('rankingsSaved');
        return $this->app->view('rankings/new', [
            'rankingsSaved' => $rankingsSaved,
            'rankings_id' => $this->app->old('rankings_id'),
            'rankings' => $this->app->old('rankings'),
            'goals' => $goals,
            'g_cnt' => $g_cnt,
            'actions' => $actions,
            'a_cnt' => $a_cnt
        ]);
    }

    /***
     * This method is triggered by the route "/rankings/save"
     **/
    public function save()
    {
        $this->app->validate([
            'goal' => 'required',
            "action" => 'required',
            "possibleCheckbox" => 'required',
            "desirableCheckbox" => 'required',
            "worth-itCheckbox" => 'required',
            "appropriate-ecologicalCheckbox" => 'required',
            "capableCheckbox" => 'required',
            "responsibleCheckbox" => 'required',
            "okCheckbox" => 'required',
            "deserveCheckbox" => 'required',
            "willingCheckbox" => 'required',
            "readyCheckbox" => 'required',
            "imagineCheckbox" => 'required',
            "allowCheckbox" => 'required',
        ]);

        $rankings = $this->app->inputAll();
        $now = getdate();

        $data = [
            "user_id" => 0,
            "goal_id" => $rankings['goal'],
            "action_id" => $rankings['action'],
            "possible" => $rankings["possibleCheckbox"],
            "desirable" => $rankings["desirableCheckbox"],
            "worth_it" => $rankings["worth-itCheckbox"],
            "appropriate_ecological" => $rankings["appropriate-ecologicalCheckbox"],
            "capable" => $rankings["capableCheckbox"],
            "responsible" => $rankings["responsibleCheckbox"],
            "ok" => $rankings["okCheckbox"],
            "deserve" => $rankings["deserveCheckbox"],
            "willing" => $rankings["willingCheckbox"],
            "ready" => $rankings["readyCheckbox"],
            "imagine" => $rankings["imagineCheckbox"],
            "allow_self" => $rankings["allowCheckbox"],
            "ranking_date" => $now['year'] . '-' . $now['mon'] .  '-' . $now['mday'] . ' ' . $now['hours'] . ':' . $now['minutes'] . ':' . $now['seconds']
        ];

        # insert the rankings
        $rankings_id = $this->app->db()->insert('rankings', $data);

        $this->app->redirect('/rankings/new', [
            'rankingsSaved' => true,
            'rankings_id' => $rankings_id,
            'rankings' => $rankings
        ]);
    }
}