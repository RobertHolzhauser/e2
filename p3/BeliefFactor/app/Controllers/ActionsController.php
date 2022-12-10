<?php

namespace App\Controllers;

use App\Action;

class ActionsController extends Controller
{
    /**
     * This method is triggered by the route "/actions"
     */
    public function index()
    {
        $actions = $this->app->db()->all('actions');

        return $this->app->view('actions/index', ['actions' => $actions]);
    }

    /**
     * This method is triggered by the route "/action?id=123"
     */
    public function show()
    {
        $action_id = $this->app->param('id');

        if (is_null($action_id)) {
            $this->app->redirect('/actions');
        }

        $action = $this->app->db()->findById('actions', $action_id);

        if (empty($action)) {
            return $this->app->redirect('/actions/missing');
        }

        $rankings = $this->app->db()->findByColumn('rankings', 'action_id', '=', $action_id);

        $reasons = $this->app->db()->findByColumn('reasons', 'action_id', '=', $action_id);

        return $this->app->view('actions/show', [
            'action'  => $action,
            'rankings' => $rankings,
            'reasons' => $reasons
        ]);
    }

    public function missing()
    {
        return $this->app->view('actions/missing', []);
    }
}