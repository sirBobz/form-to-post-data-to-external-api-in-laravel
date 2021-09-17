## About
A  simple PHP page that captures the employee details and posts the same to an API.

## Technology used
1. Laravel
2. Livewire 

## Installation process

1. Clone this repository.
2. `cd` into it the project root directory.
3. Install Composer Dependencies by running `composer install`
4. Copy `.env.example` file to `.env`
5. Update the API url `FORM_API_ROUTE` on the `.env` file 
6. Generate an app encryption key.  `php artisan key:generate`
7. Create a database and set up your database credentials on `.env` file. 
8. Run `php artisan migrate` to create the tables.
9. Run `php artisan serve` to boot up the inbuilt web server
10. Visit `localhost:8000` in your browser for the view.
