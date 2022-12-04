<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('users', [
            'user_name' => 'varchar(100)',
            'first_name' => 'varchar(100)',
            'last_name' => 'varchar(100)',
            'email' => 'varchar(320)',
            'password' => 'varchar(255)',
            'added_on' => 'datetime'
        ]);

        $this->app->db()->createTable('goals', [
            'name' => 'varchar(255)',
            'description' => 'text',
            'user_id' => 'int',
            'target_date' => 'datetime',
            'purpose' => 'text'
        ]);

        $this->app->db()->createTable('actions', [
            'name' => 'varchar(255)',
            'description' => 'text',
            'target_date' => 'date',
            'goal_id' => 'int',
            'user_id' => 'int',
            'status' => 'varchar(25)'
        ]);

        $this->app->db()->createTable('rankings', [
            'user_id' => 'int',
            'goal_id' => 'int',
            'action_id' => 'int',
            'possible'  => 'int',
            'desirable' => 'int',
            'worth_it'  => 'int',
            'appropriate_ecological' => 'int',
            'capable' => 'int',
            'responsible' => 'int',
            'ok' => 'int',
            'deserve' => 'int',
            'willing' => 'int',
            'ready' => 'int',
            'imagine' => 'int',
            'allow_self' => 'int',
        ]);

        # Add default time stamp field.
        $this->app->db()->run('alter table rankings add ranking_date datetime not null default CURRENT_TIMESTAMP');

        $this->app->db()->createTable('reasons', [
            'user_id' => 'int',
            'goal_id' => 'int',
            'action_id' => 'int',
            'ranking_id' => 'int',
            'rank_type' => 'varchar(50)',
            'because' => 'text',
            'therefore' => 'text',
            'after_' => 'text',
            'while_' => 'text',
            'whenever' => 'text',
            'so_that' => 'text',
            'if_' => 'text',
            'although' => 'text',
            'in_the_same_way_that' => 'text',
            'perspective' => 'varchar(255)'
        ]);

        dump('Migration is complete. Check the database for your new tables.');
    }

    # seedData will populate all tables with data
    public function seedData()
    {
        # Instantiate a new instance of the Faker/Factory class
        $faker = Factory::create();

        # Use a loop to create 5 users, with 5 goals each, each goal having some actions, some of the actions having rankings, and some of the rankings having reasons
        for ($i = 0; $i < 5; $i++) {

            # Set up a user
            $user = [
                'user_name' => $faker->lastName() . $faker->state(),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->email,
                'password' => $faker->word,
                'added_on' => $faker->date
            ];

            # Insert the user
            $this->app->db()->insert('users', $user);

            # get the user id for this uers goals, etc.
            $userid_sql = 'SELECT MAX(id) as MaxId FROM users';
            $userid_data = [];
            $user_id_executed = $this->app->db()->run($userid_sql, $userid_data);
            $user_id = $user_id_executed->fetchColumn();

            # Convert the user_id to a string for use in sql string
            $user_id_str = strval($user_id);

            # use loop to create a random number of goals
            $goal_count = rand(0, 20);
            for ($j = 0; $j < $goal_count; $j++) {

                # Set up a goal for the current user
                $goal = [
                    'name' => $faker->words(rand(1, 10), true),
                    'description' => $faker->sentences(rand(1, 5), true),
                    'user_id' => $user_id,
                    'target_date' => $faker->date,
                    'purpose' => $faker->sentences(rand(1, 3), true)
                ];

                $this->app->db()->insert('goals', $goal);

                # get the goal id for this goal, etc.
                $goalid_sql = 'SELECT MAX(id) FROM goals';
                $goalid_data = [];
                $goal_id_executed = $this->app->db()->run($goalid_sql, $goalid_data);
                $goal_id = $goal_id_executed->fetchColumn();

                # randomly create a ranking for the goal - 2/3 probability 
                if (rand(1, 3) <= 2) {

                    # Set up a ranking
                    $ranking = [
                        'user_id' => $user_id,
                        'goal_id' => $goal_id,
                        'possible' => $faker->numberBetween(0, 10),
                        'desirable' => $faker->numberBetween(0, 10),
                        'worth_it' => $faker->numberBetween(0, 10),
                        'appropriate_ecological' => $faker->numberBetween(0, 10),
                        'capable' => $faker->numberBetween(0, 10),
                        'responsible' => $faker->numberBetween(0, 10),
                        'ok' => $faker->numberBetween(0, 10),
                        'deserve' => $faker->numberBetween(0, 10),
                        'willing' => $faker->numberBetween(0, 10),
                        'ready' => $faker->numberBetween(0, 10),
                        'imagine' => $faker->numberBetween(0, 10),
                        'allow_self' => $faker->numberBetween(0, 10)
                    ];

                    # insert the ranking into the rankings table
                    $this->app->db()->insert('rankings', $ranking);

                    # randomly create one or more reasons for the ranking
                    if (rand(1, 3) < 2) {

                        # if we are creating a reason get the ranking_id for this ranking just created, etc.
                        $rankingid_sql = 'SELECT MAX(id) FROM rankings';
                        $rankingid_data = [];
                        $ranking_id_executed = $this->app->db()->run($rankingid_sql, $rankingid_data);
                        $ranking_id = $ranking_id_executed->fetchColumn();

                        # randomly get a rank type
                        $rank_types = [
                            'possible',
                            'desirable',
                            'worth_it',
                            'appropriate_ecological',
                            'capable',
                            'responsible',
                            'ok',
                            'deserve',
                            'willing',
                            'ready',
                            'imagine',
                            'allow_self'
                        ];
                        $rank_type = $rank_types[rand(0, 11)];


                        # randomly determine how many reasons to generate
                        $reason_count = rand(1, 12);

                        # use a loop to generate the reason
                        for ($l = 0; $l < $reason_count; $l++) {

                            # Set up the reason
                            $reason = [
                                'user_id' => $user_id,
                                'goal_id' => $goal_id,
                                'ranking_id' => $ranking_id,
                                'rank_type' => $rank_type,
                                'because' => $faker->sentences(rand(1, 5), true),
                                'therefore' => $faker->sentences(rand(1, 5), true),
                                'after_' => $faker->sentences(rand(1, 5), true),
                                'while_' => $faker->sentences(rand(1, 5), true),
                                'whenever' => $faker->sentences(rand(1, 5), true),
                                'so_that' => $faker->sentences(rand(1, 5), true),
                                'if_' => $faker->sentences(rand(1, 5), true),
                                'although' => $faker->sentences(rand(1, 5), true),
                                'in_the_same_way_that' => $faker->sentences(rand(1, 5), true),
                                'perspective' => $faker->words(5, true)
                            ];

                            # insert the ranking into the rankings table
                            $this->app->db()->insert('reasons', $reason);
                        }
                    }
                }



                # use a loop to generate a random number of actions for each goal
                $action_count = rand(0, 20);
                for ($k = 0; $k < $action_count; $k++) {

                    # Set up an action for the currrent goal
                    $action = [
                        'name' => $faker->words(rand(1, 10), true),
                        'description' => $faker->sentences(rand(1, 5), true),
                        'target_date' => $faker->date,
                        'status' => $faker->word,
                        'user_id' => $user_id,
                        'goal_id' => $goal_id
                    ];

                    $this->app->db()->insert('actions', $action);

                    # get the goal id for this goal, etc.
                    $actionid_sql = 'SELECT MAX(id) FROM actions';
                    $actionid_data = [];
                    $action_id_executed = $this->app->db()->run($actionid_sql, $actionid_data);
                    $action_id = $action_id_executed->fetchColumn();

                    # Randomly create a ranking for the action 2/3 probability 
                    if (rand(1, 3) <= 2) {

                        # Set up a ranking
                        $ranking = [
                            'user_id' => $user_id,
                            'goal_id' => $goal_id,
                            'action_id' => $action_id,
                            'possible' => $faker->numberBetween(0, 10),
                            'desirable' => $faker->numberBetween(0, 10),
                            'worth_it' => $faker->numberBetween(0, 10),
                            'appropriate_ecological' => $faker->numberBetween(0, 10),
                            'capable' => $faker->numberBetween(0, 10),
                            'responsible' => $faker->numberBetween(0, 10),
                            'ok' => $faker->numberBetween(0, 10),
                            'deserve' => $faker->numberBetween(0, 10),
                            'willing' => $faker->numberBetween(0, 10),
                            'ready' => $faker->numberBetween(0, 10),
                            'imagine' => $faker->numberBetween(0, 10),
                            'allow_self' => $faker->numberBetween(0, 10)
                        ];

                        # insert the ranking into the rankings table
                        $this->app->db()->insert('rankings', $ranking);

                        # randomly create one or more reasons for the ranking
                        if (rand(1, 3) < 2) {

                            # if we are creating a reason get the ranking_id for this ranking just created, etc.
                            $rankingid_sql = 'SELECT MAX(id) FROM rankings';
                            $rankingid_data = [];
                            $ranking_id_executed = $this->app->db()->run($rankingid_sql, $rankingid_data);
                            $ranking_id = $ranking_id_executed->fetchColumn();

                            # randomly get a rank type
                            $rank_types = [
                                'possible',
                                'desirable',
                                'worth_it',
                                'appropriate_ecological',
                                'capable',
                                'responsible',
                                'ok',
                                'deserve',
                                'willing',
                                'ready',
                                'imagine',
                                'allow_self'
                            ];
                            $rank_type = $rank_types[rand(0, 11)];

                            # randomly determine how many reasons to generate
                            $reason_count = rand(1, 12);

                            # use a loop to generate the reason
                            for ($l = 0; $l < $reason_count; $l++) {

                                # Set up the reason
                                $reason = [
                                    'user_id' => $user_id,
                                    'goal_id' => $goal_id,
                                    'action_id' => $action_id,
                                    'ranking_id' => $ranking_id,
                                    'rank_type' => $rank_type,
                                    'because' => $faker->sentences(rand(1, 5), true),
                                    'therefore' => $faker->sentences(rand(1, 5), true),
                                    'after_' => $faker->sentences(rand(1, 5), true),
                                    'while_' => $faker->sentences(rand(1, 5), true),
                                    'whenever' => $faker->sentences(rand(1, 5), true),
                                    'so_that' => $faker->sentences(rand(1, 5), true),
                                    'if_' => $faker->sentences(rand(1, 5), true),
                                    'although' => $faker->sentences(rand(1, 5), true),
                                    'in_the_same_way_that' => $faker->sentences(rand(1, 5), true),
                                    'perspective' => $faker->words(5, true)
                                ];

                                # insert the ranking into the rankings table
                                $this->app->db()->insert('reasons', $reason);
                            }
                        }
                    }
                }
            }
        }
        dump("The database has been seeded with sample data.");
    }
}