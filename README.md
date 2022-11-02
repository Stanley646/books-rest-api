
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>  
  
<p align="center">  
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>  
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>  
</p>  
  
## Book API(Laravel)
  
Laravel was used to develop the application because it is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:  
  
- [Simple, fast routing engine](https://laravel.com/docs/routing).  
- [Powerful dependency injection container](https://laravel.com/docs/container).  
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.  
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).  
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).  
- [Robust background job processing](https://laravel.com/docs/queues).  
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).  
  
Laravel is accessible, powerful, and provides tools required for large, robust applications.  
  
##  Project Setup
 To set up this application locally on you system. 
   1. clone the repo 
   2. `git clone https://github.com/stanitech/books-rest-api.git`  
   3. cd into the books-rest-api directory 
   4. `cd books-rest-api`
   5. install the dependencies for the application
   6. `composer install`
   7. create a .env file from the .env.example 
   8. `cp .env.example .env`
   9. Generate application key
   10. `php artisan key:generate`
   11. create a database called `books_rest_api` in your database 
   12. update the env files with your mysql connection details that you have on your system 


    DB_CONNECTION=mysql  
    DB_HOST=YOUR_HOST  
    DB_PORT=MYSQL_PORT  
    DB_DATABASE=books_rest_api  
    DB_USERNAME=root 
    DB_PASSWORD=
    
13. ensure the iceandfire base api is being setup in the .env files 
14. ICE_AND_FIRE_URL='https://www.anapioficeandfire.com/api/' 
15. Running migration data into the database 
16. `php artisan migrate`
17. then serve your project 
18. `php artisan serve`

##  Testing the Application 
**Application Testing**  is defined as a software  **testing**  type, conducted through scripts with the motive of finding errors in software. It deals with  **tests**  for the entire  **application**. It helps to enhance the quality of your  **applications**  while reducing costs, maximizing ROI, and saving development time.

In order to run the feature test that was written 
	`php ./vendor/bin/phpunit`
when you want to generate a coverage 
`php ./vendor/bin/phpunit --coverage-html ./coverage`

This generates html report files in the application in the coverage folder, which can be located in the root directory 



##  Testing the Application (user testing)

1. Note:: ** when creating an author in the application you have to arrange the name of the authors separated with commas

2. when testing the external application you can use any of the strings to search for the name of the book 

`"name"  or "name or name" or name`

3. You can filter books by name, country,release date, and publisher like this below:

`http://localhost:8000/api/v1/books?name=Game of throne`  
`http://localhost:8000/api/v1/books?country="Nigeria"`  
`http://localhost:8000/api/v1/books?release_date=2020-06-11` 
`http://localhost:8000/api/v1/books?publisher="Stanley opara"`  



# Developer(stanitech)

1. Name: Stanley Opara 
2. Nickname: Stanitech
3. Mail: stamacol25@gmail.com

Thank you.
