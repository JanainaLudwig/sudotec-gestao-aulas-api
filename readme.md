# SUDOTEC - API - Gestão de Aulas

#### Dependencies
##### PHP Extensions


### Installation

- *composer install*
- *php artisan key:generate*
- Set configs (database, app name, app url...)
- *php artisan config:cache*
- *php artisan migrate*
- *php artisan passport:install*
- Put generated clients data on .env file
- *php artisan config:cache*
- *php artisan storage:link*

Passport (authentication) will only work if the server is multi thread (cannot run in php built-in server)

##### Env variables changed
- Check *.env.example* variables and update *.env*
- *php artisan config:cache*

##### Dependencies changed
- *composer update*

##### Database schema changed
- *php artisan migrate:fresh*
- *php artisan db:seed*

##### Others
- If an error related to **class not found** occurs, it may be necessary to run **composer dump-autoload**.
- If an error related to **out of memory** occurs when running **seeders**, check if  symbolic link to storage exists in public folder (if not, run *php artisan storage:link*).

### Docs
*php artisan apidoc:generate*

API docs are available in */docs*
