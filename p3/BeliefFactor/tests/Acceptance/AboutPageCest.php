<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class AboutPageCest
{
    /**
     * Test that we can load the home / about page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/about');

        # Assert the correct title is set on the page
        $I->seeInTitle('Belief Factor');

        # Assert the existence of certain text on the page
        $I->see('Welcome to Belief Factor!');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnNewGoal');

        # Assert the existence of text within a specific element on the page
        $I->see('The Process', 'h3');
    }
}