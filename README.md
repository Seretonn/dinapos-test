<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Descripción

Task Manager es una simple aplicación web desarrollada con Laravel 12 que permite a los usuarios gestionar sus tareas diarias y a la sesión “admin” gestionar la totalidad de los usuarios registrados en la aplicación. Incluye funcionalidades de autenticación (login, registro, logout), creación, lectura, actualización y eliminación (CRUD) de tareas para usuarios regulares, y un panel de administración para la gestión de usuarios (CRUD). 

## Instalación

### Prerrequisitos

* Git
* PHP 8.2
* Composer
* Laravel 12
* Node.js & npm
* MySQL

### Pasos
1.  **Clonar el repositorio:**
    ```bash
    git clone git@github.com:Seretonn/dinapos-test.git
    cd dinapos-test
    ```
2.  **Instalar dependencias de Composer:**
    ```bash
    composer install
    ```
3.  **Configurar el archivo `.env`:**
    ```bash
    cp .env.example .env
    ```
4.  **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```
5.  **Ejecutar migraciones y seeds:**
    ```bash
    php artisan migrate --seed
    ```
    Para generar las tablas necesarias en las bases de datos y un usuario admin default

7.  **Instalar dependencias de Node y establecer un servidor de desarrollo local:**
    ```bash
    npm install
    npm run dev
    ```
8.  **Iniciar XAMPP o el servidor local de Laravel:**
    ```bash
    php artisan serve
    ```
    
## Rutas Principales

* `/` - Página de inicio/Home.
* `/login` - Inicio de sesión.
* `/register` - Registro.
* `/tasks` - Gestión de tareas.
    * `/tasks/create` - Crear nueva tarea.
    * `/tasks/{task}/edit` - Editar tarea.
    * `/tasks/{task}` - Eliminar tarea.
* `/users` - Gestión de usuarios (admin).
    * `/users/create` - Crear nuevo usuario.
    * `/users/{user}/edit` - Editar usuario.
    * `/users/{user}` - Eliminar usuario.
* `/logout` - Cerrar sesión.

## Migraciones

* `users`: Almacena la información de los usuarios (id, name, email, password, role, etc.).
* `tasks`: Almacena las tareas de los usuarios (id, user_id, title, description, is_completed, etc.).

## Seeds

La aplicación incluye un seeder que crea:
* Un usuario administrador de prueba.

## Patrones Aplicados

* **Modelo-Vista-Controlador (MVC):** Patron por defecto de Laravel.