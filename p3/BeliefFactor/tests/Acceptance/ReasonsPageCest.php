<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ReasonsPageCest
{
    /**
     * Test that we can load the reasons page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/reasons');

        # Assert the correct title is set on the page
        $I->seeInTitle('All Reasons');

        # Assert the existence of the text "All Reasons"
        $I->see('All Reasons');

        # Assert the existence of the new Reasons button
        $I->seeElement('#btnNewReasons');

        # Assert the existence of text "New Reasons" within new reasons button
        $I->see('New Reasons', '#btnNewReasons');

        # Check the existence of the Reasons Table on the page
        $I->seeElement("#reasons-table");
    }

    public function clickNewReasonsButton(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/reasons');
        $I->click('#btnNewReasons');

        # Assert
        $I->amOnPage('/reasons/new');
        $I->see('New Empowering Reasons');
    }
}