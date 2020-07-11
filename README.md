
## Laravel Portfolio Project

This project is a simple demonstration of a portfolio website using Laravel Framework. In this project the front-end is used from bootstrap free theme. However, I've worked specially on the back-end. The project is purely made for demonstration purpose and it is not for sale.



### Installation

This project needs to be cloned first in order to operate. 
```sh
$ git clone https://github.com/Mahadi001/Library_System.git
```
You will need to be inside the project file to enter all of the rest of the commands. Type cd projectName to move to your terminal working location to the project file.

In this case: 

```sh
cd Library_System
```
Install the dependencies and devDependencies and start the server.
You can also download the composer if not installed beforehand [here](https://getcomposer.org/)

```sh
$ composer update
```

```sh
$ npm install
```

```sh
cp .env.example .env
```
```sh
cp .env.example .env
```
```sh
php artisan key:generate
```
In order to connect to the database:
 - Create a database
 - Locate to the database folder for a database file Vue_Laravel_MongoDB_Billing_Info\database\informations.json
 - Import the json file in the mongoDB database
 - In the .env file, fill out the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database.

Enter this to the command line :

```sh
php artisan migrate
```
 
```sh
php artisan serve
```

```sh
npm run dev 
```
or 
```sh
npm run watch 
```



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
