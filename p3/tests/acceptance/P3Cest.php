<?php

class P3Cest
{

    public function pageLoads(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        # Assert the correct title is set on home page
        $I->seeInTitle('Rock, Paper, Scissors');
        # Assert the existence of certain text on home page
        $I->see('Instructions');
    }

    public function gamePlay(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=rock-radio]', 'rock');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');

        #remember message needs to be modified.
        $choice = $I->grabTextFrom('[test=player-choice]');
        $computer =  $I->grabTextFrom('[test=computer-choice]');

        $I->comment('Player choose: ' . $choice);
        $I->comment('Computer choose: ' . $computer);


        if ($choice == $computer) {
            $I->seeElement('[test=tie-output]');
        } elseif ($choice == 'rock') {
            ($computer == 'paper') ?  $I->seeElement('[test=lost-output]') :
                $I->seeElement('[test=won-output]');
        }
    }

    public function showsHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }

    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=validation-output]');
    }
}