<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/index' => ['AppController', 'index'],
    '/about'  => ['AppController', 'index'],
    '/goals' => ['GoalsController', 'index'],
    '/goals/new' => ['GoalsController', 'new'],
    '/goals/save' => ['GoalsController', 'save'],
    '/goals/missing' => ['GoalsController', 'missing'],
    '/goal' => ['GoalsController', 'show'],
    '/actions' => ['ActionsController', 'index'],
    '/action' => ['ActionsController', 'show'],
    '/actions/missing' => ['ActionsController','missing'],
    '/rankings' => ['RankingsController', 'index'],
    '/ranking' => ['RankingsController', 'show'],
    '/reasons' => ['ReasonsController', 'index'],
    '/reason' => ['ReasonsController', 'show'],
    '/search' => ['SearchController', 'index'],
    '/users' => ['UsersController', 'index']
];