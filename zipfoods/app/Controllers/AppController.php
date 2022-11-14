<?php

namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        return $this->app->view('index');
    }

    /**
     * This method is triggered by the route "/contact"
     */
    public function contact()
    {
        return $this->app->view('contact', [
            'email' => 'support@zipfoods.com'
        ]);
    }

    /**
     * This method is triggered by the route "/about"
     */
    public function about()
    {
        return $this->app->view('about');
    }
}