<?php
    require_once "Config\Autoload.php";
    Config\Autoload::Run();
    $est = new Models\Estudiante();
    $est->Set("id",5);
    $datos = $est->View();
    print $datos["nombre"];
?>