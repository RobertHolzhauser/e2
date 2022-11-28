<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/about'  => ['AppController', 'index'],
    '/goals' => ['GoalsController', 'index'],
    '/actions' => ['ActionsController', 'index'],
    '/rankings' => ['RankingsController', 'index'],
    '/audits' => ['AuditsController', 'index'],
    '/search' => ['SearchController', 'index']
];