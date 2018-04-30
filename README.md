Requirements: 
============

* php 7.1 +

* Apache mod_rewrite on

* node_js 8.11.


Installation:
============

1. use command "git clone https://vladnpr@bitbucket.org/vladnpr/news-portal.git" for cloning project into selected folder

2. use command "composer install" for installing framework

3. copy ".env.example" file to ".env" and set your configurations.

4. "php artisan key:generate"

5. "npm install"

6. "npm run prod"

7. "php artisan migrate --seed"

8. "php artisan l5-swagger:generate"

9. "php artisan jwt:secret"


use "hostname/admin" to access into project

hostname/api/documentation - swagger api documentation page 

users for testing access:

For admin-user access: 
=====================


* login: admin@admin.com 


* password: admin

editor user access:
===================

* login: editor@editor.com

* password: editor


guest user access:
==================
* login: guest@guest.com

* password: guest