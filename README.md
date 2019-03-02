# SymfonyTuto

## Install Project
### Require

#### php7.2.*
#### mysql 5.6 or highger
#### composer

### Install of Symfony's internal server dev

- cd Tutoriel
- composer require server --dev

### Launch Symfony's server

- php bin/console server:run

## Database
### Import

#### First you have to modify your .env file.
#### DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/blog
#### Replace db_* fileds by your own identifications
#### blog = db_name

- php bin/console doctrine:database:create
- php bin/console doctrine:migrations:migrate

### Add random field into the database

- composer require orm-fixtures
- php bin/console doctrine:fixtures:load

### Run server

- php bin/console server:run

### Stop server

- php bin/console server:stop
