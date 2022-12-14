<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ActionsPageCest
{
    /**
     * Test that we can load the actions page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/actions');

        # Assert the correct title is set on the page
        $I->seeInTitle('All Actions');

        # Assert the existence of certain text on the page
        $I->see('All Actions');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnNewAction');

        # Assert the existence of text within a specific element on the page
        $I->see('New Action', '#btnNewAction');
    }
}