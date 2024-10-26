

# INFO

Questo git-template fornisce lo scaffold di una web application realizzata con Laravel 10, Blade, Breeze, SCSS, Bootstrap e Vite. 

- [Documentazione Laravel 10.x](https://laravel.com/docs/10.x).
- [Documentazione Laravel Breeze](https://laravel.com/docs/10.x/starter-kits).

# SETUP INIZIALE

- Creare un repository a partire da questo template, cliccando  `Use this template` e poi su `Create a new repository`
- Clonare il repository appena creato sul proprio PC
- Da phpMyAdmin creare un database, importarvi i dati e segnarvi il nome dato al DB
- Creare un file `.env`. Si può procedere copiandolo da `.env.example`
- Per creare la APP_KEY nel `.env`, lanciare il comando dedicato, ma prima installare le dipendenze composer
	```bash
    composer install
	php artisan key:generate
	```
 - Installare anche le dipendenze NPM
	```bash
	npm i
	```
- Ri-controllare che tutti i dati nel `.env` siano corretti (attenzione al database!)
- Lanciare migrazioni e seeder
	```bash
	php artisan migrate:fresh --seed
	```
- Lanciare il progetto tramite il server built-in di PHP
	```bash
	php artisan serve
	```
- Lanciare vite
	```bash
	npm run dev
	```
### .env
	```bash
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=calendar
	DB_USERNAME=root
	DB_PASSWORD=
	```

