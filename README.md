

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

***

# REQUISITOS TÉCNICOS BÁSICOS NECESARIOS
1. PHP 8.2 o superior
2. MySQL o PostgreSQL (SQLite para pruebas)
3. XAMPP, WAMPP o Laragon
4. Composer
5. Node JS


## Instalación Limpia de proyecto Laravel 
Dos opciones: a traves de Composer y con laravel Installer.
## Utilizamos laravel installer

laravel new miapp

Blade, sin React, Vue etc

Mysql o MariaDB

Testing app -> PHPUnit

ejecutar comandos npm init y npm run build -> yes

Configurar BBDD en .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=laravel_app1
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=file

crear la BBDD

ejecutar comandos
php artisan serve
npm run dev

Vemos pantalla de inicio Laravel en navegador

## Instalación de Breeze

Antes de empezar a crear rutas, vistas, controladores, etc... instalamos Breeze como app de autenticación.

Hasta la versión 11 de Laravel Breeze está incluido en los Starter-Kits
https://laravel.com/docs/11.x/starter-kits


composer require laravel/breeze --dev

php artisan breeze:install

Which Breeze stack would you like to install?
Blade with Alpine ..... blade
testing app -> PHPUnit

php artisan migrate
npm install  -> seguramente ya estarán corriendo
npm run dev  -> seguramente ya estarán corriendo


Vemos que la presentación de la app en el navegador se rompe...
Esto es debido a Tailwind

Advertencia sobre Tailwind 4 y Breeze
Laravel Breeze, por defecto, está preparado para funcionar con Tailwind CSS 3.
Aun así, es posible forzar el proyecto para usar Tailwind CSS 4, pero debes asumir que:

No es un camino “oficial” en Breeze.
Puede haber pequeños fallos visuales en algunas vistas (normalmente mínimos y fáciles de ajustar).
El mayor riesgo es dejar el proyecto en un estado “híbrido” (Tailwind 4 + PostCSS antiguo), lo que rompe Vite.

Migrar el proyecto a Tailwind 4 (mínimo y limpio)
Objetivo: dejar el proyecto en un estado coherente con Tailwind 4:


Creando clases request para saludo:
php artisan make:request StoreSaludoRequest
php artisan make:request UpdateSaludoRequest

Creando el Modelo Saludo:
php artisan make:model Saludo

Creando Policies para Saludo vinculado al moldelo Saludo
php artisan make:policy SaludoPolicy --model=Saludo

creando controladores 1. de tipo simple 2. de Resource y 3. de tipo Api
php artisan make:controller SaludoControlle
php artisan make:controller ProductController --resource
php artisan make:controller ProductController --api
php artisan make:controller Api/ProductController --api
