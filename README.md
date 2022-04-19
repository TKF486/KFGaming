# KFGaming - Game Ordering System
This is an online website selling platform for games. The features and functions of our website include login and register function, provide a list of games that allow the user to choose the games they like, provide game details, descriptions, photos, and requirements for each game. Other than that, the website has a role called "admin" that is able to add, view, edit, and delete games on the website. Role users can view their profile and view the games that they have bought from the website before.

## Setup
After cloning the git, these in command line:
1. ```composer install```
2. ```copy .env.example .env```
3. ```php artisan key:generate```
4. ```php artisan storage:link```
5. ```php artisan serve```

Use the following to launch the project:
1. Start the WampServer.
2. Create a database named `KFGaming` at http://localhost/phpmyadmin/index.php.
3. Run ```php artisan migrate``` to migrate the tables.
4. Run ```npm run dev``` to compile.
5. Run ```php artisan serve``` to start the server.

