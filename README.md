# GESTOR DE TAREAS 

## Descripción
Este proyecto es un gestor de tareas desarrollado con Laravel, que permite a los usuarios crear, editar, eliminar y listar tareas, así como marcar su estado como completado o pendiente.

## Características

* CRUD de Tareas: Crea, lee, actualiza y elimina tareas.
* Marcar como Completadas: Marca tareas como completadas o pendientes.
* Filtrado: Filtra tareas por su estado (completadas o pendientes).
* Interfaz Sencilla: Diseño intuitivo y fácil de usar, construido con Bootstrap.
* 

## Requisitos Técnicos

* Backend: Laravel 11, PHP 8.2
* Frontend: HTML5, CSS3, JavaScript, Bootstrap
* Base de Datos: MySQL

- **Herramientas Adicionales:**
  - Composer
  - Vite


## Configuración y Ejecución

1. Clonar el Repositorio:
   ```bash
   git clone 

2. **Instalar Dependencias:**
   Navega al directorio del proyecto y ejecuta:

   ```
   cd nombre-repositorio
   composer install
   npm install
 
3. **Configurar la Base de Datos:**

  - Crear una base de datos en tu servidor MySQL.
  - Copiar el archivo .env.example a .env y editarlo con tus credenciales de acceso a la base de datos.
    
   ```
    cp .env.example .env

  - Edita el archivo .env para configurar la conexión a la base de datos y otras variables de entorno necesarias:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pruebagestortareas
    DB_USERNAME=usuario
    DB_PASSWORD=contraseña
  ```

4. **Realizar  Migraciones:** Ejecuta las migraciones para crear las tablas en la base de datos:
   ```
   php artisan migrate
6. **Iniciar el Servidor:** Inicia el servidor de desarrollo de Laravel:
   ```
   php artisan serve
   
  - Abre tu navegador y accede a http://localhost:8000.

## USO
  - Registrar Tareas:
      Accede a http://localhost:8000 para comenzar a registrar nuevas tareas.
  - Gestionar Tareas:
      Puedes crear nuevas tareas, editarlas, eliminarlas y cambiar su estado entre completado y pendiente.
    
## ESTRUCTURA DEL PROYECTO
  - routes/web.php: Definición de las rutas de la aplicación.
  - app/Http/Controllers/TareaController.php: Controlador que maneja las operaciones CRUD de las tareas.
  - resources/views/: Vistas Blade que generan la interfaz de usuario.
  - database/migrations/: Migraciones para crear la tabla tareas.
  - public/css/: Carpeta que contiene los estilos CSS (incluyendo Bootstrap).
  - public/js/: Carpeta que contiene los scripts JavaScript.

## Notas Adicionales

Asegúrate de tener PHP, Laravel, Composer, Node.js y npm instalados y configurados correctamente en tu entorno de desarrollo.

## Contribuciones 
 Las contribuciones al proyecto son bienvenidas. Por favor, sigue las mejores prácticas y realiza un pull request para aportar cambios.
