<?php
    require("config/config.php");
    
    require("config/conexion.php");
    $db = new Conexion();
    $db->conectar();

    require("vista/layouts/header.php");
    require("vista/layouts/footer.php");
?>