

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
- php artisan install:api
- Add post resource url to api route
- Test with Thunder Client

* All Posts :     (GET) http://internship:8000/api/posts
* Single Post :   (GET)  http://internship:8000/api/posts/1
* Update Post  :  (PUT)  http://internship:8000/api/posts/1
* Delete Post :   (DELETE)  http://internship:8000/api/posts/1
* Add Post :      (POST)  http://internship:8000/api/posts

