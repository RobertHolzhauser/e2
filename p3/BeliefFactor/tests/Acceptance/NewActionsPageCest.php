<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class NewActionsPageCest
{
    /**
     * Test that we can load the new actions page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/actions/new');

        # Assert the correct title is set on the page
        $I->seeInTitle('New Action');

        # Assert the existence of certain text on the page
        $I->see('New Action');

        # Assert the existence of the Save Goal button
        $I->seeElement('#btnSaveaction');

        # Assert the existence of "Save Action" on the Save Action button 
        $I->see('Save Action', '#btnSaveaction');

        # Assert that the Action field has label of "Action"
        $I->see('Action', '[test=action-name-label]');

        # Assert that the Action input field exists on the form
        $I->seeElement('[test=action-name-input]');

        # Assert that the description input textarea exists on the form
        $I->seeElement('[test=action-description-input]');

        # Assert that the purpose input textarea exists on the form
        $I->seeElement('#status');
    }
}