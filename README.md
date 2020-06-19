## Setup

- clone this project and setup your vhosts and hosts file
- copy .env.example from root directory of this project to .env
- change .env file with your configs, like connectiong to db, project url
- cd to projects directory
- run <code>composer install</code> 
- run <code>php artisan key:gen</code> 
- run <code>php artisan migrate --seed</code> 
- run <code>npm install && npm run dev</code>
- run <code>php artisan storage:link</code> 
- check permissions to storage directory
