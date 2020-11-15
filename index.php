<?php
    session_start();

    require_once "app/Core/Core.php";
    require_once "app/config/Database/Connection.php";

    require_once "app/Controllers/LoginController.php";
    require_once "app/Controllers/FuncionarioController.php";
    require_once "app/Controllers/AdminController.php";

    require_once "app/Models/Funcionario.php";
    require_once "app/Models/Mesage.php";


    $core = new Core();
    $core_start = $core->start($_GET);
    echo $core_start;

?>