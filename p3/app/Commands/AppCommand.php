<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'varchar(14)',
            'computer' => 'varchar(14)',
            'result' => 'varchar(44)',
            'timestamp' => 'timestamp',
        ]);

        dump('Migration Complete');
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 past rounds
        for ($i = 10; $i > 0; $i--) {
            $moves = ['rock', 'paper', 'scissors'];
            $computer = $moves[rand(0, 2)];
            $choice = $moves[rand(0, 2)];


            if ($choice == $computer) {
                $result = 'tie';
            } else if ($choice == 'rock') {
                $result = ($computer == 'paper') ? 'lost' : 'Won';
            } else if ($choice == 'paper') {
                $result = ($computer == 'scissors') ? 'lost' : 'won';
            } else if ($choice == 'scissors') {
                $result = ($computer == 'rock') ? 'lost' : 'won';
            }


            # Set up a round
            $round = [
                'choice' => $choice,
                'computer' => $computer,
                'result' => $result,
                'timestamp' => $faker->dateTimeBetween('-' . $i . ' days', '-' . $i . ' days')->format('Y-m-d H:i:s')
            ];

            # Insert the round
            $this->app->db()->insert('rounds', $round);
        }

        dump('Seed Complete');
    }
}