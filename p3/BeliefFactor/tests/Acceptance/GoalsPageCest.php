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

        # Assert the existence of certain text on the page
        $I->see('All Goals');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnNewGoal');

        # Assert the existence of text within a specific element on the page
        $I->see('New Goal', '#btnNewGoal');

        
    }
}