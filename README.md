# Cuadro de mando integral 

_Sistema administrativo de gestión de recursos humanos,
Venezuela,Bolivar, Ciudad Guayana, Proyecto Institucional_

## API Construida con 🛠️

 * [PHP 8.0](https://www.php.net/downloads.php) 
 * [Laravel 9.5.1](https://laravel.com/docs/9.x)

## Comenzando con la api🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._  

### Carpetas
_Este proyecto esta separado en dos carpetas, la carpeta "api" como backend utilizando laravel de framework y la carpeta "front-end" para el front-end._

### Pre-requisitos 📋

_Que cosas necesitas para instalar el software de la api y como instalarlas_

  * [PHP 8.x.x](https://www.php.net/downloads.php) - lenguaje de programacion 
  * [Apache2](https://httpd.apache.org/download.cgi) -  HTTP servidor web 
_Es posible/recomendado instalar un paquete como "[XAMPP](https://www.apachefriends.org/es/index.html)" que ya incluye ambos elementos, Necesario PHP 8.^ y Apache 2.^_

* [Composer](https://getcomposer.org/) - Manejador de dependencias
 * [Laravel 9.x](https://laravel.com/docs/9.x) - Framework web utilizado  

* [Node.js](https://nodejs.org/es/) - Usado para generar algunas depencias con npm 

* [MySQL](https://www.apachefriends.org/es/download.html) - Manejador/ driver  de bases de datos

* [SQLyog](https://www.scriptcase.net/download/?campaignid=6541522797&adgroupid=78921989259&keyword=php%20mysql%20download&device=c&gclid=CjwKCAjwwdWVBhA4EiwAjcYJEHaheUskmkexT6GUiWflOgvs-UtM0c6nQCSA4-PGCQVVkDHvQ_XFfRoCrLwQAvD_BwE) - Manejador/ driver  de bases de datos
### Instalación para la api🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutándose_

  Primeramente debemos asegurarnos de descomentar las extensiones de postgresql en nuestro php.ini (abrimos xampp, config apache> php.ini)
```
;extension=pdo_mysql
;extension=mysql
>>>
extension=pdo_mysql
extension=mysql
```
Se reinicia apache, y ya tenemos las herramientas preparadas para instalar 

1. Clonamos el repositorio en la carpeta "C:\xampp\htdocs"
2. Preparamos el archivo .env con nuestras credenciales, codigos smtp, etc 
3. Creamos la base de datos en nuestro gestor de BDD (MYSQL) con el nombre que "bdd2-ihc"
4. editamos el archivo .env.example a .env 
5. Ejecutamos los siguientes comandos 
	```bash
	composer install
	npm install 
	npm run dev 
	php artisan storage:link
	php artisan key:generate
	php artisan migrate:fresh --seed
	```
6. Como ultimo paso, levanmos el servidor ejecutando 
	```bash
	php artisan serve
	```
7. Para hacer uso de la api es necesario llamarla de la siguiente manera
_http://localhost:8000/api_

_Recomendamos crear un dominio local para el proyecto [Tutorial:Como crear un dominio local](https://www.youtube.com/watch?v=HzygRlPmYQc)_


## Autores ✒️

* **Oliver Torres** - *Programador Semi-Senior - Modulo API - [otorres828](https://github.com/otorres828)*

* **Cesar Sotillo** - *Programador Junior - Modulo Base de Datos - [Cesar-s16](https://github.com/Cesar-s16)*


## Objetivo del proyecto 📄
Este es un proyecto realizado sin fines de lucro como proyecto institucional para la oficina de recursos humanos de la UCAB-Guayana(https://goo.gl/maps/4eSziM59uaj1yasr6) ubicada en Venezuela,Bolivar, Ciudad Guayana por los alumnos de "base de datos 2", Estudiantes de ingenieria informatica en la Universidad Catolica Andres Bello "Guayana", como proyecto universitario.
