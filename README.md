1. Manage database in .env file
2. Create Model, Migration, Controller(with resource): php artisan make:mode Student -mc -r
3. Go to database/migration/students table.php:
   $table->string('name');
   $table->string('city');
   $table->bigInteger('marks');
4. php artisan migrate
5. CRUD operation handle in Controller file: StudentController.php
6. Add incomming information from form in Create method.
7. Create form in views as Home.blade.php
8. Return this view using index function in StudentController and in web.php import StudentController and define root for this index function.
9. Display records in home.blade.php
10. Edit form function in StudentController. Hit this function using view.php and get specific id from url which we got when we click edit button in home.blade.php.
11. Update function in StudentController.Hit this function using edit button in editfrom.blade.php. and go to update route in web.php
12. Delete function in StudentController.Hit this function using delete button in home.blade.php. and go to delete route in web.php

