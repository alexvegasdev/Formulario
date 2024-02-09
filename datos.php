<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        echo "Bienvenido $nombre<br> su correo electronico es $correo";
    }
?>