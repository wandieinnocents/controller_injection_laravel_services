

## Resource Controllers

## Creating a resource controller
- php artisan make:controller Product -r

## Creating a Model
- php artisan make:model Product -m

## Migrate fresh table
- php artisan migrate

## for an existing table if you edit
- php artisan migrate:refresh 

## Dependency Injection

## Create service


- mkdir app/Services
- touch app/Services/PostService.php
- Register post service in AppServiceProvider
- Inject the post service into the controller

## Create API 
- Run the command php artisan install:api
- Add post resource url to api route in the file routes/api.php 
- Test with Thunder Client

* All Posts :     (GET) http://internship:8000/api/posts
* Single Post :   (GET)  http://internship:8000/api/posts/1
* Update Post  :  (PUT)  http://internship:8000/api/posts/1
* Delete Post :   (DELETE)  http://internship:8000/api/posts/1
* Add Post :      (POST)  http://internship:8000/api/posts



## Laravel Events
# Observers 
- Observers in Laravel allow you to listen to events that occur on models. Events that can  occur, such as creating, updating, deleting
- Create an observer : php artisan make:observer PostObserver --model=Post
- In the PostObserver class, define the methods for the events you want to handle
- Register the Observer in app\Providers\AppServiceProvider


## Localization
Localization in Laravel allows you to manage and display your application in different languages. You create language files the languages and use them to display content based on the user's language preference.

- create a file in : resources/lang/en/messages.php
- You can set the default locale in the config/app.php file by modifying the locale option: ie to en or es, or change in .env
- reference it in your views

## ELOQUENT RELATIONSHIPS 

Eloquent is the Object-Relational Mapper (ORM) included with Laravel. It provides a simple and intuitive Active Record implementation for working with your database. Each database table has a corresponding "Model" that is used to interact with that table. Eloquent models allow you to query for data in your tables, as well as insert new records into the table.

In Laravel, a relationship is a way to define the connection between two database tables. Laravel provides a powerful and expressive ORM (Object-Relational Mapping) called Eloquent, which makes it easy to interact with the database and define relationships. Eloquent relationships allow you to query related data and work with your database using an object-oriented approach.

# One to One relationships & Many To Many
- php artisan make:model Product -m
- php artisan make:model Category -m
- php artisan make:controller ProductController --resource
- php artisan make:controller CategoryController --resource
- create the views for the products crud
- create the views for the categories crud


## key Points
- One-to-One: One record in the first table is related to one and only one record in the second table.
- One-to-Many: One record in the first table is related to multiple records in the second table
- One-to-One: Used when there is a strict one-to-one correspondence between records
- One-to-Many: Used when one record in the first table can have multiple associated records in the second table.

## Many To Many Relationships
- Article Table: php artisan make:model Article -m
- Tage Table : php artisan make:model Tag -m
- Pivot Table ; php artisan make:migration create_article_tag_table --create=article_tag
- php artisan make:controller ArticleController --resource
- create the views for the articles crud

## Add data to your database for testing, Add Tags to tags table
- capture name ( add 4 tags)

