<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Faker\Factory;

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

    # test adding a new goal
    public function addNewGoal(AcceptanceTester $I)
    {
        # get an instance the Faker library to generate dummy test data
        $faker = Factory::create();
        $goalName = $faker->words(7, true);
        $goalDescription = $faker->words(50, true);
        $goalPurpose = $faker->words(25, true);

        # Act
        $I->amOnPage('/goals/new');
        $I->fillField('[test=goal-name-input]', $goalName);
        $I->fillField('[test=goal-description-input]', $goalDescription);
        $I->fillField('#purpose', $goalPurpose);
        $I->click('#btnSaveGoal');
        $I->seeElement('[test=goal-added-confirmation]');  # indicates successful validation

        $I->comment('Successful Validation');

        #Assert
        $I->amOnPage('/goals');
        $I->see($goalName);          # this also tests history and database operations.
    }

    # test adding a new goal with failed validation
    public function goalValidationFail(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/goals/new');
        $I->click('#btnSaveGoal');

        #Assert
        $I->seeElement('[test=validation-errors-alert-goals]');
    }
}