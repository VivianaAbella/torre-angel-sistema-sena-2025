<?php
require 'vendor/autoload.php';

// Cargar el archivo .env
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Obtener las variables de entorno
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];

// Mostrar las variables de entorno (puedes eliminar esto más tarde)
echo "DB Host: $dbHost<br>";
echo "DB Name: $dbName<br>";
echo "DB User: $dbUser<br>";
echo "DB Password: $dbPassword<br>";

// Ahora, ejecutar las operaciones de creación y búsqueda
use App\Controllers\UsuarioController;

// Crear un nuevo controlador
$controller = new UsuarioController();

// Probar la creación de un usuario
$controller->create();

// Esperar unos segundos para que el usuario se cree antes de buscarlo
sleep(2); // Aquí, le das tiempo al servidor para crear al usuario.

// Probar la búsqueda de un usuario por nombre de usuario
$controller->findByUsername("nuevo_usuario");
?>
