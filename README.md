# machine
# Laravel

## Installation Composer

`php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`

`php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`

`php composer-setup.php`

`php -r "unlink('composer-setup.php');"`

>Global path:
`sudo mv composer.phar /usr/local/bin/composer`

>Packages of composer 
[https://packagist.org/](https://)

## php latest

`apt-get update && apt-get upgrade`

`apt-get install php`

### Install php8 modules 

`apt-get install libapache2-mod-php8.1 php8.1-fpm libapache2-mod-fcgid php8.1-curl php8.1-dev php8.1-gd php8.1-mbstring php8.1-zip php8.1-mysql php8.1-xml`

## Create new project Laravel

`composer create-project laravel/laravel {name_project}`

`cd {name_project}`

`php artisan serve`

>Default port 8000


# Repository SetUp of project VendingMachine Start HERE

`git clone git@github.com:pmartinez19/machine.git`

>if problems with php artisan serve !!!

1. `install composer`

2. rename .env.example to .env and updated it with your database credentials

Then run this 3 command in your project terminal

3. `$ php artisan key:generate`

4. `$ composer update`

5. `$ php artisan serve`




`php -S localhost:8000 -t public/`

## Vending machine

`composer create-project laravel/laravel machine`

1. Loging
2. Logout
3. Register
4. Show products images
5. Show products prices 
6. Name user at top page
7. Details page for every product
8. Buy button at details page / return main
9. Bought product notification deployment of product

> Carrousel style products

## Database 

Databases must be made with migration feature.

Go to mysql server and:

mysql -u {user_name} -p

insert your password

`CREATE DATABASE machine;`

>Only if changes in the database structure!
>In another terminal:

>`php artisan make:migrate`
>`php artisan migrate`

In mysql:

`source {/your_path/inserts_machine.sql}` 

>CREATE USER 'pedro'@localhost IDENTIFIED BY 'pedro';
>GRANT ALL PRIVILEGES ON *.* TO 'pedro'@localhost IDENTIFIED BY 'pedro';
>The file in the repo //machine/database/inserts_machine.sql










