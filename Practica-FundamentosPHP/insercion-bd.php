<?php
    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contrasena = "";

    try {
        // PDO es una clase que representa una conexión entre php y un servidor BD
        $conexion =  new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasena);
        //!setAttribute para establecer algún atributo PDO*/
        // atributo PDO: ATTR_ERRMODE genera un informe de errores
        // atributo PDO: ERRMODE_EXCEPTION genera una excepción
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto1.jpg');";
        // Método exec permite ejecutar query
        $conexion->exec($sql);

        echo "Conexión establecida";
    }catch(PDOException $e) {
        echo "Conexión errónea".$e;
    }
?>