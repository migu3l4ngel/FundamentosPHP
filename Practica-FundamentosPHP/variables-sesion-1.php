<?php
    session_start();
    if(isset($_SESSION["usuario"])) {
        echo "usuario: ".$_SESSION["usuario"]."<br/>"."status: ".$_SESSION["status"];
    } else {
        echo "No hay datos";
    }

?>