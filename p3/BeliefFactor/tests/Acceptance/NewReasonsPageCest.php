<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class NewReasonsPageCest
{
    /**
     * Test that we can load the new reasons page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/reasons/new');

        # Assert the correct title is set on the page
        $I->seeInTitle('New Reasons');

        # Assert the existence of certain text on the page
        $I->see('New Empowering Reasons');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnSaveReasons');

        # Assert the existence of text within a specific element on the page
        $I->see('Save Reasons', '#btnSaveReasons');

        # Assert that the Goal Drop Down list exists
        $I->seeElement('#goal');

        # Assert that the Action Drop Down list exists
        $I->seeElement('#action');

        # Assert that the Rank type (Belief Factor) Drop Down list exists
        $I->seeElement('#rank-type');
        $I->see('Belief Factor');

        # Verify the important verbiage of the page is present
        $I->see("Perspective");
        $I->see("Because");
        $I->see("Therefore");
        $I->see("After");
        $I->see("While");
        $I->see("Whenever");
        $I->see("So That");
        $I->see("If");
        $I->see("Although");
        $I->see("In The Same Way That");
    }
}