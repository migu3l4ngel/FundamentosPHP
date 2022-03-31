<?php
    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contrasena = "";

    try {
        $conexion =  new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasena);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Conexión establecida";

        $sql = "SELECT * FROM `fotos`;";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();
        //* FORMAS DE IMPRIMIR LA CONSULTa */
        print_r($resultado);

        foreach ($resultado as $foto) {
            print_r($foto);
        }

        foreach ($resultado as $foto) {
            print_r($foto['nombre']);
        }

        foreach ($resultado as $foto) {
            echo $foto['id']."<br/>";
        }

    }catch(PDOException $e) {
        echo "Conexión errónea".$e;
    }
?>