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

        # Assert the existence of "All Rankings" on the page
        $I->see('All Rankings');

        # Assert the existence of the New Rankings button
        $I->seeElement('#btnNewRankings');

        # Assert the existence of text "New Rankings" within the New Rankings button
        $I->see('New Rankings', '#btnNewRankings');

        # check the existence of the Rankings Table on the page
        $I->seeElement('#rankings-table');
    }

    public function clickNewRankingsButton(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/rankings');
        $I->click('#btnNewRankings');

        # Assert
        $I->amOnPage('/rankings/new');
        $I->see('New Rankings');
    }
}