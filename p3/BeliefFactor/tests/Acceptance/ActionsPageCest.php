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

        # Assert the existence of All Actions text
        $I->see('All Actions');

        # Assert the existence of the new Action Button
        $I->seeElement('#btnNewAction');

        # Assert the existence of text "New Action" within New Action button
        $I->see('New Action', '#btnNewAction');

        # Check existence of the Actions table
        $I->seeElement('#actions-table');
    }

    public function clickNewActionButton(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/actions');
        $I->click('#btnNewAction');

        # Assert
        $I->amOnPage('/actions/new');
        $I->see('New Action');
    }
}