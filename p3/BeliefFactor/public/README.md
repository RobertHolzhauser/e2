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

## Codeception testing output
```
```