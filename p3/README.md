# Project 3
+ By: Jackson Uwadiae
+ URL: http://e2p3.jacksuw.me/

## Graduate requirement
*x one of the following:*
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
n/a

## Notes for instructor
n/a

## Codeception testing output
```
Codeception PHP Testing Framework v4.1.23
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (4) ------------------------------------------------------------------------------------------------------------------------------------
P3Cest: Page loads
Signature: P3Cest:pageLoads
Test: tests/acceptance/P3Cest.php:pageLoads
Scenario --
 I am on page "/"
 I see in title "Rock, Paper, Scissors"
 I see "Instructions"
 PASSED 

P3Cest: Game play
Signature: P3Cest:gamePlay
Test: tests/acceptance/P3Cest.php:gamePlay
Scenario --
 I am on page "/"
 I fill field "[test=rock-radio]","rock"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=player-choice]"
 I grab text from "[test=computer-choice]"
 Player choose: rock
 Computer choose: paper
 I see element "[test=lost-output]"
 PASSED 

P3Cest: Shows history and round details
Signature: P3Cest:showsHistoryAndRoundDetails
Test: tests/acceptance/P3Cest.php:showsHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,11
 I grab text from "[test=round-link]"
 I click "2021-12-14 15:43:04"
 I see "2021-12-14 15:43:04"
 PASSED 

P3Cest: Validate form
Signature: P3Cest:validateForm
Test: tests/acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=validation-output]"
 PASSED 

---------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.511, Memory: 12.00 MB

OK (4 tests, 8 assertions)

```