<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class RankingsPageCest
{
    /**
     * Test that we can load the rankings page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/rankings');

        # Assert the correct title is set on the page
        $I->seeInTitle('All Rankings');

        # Assert the existence of certain text on the page
        $I->see('All Rankings');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnNewRankings');

        # Assert the existence of text within a specific element on the page
        $I->see('New Rankings', '#btnNewRankings');
    }
}