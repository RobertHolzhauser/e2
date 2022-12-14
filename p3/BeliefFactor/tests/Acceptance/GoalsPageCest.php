<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class GoalsPageCest
{
    /**
     * Test that we can load the goals page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/goals');

        # Assert the correct title is set on the page
        $I->seeInTitle('All Goals');

        # Assert the existence of All Goals  on the page
        $I->see('All Goals');

        # Assert the existence of the new Goal button on the page
        $I->seeElement('#btnNewGoal');

        # Assert new Goal button has the text "New Goal"
        $I->see('New Goal', '#btnNewGoal');

        # Check the existence of the goal table
        $I->seeElement('#goal-table');
    }

    public function clickNewGoalButton(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/goals');
        $I->click('#btnNewGoal');

        # Assert
        $I->amOnPage('/goals/new');
        $I->see('New Goal');
    }
}