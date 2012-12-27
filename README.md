##Laravel 4 - Bootstrap Application

This is a Laravel 4 Bootstrap Application, and like the name, it has Twitter Bootstrap 2.2.2 and it comes as an example application to help you get started on using Laravel 4 :)

###How to install

	git clone git://github.com/bruno-g/laravel4-bootstrap.git folder
	cd folder
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

Now that you have the Laravel 4 installed, you need to create a database for it and update the file ***app/config/database.php***

-----

###After that, run these commands:

	php artisan migrate:install
	php artisan migrate
	php artisan db:seed

-----

Navigate you your Laravel 4 website and try to login with the default credentials:

	email : test@test.com
	password : test

You can create a new user if you like :)
