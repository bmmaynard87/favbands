# My Favorite Bands
A simple SPA to demonstrate Laravel and Angular proficiency. Also includes a few other technologies, such as Bootstrap, SASS, Gulp, Node, and regular expressions.

## Setup
1. `git clone https://github.com/bmaynard87/fav-bands.git && cd favbands`
2. `composer install`
3. `php artisan key:generate`
4. Windows: `vendor/bin/homestead make` Mac: `php vendor/bin/homestead make`
5. `vagrant up && vagrant ssh`  
6. `cd ~/Code/favbands`
7. `php artisan migrate && php artisan db:seed`
8. Ready to go! Navigate to http://192.168.10.10 in your browser
