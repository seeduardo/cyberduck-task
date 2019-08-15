# Cyber-Duck Task

Welcome to the Cyber-Duck Task using Laravel 5.8.

This mini CRM demonstration lets you list companies and their employees, plus the various details of each.

### `Instructions`

Fork and clone as necessary (obviously, I hope).

I set up the database using MySQL via MAMP and Sequel Pro, and as such I have reflected this in the repo's .env.example file, but feel free to configure the database as you wish.

Once this has been done, the following commands need to be run:

* `php artisan migrate`

* `php artisan db:seed`

* `php artisan storage:link`

Then you can serve Cyber-Duck Task by running

* `php artisan serve`

Navigate to http://localhost:8000/ and you should be good to go!

(Sneaky hint: you will need super secret Administrator credentials to get any further, but they're pretty simple to glean....)

(Fair enough: said credentials are 'admin@admin.com' and 'password'.)
