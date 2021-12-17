<?php

namespace App\Controllers;

class AppController extends Controller
{

    public function index()
    {
        $choice = $this->app->old('choice');
        $computer = $this->app->old('computer');
        $result = $this->app->old('result');

        return $this->app->view('index', [
            'choice' => $choice,
            'computer' => $computer,
            'result' => $result
        ]);
    }
    /**
     * This method is triggered by the route "/"
     */
    public function process()
    {
        $this->app->validate([
            'choice' => 'required'

        ]);

        $choice = $this->app->input('choice');
        $moves = ['rock', 'paper', 'scissors'];
        $computer = $moves[rand(0, 2)];

        if ($choice == $computer) {
            $result = 'tie';
        } else if ($choice == 'rock') {
            $result = ($computer == 'paper') ? 'lost' : 'won';
        } else if ($choice == 'paper') {
            $result = ($computer == 'scissors') ? 'lost' : 'won';
        } else if ($choice == 'scissors') {
            $result = ($computer == 'rock') ? 'lost' : 'won';
        }

        $this->app->db()->insert('rounds', [
            'choice' => $choice,
            'computer' => $computer,
            'result' => $result,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect('/', ['choice' => $choice, 'computer' => $computer, 'result' => $result]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');

        $winCount = 0;
        $tieCount = 0;
        $lostCount = 0;
        $count = 0;

        foreach ($rounds as $round) {
            if ($round['result'] == 'won') {
                $winCount++;
            } elseif ($round['result'] == 'tie') {
                $tieCount++;
            } else {
                $lostCount++;
            }
        }

        $count = $winCount + $tieCount + $lostCount;
        $winPercent = $winCount / $count;
        $percentFormated = number_format($winPercent * 100, 2) . '%';


        return $this->app->view('history', [
            'rounds' => $rounds,
            'winCount' => $winCount,
            'tieCount' => $tieCount,
            'lostCount' => $lostCount,
            'count' => $count,
            'percentFormated' => $percentFormated,
        ]);
    }

    public function round()
    {
        $this->app->validate([
            'id' => 'required',
        ]);

        $id = $this->app->param('id');
        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', ['round' => ($round)]);
    }
}