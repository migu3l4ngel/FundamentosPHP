<?php
    //http://www.funfamentosphp.com.devl/metodos-http.php?nombre=Miguel&apellido=Hurtado
    if(isset($_GET["nombre"]) &  isset($_GET["apellido"])) {
        echo $_GET["nombre"];
        echo $_GET["apellido"];
    } 
?>