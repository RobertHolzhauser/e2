<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class NewGoalsPageCest
{
    /**
     * Test that we can load the new goals page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/goals/new');

        # Assert the correct title is set on the page
        $I->seeInTitle('New Goal');

        # Assert the existence of certain text on the page
        $I->see('New Goal');

        # Assert the existence of a certain element on the page
        $I->seeElement('#btnSaveGoal');

        # Assert the existence of text within a specific element on the page
        $I->see('Save Goal', '#btnSaveGoal');

        # Assert that the Goal field has label of Goal
        $I->see('Goal', '[test=goal-name-label]');

        # Assert that the Goal input field exists on the form
        $I->seeElement('[test=goal-name-input]');

        # Assert that the description input textarea exists on the form
        $I->seeElement('[test=goal-description-input]');

        # Assert that the purpose input textarea exists on the form
        $I->seeElement('#purpose');
    }
}