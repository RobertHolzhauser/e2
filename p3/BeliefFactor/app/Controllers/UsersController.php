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
}