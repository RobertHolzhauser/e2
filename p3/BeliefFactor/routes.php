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
    '/actions/missing' => ['ActionsController', 'missing'],
    '/actions/new' => ['ActionsController', 'new'],
    '/actions/save' => ['ActionsController', 'save'],
    '/rankings' => ['RankingsController', 'index'],
    '/rankings/new' => ['RankingsController', 'new'],
    '/ranking' => ['RankingsController', 'show'],
    '/rankings/missing' => ['RankingsController', 'missing'],
    '/reasons' => ['ReasonsController', 'index'],
    '/reasons/new' => ['ReasonsController', 'new'],
    '/reason' => ['ReasonsController', 'show'],
    '/reasons/missing' => ['ReasonsController', 'missing'],
    '/search' => ['SearchController', 'index'],
    '/users' => ['UsersController', 'index'],
    '/usersmissing' => ['UsersController', 'index'],
    '/user' => ['UsersController', 'show']
];