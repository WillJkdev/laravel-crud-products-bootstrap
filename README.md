# 🛍️ Laravel Simple CRUD for Product Management

Este es un proyecto de Laravel 12 que permite gestionar productos. Implementa una interfaz con Blade y Bootstrap 5, ofreciendo funciones de creación, edición, visualización y eliminación de productos.

## 📌 Requisitos

- PHP 8.4.2
- Composer
- Laravel 12
- MySQL

## 🚀 Instalación

1. Clona el repositorio:

   ```sh
   git clone https://github.com/WillJkdev/laravel-crud-products-bootstrap.git
   cd laravel-crud-products-bootstrap
   ```

2. Instala las dependencias de Composer:

   ```sh
   composer install
   ```

3. Copia el archivo de configuración y genera la clave de la aplicación:

   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. Configura la base de datos en el archivo `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

5. Ejecuta las migraciones y los seeders:

   ```sh
   php artisan migrate --seed
   ```

6. Inicia el servidor de desarrollo:

   ```sh
   php artisan serve
   npm run dev
   ```
7. Alternativamente, puedes usar este comando para iniciar el servidor de desarrollo junto con vite:
   
   ```sh
   composer run dev
   ```
8. Abre la aplicación en tu navegador:

   ```sh
   http://127.0.0.1:8000
   ```

## 📌 Rutas

| Método | Ruta                       | Acción                             |
| ------ | -------------------------- | ---------------------------------- |
| GET    | `/`                        | Redirecciona a `/products`         |
| GET    | `/products`                | Muestra la lista de productos      |
| GET    | `/products/create`         | Formulario para crear un producto  |
| POST   | `/products/store`          | Guarda un nuevo producto           |
| GET    | `/products/{product}`      | Muestra un producto específico     |
| GET    | `/products/{product}/edit` | Formulario para editar un producto |
| PATCH  | `/products/{product}`      | Actualiza un producto              |
| DELETE | `/products/{product}`      | Elimina un producto                |

## 🖥️ Vistas

Las vistas están ubicadas en `resources/views/products/`:

- `index.blade.php`: Lista de productos con paginación.
- `create.blade.php`: Formulario para agregar un producto.
- `edit.blade.php`: Formulario para editar un producto existente.
- `show.blade.php`: Detalles de un producto.

## 🎨 Interfaz con Bootstrap

- Se utiliza **Bootstrap 5.3.3** para el diseño.
- El `layout/app.blade.php` incluye la barra de navegación y el botón para cambiar entre modo claro y oscuro.

## 🌙 Modo Oscuro/Claro

El sistema de temas permite cambiar entre **modo claro** y **oscuro**, guardando la preferencia del usuario en `localStorage`.

## 📜 Licencia

Este proyecto está bajo la [Licencia MIT](LICENSE). ¡Siéntete libre de modificarlo y mejorarlo! 🚀

