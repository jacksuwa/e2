<?php

namespace App\Commands;;

class ExampleCommand extends Command
{
    public function run()
    {
        dump('It works! You invoked your first command. :)');
    }

    public function migrate()
    {
        $this->app->db()->createTable('coupons', [

            'code' => 'varchar(255)',

            'discount' => 'decimal(10,2)',

            'expiration' => 'timestamp'

        ]);
        dump('this ran');
    }
}