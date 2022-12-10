<?php

namespace App\Controllers;

class UsersController extends Controller
{
    /**
     * This method is triggered by the route "/users"
     */
    public function index()
    {
        $users = $this->app->db()->all('users');

        return $this->app->view('users/index', ['users' => $users]);
    }

    /**
     * triggered by users/missing
     */
    public function missing()
    {
        return $this->app->view('users/missing', []);
    }

    /**
     * triggered by /goals/show?id=
     * displays the goal form with goal info.
     */
    public function show()
    {
        $user_id = $this->app->param('id');

        if (is_null($user_id)) {
            $this->app->redirect('/users');
        }

        $user = $this->app->db()->findById('users', $user_id);

        if (empty($user)) {
            return $this->app->redirect('/users/missing');
        }

        /*
        $goals = $this->app->db()->findByColumn('goals', 'user_id', '=', $user_id);
        $actions = $this->app->db()->findByColumn('actions', 'user_id', '=', $user_id);
        // TODO del dump($actions);
        $rankings = $this->app->db()->findByColumn('rankings', 'user_id', '=', $user_id);
        // TODO del dump($rankings);

        $reasons = $this->app->db()->findByColumn('reasons', 'user_id', '=', $user_id);
        // TODO del dump($reasons);
        */

        return $this->app->view('users/show', [
            'user' => $user
            /* 'goals' => $goals,
            'actions' => $actions,
            'rankings' => $rankings,
            'reasons' => $reasons
            */
        ]);
    }
}