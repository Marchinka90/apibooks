# Apibooks

> ### Example Laravel codebase containing a REST API whit BASIC CRUD.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.8/installation#installation)


Clone the repository		
   
   	git clone https://github.com/Marchinka90/apibooks.git

Copy the example env file and make the required configuration changes in the .env file

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
## Database seeding

**Populate the database with seed data with relationships which includes authors and books. This can help you to quickly start testing the api**

Run the database seeder

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh

----------

## Folders

- 'app' - Contains all the Eloquent models
- 'app/Http/Controllers' - Contains the api BookController
- 'app/Http/Resources' - Contains the Book Resource
- 'database/factories' - Contains the model factory for all the models
- 'database/migrations' - Contains all the database migrations
- 'database/seeds' - Contains the database seeder
- 'routes' - Contains all the api routes defined in api.php file

## Environment variables

- '.env' - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing API

The api can be accessed at

    http://apibooks/public

You can retrieve all books in the api using GET request at:

		http://apibooks/public/api/books 

You can retrieve a single book in the api using GET request and an ID. Here's an example:
	
		http://apibooks/public/api/book/3

You can create a single book in the api using POST request and define book's attributes at:

		http://apibooks/public/api/book.

		Here's an example:
		{
				"title" : "Manuel Hodkiewicz",     
				"description" : "Books are either fiction or non-fiction. Non-fiction books contain factual information...",     
				"genre" : "Non-Fiction",
				"author_id" : 3      
		} 

You can update a single book in the api using PUT request, select witch book will be updated and define  it's new attributes at:

		http://apibooks/public/api/book.

		Here's an example:
		{	
				"book_id" = "1",
				"title" : "Vladimir Lakin",     
				"description" : "Fiction books are ones that have been made up...",     
				"genre" : "Fiction",
				"author_id" : 6      
		} 	

You can delete a single book in the api using DELETE request and an ID. Here's an example:

		http://apibooks/public/api/book/3




 