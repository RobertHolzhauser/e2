<?php

namespace App\Commands;

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
            'target_date' => 'date',
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
}