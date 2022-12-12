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

    /**
     * This method is triggered by the route "/actions/new => "
     */
    public function new()
    {
        $actionSaved = $this->app->old('actionSaved');
        return $this->app->view('actions/new', [
            'actionSaved' => $actionSaved,
            'action_id' => $this->app->old('action_id'),
            'action' => $this->app->old('action')
        ]);
    }

    /***
     * This method is triggered by the route "/actions/save"
     **/
    public function save()
    {
        $this->app->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        $action = $this->app->inputAll();

        # inserting partial data 
        $sql_insert = 'INSERT INTO actions (name, description, status) VALUES (:name, :description,:status)';
        $data = [
            'name' => $action['name'],
            'description' => $action['description'],
            'purpose' => $action['status']
        ];
        $this->app->db()->run($sql_insert, $data);

        $action_id_query = $this->app->db()->run('SELECT MAX(id) as action_id FROM actions');   # most likely this will be accurate
        $action_id = $action_id_query->fetchAll();
        $a_id = $action_id[0]['action_id'];

        $this->app->redirect('/actions/new', [
            'actionSaved' => true,
            'action_id' => $a_id,
            'action' => $action
        ]);
    }
}