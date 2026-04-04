<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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


# Instalación Limpia de proyecto Laravel 
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

Tailwind 4
Sin PostCSS
Sin autoprefixer
Vite usando el plugin @tailwindcss/vite
CSS usando @import "tailwindcss";

1) Eliminar PostCSS del proyecto
   Borra el fichero de configuración de PostCSS (si existe):

postcss.config.js
Nota: Si este fichero existe, Vite intentará cargar PostCSS y fallará si no tienes autoprefixer.

2) Ajustar dependencias (package.json)
   Asegúrate de que NO existan estas dependencias en devDependencies del fichero package.json . Puedes borrar directamente esas líneas:

postcss
autoprefixer
tailwindcss versión 3
Instala Tailwind 4 y el plugin oficial para Vite:

tailwindcss
@tailwindcss/vite
- npm install -D tailwindcss@latest @tailwindcss/vite
  tailwindcss@latest: Instala la versión más reciente de Tailwind (actualmente 4.x).

@tailwindcss/vite Es imprescindible para Tailwind 4. Sustituye completamente a PostCSS con autoprefixer.

-D (–save-dev) Tailwind es una dependencia de desarrollo. (En producción, ya se transpila al css

3) Limpiar instalación de npm y reinstalar
   Elimina dependencias instaladas y el lockfile, y reinstala:

rm -rf node_modules package-lock.json
npm install

borrar node_modules
borrar package-lock.json
ejecutar npm install
Esto evita que queden restos de Tailwind 3 o PostCSS en caché.

4) Configurar Vite para Tailwind 4
   En vite.config.js añade el plugin:

importar tailwindcss desde @tailwindcss/vite
incluir tailwindcss() en plugins
Debe quedar (estructura):

/** @type {import('tailwindcss').Config} */
export default {
content: [
'./resources/views/**/*.blade.php',
'./resources/js/**/*.js',
'./resources/css/**/*.css',
],
};

5) Cambiar resources/css/app.css al formato Tailwind 4
   En Tailwind 4 NO se usan directivas clásicas @tailwind ...;.

El contenido mínimo recomendado es:

@import "tailwindcss";
6) Ejecutar Vite
   Finalmente:

npm run dev
Si Vite arranca sin errores, Tailwind 4 está funcionando.
