# Project 3
+ By: Robert Holzhauser
+ URL: <http://e2p3.robertholzhauser.me>

## Graduate requirement
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
[NLP University Press, Belief Audit](http://nlpuniversitypress.com/html/B32.html)  
[NLP University Press, Belief Assessment](http://nlpuniversitypress.com/html/B28.html)  
[Bootstrap version 5.2 Installation Documentation](https://getbootstrap.com/docs/5.2/getting-started/introduction/)  
[Favicon.io Favicon Generator](https://favicon.io/favicon-generator/)   
[Bootstrap Icons](https://icons.getbootstrap.com/#install)  
[Bootstrap Bullseye Icon](https://icons.getbootstrap.com/icons/bullseye/)  
[The Footer Copyright Notice](https://designshack.net/articles/the-footer-copyright-notice/)  
[RFC Errata](https://www.rfc-editor.org/errata/eid1690#:~:text=It%20should%20say%3A-,In%20addition%20to%20restrictions%20on%20syntax%2C%20there%20is%20a%20length,total%20length%20of%20320%20characters.)   
[Faker Documentation](https://fakerphp.github.io)   
[Update Your Blade Templates to Use the Null Coalesce Operator](https://laravel-news.com/blade-templates-null-coalesce-operator)  
[How to check if a variable has data in Laravel Blade](https://stackoverflow.com/questions/43774129/how-to-check-if-a-variable-has-data-in-laravel-blade)   
[Round Function in MySQL Reference Manual](https://dev.mysql.com/doc/refman/8.0/en/mathematical-functions.html#function_round)   
[Laracasts.com Populating Dropdown in Form From Table](https://laracasts.com/discuss/channels/laravel/populating-dropdown-in-form-from-table)  
[Laravel.com Blade Loops](https://laravel.com/docs/9.x/blade#loops)  
[PHP Manual Entry for getdate](https://www.php.net/manual/en/function.getdate.php)  

## Notes for instructor
+ The names of some of the reason type columns in the reasons table have a trailing underscore to avoid "collisions" with reserved words.
+ Invoke database migration with "php console App migrate" from a bash terminal.
+ Seed all tables with "php console App seedData" from a bash terminal.
+ I chose to use the plural form of rankings and reasons for single objects, due to the fact that a rankings contains multiple individual rankings,
    and a single reasons object contains multiple reasons.  I felt it was a simpler design rather than have a ranking object, and a rankings that pulled in
    seperate ranking objects, and similar for reasons.  At the same time, doing this does create a bit of awkwardness around singular / plural usage.
    In the routes I use the singular for an individual rankings or reasons.  In most other places I use the plural form "rankings" or "reasons" to refer to 
    individual rankings or reasons objects.
+ I left the unfinished work on users, and the columns and icons for edit and delete in place, even though I ran out of time to finish setting these up.
+ The navigation through the app is clumsier than I would like, but also ran out of time for further polishing this.  
+ The majority of stylings are out of the box Bootstrap 5, with a few minor exceptions.
+ I initially had goals-actions-rankings-reasons tightly coupled, but decided to let them be somewhat uncoupled for greater flexibility for the user.

## Codeception testing output
```
root@hes-lemp:/var/www/e2/p3/BeliefFactor# php vendor/bin/codecept run Acceptance --steps
Codeception PHP Testing Framework v5.0.5 https://helpukrainewin.org

Tests.Acceptance Tests (19) -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
AboutPageCest: Page loads
Signature: Tests\Acceptance\AboutPageCest:pageLoads
Test: tests/Acceptance/AboutPageCest.php:pageLoads
Scenario --
 I am on page "/about"
 I see in title "Belief Factor"
 I see "Welcome to Belief Factor!"
 I see element "#btnNewGoal"
 I see "The Process","h3"
 I see "Get Started Now","#btnNewGoal"
 PASSED 

ActionsPageCest: Page loads
Signature: Tests\Acceptance\ActionsPageCest:pageLoads
Test: tests/Acceptance/ActionsPageCest.php:pageLoads
Scenario --
 I am on page "/actions"
 I see in title "All Actions"
 I see "All Actions"
 I see element "#btnNewAction"
 I see "New Action","#btnNewAction"
 I see element "#actions-table"
 PASSED 

ActionsPageCest: Click new action button
Signature: Tests\Acceptance\ActionsPageCest:clickNewActionButton
Test: tests/Acceptance/ActionsPageCest.php:clickNewActionButton
Scenario --
 I am on page "/actions"
 I click "#btnNewAction"
 I am on page "/actions/new"
 I see "New Action"
 PASSED 

GoalsPageCest: Page loads
Signature: Tests\Acceptance\GoalsPageCest:pageLoads
Test: tests/Acceptance/GoalsPageCest.php:pageLoads
Scenario --
 I am on page "/goals"
 I see in title "All Goals"
 I see "All Goals"
 I see element "#btnNewGoal"
 I see "New Goal","#btnNewGoal"
 I see element "#goal-table"
 PASSED 

GoalsPageCest: Click new goal button
Signature: Tests\Acceptance\GoalsPageCest:clickNewGoalButton
Test: tests/Acceptance/GoalsPageCest.php:clickNewGoalButton
Scenario --
 I am on page "/goals"
 I click "#btnNewGoal"
 I am on page "/goals/new"
 I see "New Goal"
 PASSED 

NewActionsPageCest: Page loads
Signature: Tests\Acceptance\NewActionsPageCest:pageLoads
Test: tests/Acceptance/NewActionsPageCest.php:pageLoads
Scenario --
 I am on page "/actions/new"
 I see in title "New Action"
 I see "New Action"
 I see element "#btnSaveaction"
 I see "Save Action","#btnSaveaction"
 I see "Action","[test=action-name-label]"
 I see element "[test=action-name-input]"
 I see element "[test=action-description-input]"
 I see element "#status"
 PASSED 

NewActionsPageCest: Add new action
Signature: Tests\Acceptance\NewActionsPageCest:addNewAction
Test: tests/Acceptance/NewActionsPageCest.php:addNewAction
Scenario --
 I am on page "/actions/new"
 I fill field "[test=action-name-input]","aperiam aut rem necessitatibus qui perspiciatis voluptas"
 I fill field "[test=action-description-input]","ipsa vero rerum cum qui quo voluptatem quisquam asperiores in aliquid in atque rem consectetur"
 I fill field "#status","blanditiis"
 I click "#btnSaveaction"
 I see element "[test=action-added-confirmation]"
 Successful Validation
 I am on page "/actions"
 I see "aperiam aut rem necessitatibus qui perspiciatis voluptas"
 PASSED 

NewActionsPageCest: Action validation fail
Signature: Tests\Acceptance\NewActionsPageCest:actionValidationFail
Test: tests/Acceptance/NewActionsPageCest.php:actionValidationFail
Scenario --
 I am on page "/actions/new"
 I click "#btnSaveaction"
 I see element "[test=validation-errors-alert-actions]"
 PASSED 

NewGoalsPageCest: Page loads
Signature: Tests\Acceptance\NewGoalsPageCest:pageLoads
Test: tests/Acceptance/NewGoalsPageCest.php:pageLoads
Scenario --
 I am on page "/goals/new"
 I see in title "New Goal"
 I see "New Goal"
 I see element "#btnSaveGoal"
 I see "Save Goal","#btnSaveGoal"
 I see "Goal","[test=goal-name-label]"
 I see element "[test=goal-name-input]"
 I see element "[test=goal-description-input]"
 I see element "#purpose"
 PASSED 

NewGoalsPageCest: Add new goal
Signature: Tests\Acceptance\NewGoalsPageCest:addNewGoal
Test: tests/Acceptance/NewGoalsPageCest.php:addNewGoal
Scenario --
 I am on page "/goals/new"
 I fill field "[test=goal-name-input]","neque eos occaecati excepturi voluptate iure nostrum"
 I fill field "[test=goal-description-input]","sit id et soluta quasi minus neque ea cupiditate mollitia et id omnis iste quia asperiores aspernatur ab harum magnam doloribus adipisci qui eaque labore ea..."
 I fill field "#purpose","ea aliquam est cumque fugiat aut voluptatibus facere quasi in excepturi ipsum incidunt fugiat magni enim qui voluptatem tenetur expedita eaque tenetur suscipit eum aut"
 I click "#btnSaveGoal"
 I see element "[test=goal-added-confirmation]"
 Successful Validation
 I am on page "/goals"
 I see "neque eos occaecati excepturi voluptate iure nostrum"
 PASSED 

NewGoalsPageCest: Goal validation fail
Signature: Tests\Acceptance\NewGoalsPageCest:goalValidationFail
Test: tests/Acceptance/NewGoalsPageCest.php:goalValidationFail
Scenario --
 I am on page "/goals/new"
 I click "#btnSaveGoal"
 I see element "[test=validation-errors-alert-goals]"
 PASSED 

NewRankingsPageCest: Page loads
Signature: Tests\Acceptance\NewRankingsPageCest:pageLoads
Test: tests/Acceptance/NewRankingsPageCest.php:pageLoads
Scenario --
 I am on page "/rankings/new"
 I see in title "New Rankings"
 I see "New Rankings"
 I see element "#btnSaveRankings"
 I see "Save Rankings","#btnSaveRankings"
 I see element "#goal"
 I see element "#action"
 I see "It's Possible"
 I see "It's Desirable"
 I see "It's Worth It"
 I see "It's Appropriate and Ecological"
 I see "I'm Capable of it"
 I see "I'm Responsible For it"
 I see "It's OK"
 I see "I Deserve it"
 I see "I'm Willing"
 I see "I'm Ready"
 I see "I Can Vividly Imagine it"
 I see "I Allow Myself To"
 PASSED 

NewRankingsPageCest: Rankings validation fail
Signature: Tests\Acceptance\NewRankingsPageCest:rankingsValidationFail
Test: tests/Acceptance/NewRankingsPageCest.php:rankingsValidationFail
Scenario --
 I am on page "/rankings/new"
 I click "#btnSaveRankings"
 I see element "[test=validation-errors-alert-rankings]"
 PASSED 

NewReasonsPageCest: Page loads
Signature: Tests\Acceptance\NewReasonsPageCest:pageLoads
Test: tests/Acceptance/NewReasonsPageCest.php:pageLoads
Scenario --
 I am on page "/reasons/new"
 I see in title "New Reasons"
 I see "New Empowering Reasons"
 I see element "#btnSaveReasons"
 I see "Save Reasons","#btnSaveReasons"
 I see element "#goal"
 I see element "#action"
 I see element "#rank-type"
 I see "Belief Factor"
 I see "Perspective"
 I see "Because"
 I see "Therefore"
 I see "After"
 I see "While"
 I see "Whenever"
 I see "So That"
 I see "If"
 I see "Although"
 I see "In The Same Way That"
 PASSED 

NewReasonsPageCest: Reasons validation fail
Signature: Tests\Acceptance\NewReasonsPageCest:reasonsValidationFail
Test: tests/Acceptance/NewReasonsPageCest.php:reasonsValidationFail
Scenario --
 I am on page "/reasons/new"
 I click "#btnSaveReasons"
 I see element "[test=validation-errors-alert-reasons]"
 PASSED 

RankingsPageCest: Page loads
Signature: Tests\Acceptance\RankingsPageCest:pageLoads
Test: tests/Acceptance/RankingsPageCest.php:pageLoads
Scenario --
 I am on page "/rankings"
 I see in title "All Rankings"
 I see "All Rankings"
 I see element "#btnNewRankings"
 I see "New Rankings","#btnNewRankings"
 I see element "#rankings-table"
 PASSED 

RankingsPageCest: Click new rankings button
Signature: Tests\Acceptance\RankingsPageCest:clickNewRankingsButton
Test: tests/Acceptance/RankingsPageCest.php:clickNewRankingsButton
Scenario --
 I am on page "/rankings"
 I click "#btnNewRankings"
 I am on page "/rankings/new"
 I see "New Rankings"
 PASSED 

ReasonsPageCest: Page loads
Signature: Tests\Acceptance\ReasonsPageCest:pageLoads
Test: tests/Acceptance/ReasonsPageCest.php:pageLoads
Scenario --
 I am on page "/reasons"
 I see in title "All Reasons"
 I see "All Reasons"
 I see element "#btnNewReasons"
 I see "New Reasons","#btnNewReasons"
 I see element "#reasons-table"
 PASSED 

ReasonsPageCest: Click new reasons button
Signature: Tests\Acceptance\ReasonsPageCest:clickNewReasonsButton
Test: tests/Acceptance/ReasonsPageCest.php:clickNewReasonsButton
Scenario --
 I am on page "/reasons"
 I click "#btnNewReasons"
 I am on page "/reasons/new"
 I see "New Empowering Reasons"
 PASSED 

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Time: 00:02.671, Memory: 26.62 MB

OK (19 tests, 89 assertions)
root@hes-lemp:/var/www/e2/p3/BeliefFactor# 
```