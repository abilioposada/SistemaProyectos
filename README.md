# API

Este proyecto está construido usando Laravel 10

![Logo Laravel](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg "Logo Laravel")

## Requerimientos:

- PHP ^8.1
- Composer ^2.2
- MySQL / MariaDB

### Pasos

Clonar el repositorio de GitHub en la computadora local e instalar todo

```bash
git clone https://github.com/abilioposada/SistemaProyectos.git

cd SistemaProyectos

php -r "file_exists( '.env' ) || copy( '.env.example', '.env' );"

composer install

php artisan key:generate
```

Configurar el archivo de entorno `.env` con la información de sus credenciales y asegurarse de crear la base de datos en su Sistema Gestor de Bases de Datos SGBD

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=root
DB_PASSWORD=password
```

Correr las migraciones y semillas de la base de datos

```bash
php artisan migrate --seed
```

<!-- Update PHPUnit variables in `phpunit.xml`

```XML
<server name="DB_CONNECTION" value="mysql"/>
<server name="DB_DATABASE" value="database"/>
```

Run the tests (Is not necessary the server to be running)

```bash
php artisan test
``` -->

Correr el servidor

```bash
php artisan serve
```

Navegar a http://127.0.0.1:8000

**Si necesita ver la lista de rutas disponibles, correr: `php artisan r:l`**
