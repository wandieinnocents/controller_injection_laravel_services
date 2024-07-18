

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
- 
## Localization
Localization in Laravel allows you to manage and display your application in different languages. You create language files the languages and use them to display content based on the user's language preference.

- create a file in : resources/lang/en/messages.php
- You can set the default locale in the config/app.php file by modifying the locale option: ie to en or es, or change in .env
- reference it in your views

