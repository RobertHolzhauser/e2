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

        # Assert the existence of certain text on the page
        $I->see('All Reasons');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnNewReasons');

        # Assert the existence of text within a specific element on the page
        $I->see('New Reasons', '#btnNewReasons');
    }
}