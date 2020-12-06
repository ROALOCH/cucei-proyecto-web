# Proyecto Final: Aplicación de Tareas

Ochoa Herrera Rodrigo Alejandro - 215522216  
CUCEI | Universidad de Guadalajara  
I5909 - Programación para Internet

## Descripción

El proyecto tiene como objetivo desarrollar una aplicación completa (frontend y backend) para almacenar listas de tareas en las cuentas de usuario que se registren en el sistema.

## Instalación

1. Clonar proyecto `git clone https://github.com/ROALOCH/cucei-proyecto-web.git`
2. Instalar dependiencias mediante composer: `composer install`
3. Instalar dependiencias mediante npm: `npm install`
4. Crear archivo de variables de entorno: `cp .env.example .env`
5. Crear llave: `php artisan key:generate`
6. Configurar nombre de base de datos en _.env_ y ejecutar migraciones: `php artisan migrate`
7. Iniciar aplicación con `php artisan serve`

Una vez ejecutado el comando anterior, el proyecto se puede visualizar en [http://localhost:8000](http://localhost:8000)

## Uso

Demo del proyecto accesible en [Heroku](http://roaloch-todoit.herokuapp.com/login).

## Licencia

[MIT](https://github.com/ROALOCH/cucei-proyecto-web/blob/main/LICENSE)
