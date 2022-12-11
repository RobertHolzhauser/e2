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
        $reasons = $this->app->db()->run('SELECT * FROM vgoal_action_reasons ORDER BY goal_id DESC, action_id DESC, rankings_id DESC, reasons_id DESC');

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
}