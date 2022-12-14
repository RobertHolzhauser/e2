<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;
use Faker\Factory;

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

    # test adding a new action
    public function addNewAction(AcceptanceTester $I)
    {
        # get an instance the Faker library to generate dummy test data
        $faker = Factory::create();
        $actionName = $faker->words(7, true);
        $ActionDescription = $faker->words(15, true);
        $status = $faker->words(1, true);

        # Act
        $I->amOnPage('/actions/new');
        $I->fillField('[test=action-name-input]', $actionName);
        $I->fillField('[test=action-description-input]', $ActionDescription);
        $I->fillField('#status', $status);
        $I->click('#btnSaveaction');
        $I->seeElement('[test=action-added-confirmation]');  # indicates successful validation

        $I->comment('Successful Validation');

        #Assert
        $I->amOnPage('/actions');
        $I->see($actionName);         # this also tests history and database operations.
    }

    # test adding a new action with failed validation
    public function actionValidationFail(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/actions/new');
        $I->click('#btnSaveaction');

        #Assert
        $I->seeElement('[test=validation-errors-alert-actions]');
    }
}