<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class NewRankingsPageCest
{
    /**
     * Test that we can load the new rankings page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/rankings/new');

        # Assert the correct title is set on the page
        $I->seeInTitle('New Rankings');

        # Assert the existence of certain text on the page
        $I->see('New Rankings');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnSaveRankings');

        # Assert the existence of text within a specific element on the page
        $I->see('Save Rankings', '#btnSaveRankings');

        # Assert that the Goal Drop Down list exists
        $I->seeElement('#goal');

        # Assert that the Action Drop Down list exists
        $I->seeElement('#action');

        $I->see("It's Possible");
        $I->see("It's Desirable");
        $I->see("It's Worth It");
        $I->see("It's Appropriate and Ecological");
        $I->see("I'm Capable of it");
        $I->see("I'm Responsible For it");
        $I->see("It's OK");
        $I->see("I Deserve it");
        $I->see("I'm Willing");
        $I->see("I'm Ready");
        $I->see("I Can Vividly Imagine it");
        $I->see("I Allow Myself To");
    }
}