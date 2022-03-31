<?php
    //Método para mantener la sesión
    /*Sin embargo, deja de función al cerrar el navegador 
    porque se pierde la conexión con el servidor*/
    session_start();

    $_SESSION["usuario"]="miguelangel";
    $_SESSION["status"]="logueado";

    echo "Sesión iniciada"."<br/>";
    echo "usuario: ".$_SESSION["usuario"]."<br/>"."status: ".$_SESSION["status"];
?>