<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        html {
            font-family: sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            position: relative;
            width: 100%;

            max-height: 90%;

            display: flex;
            justify-content: center;
        }

        .dashboard {
            position: relative;
            width: 97%;
            margin-top: 2%;
            margin-bottom: 2%;
            display: inline-flex;
            background-color: whitesmoke;
            box-sizing: border-box;
            box-shadow: 0px 0px 10px rgb(170, 170, 170);
        }

        /**
            Dashboard CSS
        */
        .dashboard-menu {
            position: relative;
            display: block;
            width: 3%;
        }

        .dashboard-menu-plus {
            position: relative;
            display: flex;
            width: 100%;
            height: 10%;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(to top, #f43b47 0%, #453a94 100%);
            border-bottom-left-radius: 15px;
            cursor: pointer;
            transition: .3s;
        }

        .dashboard-menu-plus:hover {
            box-shadow: 0px 0px 10px #453a94;
            z-index: 2;
        }

        .dashboard-menu p {
            font-size: 26px;
            color: #fff;
        }

        .dashboard-menu-exit {
            position: relative;
            display: flex;
            width: 100%;
            height: 10%;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            cursor: pointer;
            transition: .3s;
        }

        .dashboard-menu-exit:hover {
            box-shadow: 0px 0px 10px #d299c2;
            z-index: 2;
        }

        .dashboard-menu-exit a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .card-form {
            width: 30%;
            z-index: 1;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgb(170, 170, 170);
        }

        /**
            Form Funcionario CSS
        */
        .card-form-funcionario {
            position: absolute;
            z-index: -1;
            left: 2.9%;
            width: 30%;
            height: 100%;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgb(170, 170, 170);
        }

        .form-funcionario {
            position: relative;
            margin: 20px;
        }

        .form-funcionario h1 {
            color: #262626;
            text-align: center;
            font-size: 25px;
        }

        .form-funcionario form label {
            font-size: 16px;
            font-weight: 600;
            color: #404040;
        }

        .form-funcionario form input,
        select {
            margin-top: 5px;
            margin-bottom: 5px;
            width: 100%;
        }

        .form-funcionario form input,
        select {
            background: transparent;
            height: 25px;
            border: none;
            border-bottom: 2px solid #303030;
            color: #FF284C;
            font-size: 15px;
            padding-left: 10px;
            transition: .3s;
        }

        .form-funcionario form input:hover,
        select:hover {
            border-bottom: 2px solid #453a94;
            color: #505050;
        }

        .form-funcionario form button {
            width: 100%;
            height: 30px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgb(170, 170, 170);
            background: #303030;
            color: white;
            cursor: pointer;
            transition: .5s;
        }

        .form-funcionario form button:hover {
            box-shadow: 0px 0px 5px #453a94;
            background-image: linear-gradient(to right, #f43b47 0%, #453a94 100%);
            color: #fff;
        }

        /**  
            Form Send Mesage CSS
        */
        .card-send-content {
            margin: 30px;
            color: #262626;
        }

        .card-send-content h1 {
            color: #FF284C;
            text-align: center;
            font-size: 25px;
        }

        .card-send-content form label {
            font-size: 16px;
            font-weight: 600;
            color: #404040;
        }

        .card-send-content form input,
        select,
        textarea {
            margin-top: 5px;
            margin-bottom: 5px;
            width: 100%;
        }

        .card-send-content form input,
        select {
            background: transparent;
            height: 25px;
            border: none;
            border-bottom: 2px solid #303030;
            color: #FF0044;
            font-size: 15px;
            padding-left: 10px;
            transition: .3s;
        }

        .card-send-content form input:hover,
        select:hover {
            border-bottom: 2px solid #453a94;
            color: #505050;
        }

        .card-send-content form textarea {
            background: transparent;
            height: 100px;
            border: none;
            border-bottom: 2px solid #303030;
            color: #505050;
            font-size: 15px;
            transition: .3s;
        }

        .card-send-content form textarea:hover {
            border-bottom: 2px solid #453a94;
        }

        .card-send-content form button {
            width: 100%;
            height: 30px;
            border: none;
            border-radius: 5px;
            background: #303030;
            color: white;
            cursor: pointer;
            transition: .5s;
        }

        .card-send-content form button:hover {
            background-image: linear-gradient(to right, #f43b47 0%, #453a94 100%);
            box-shadow: 0px 0px 10px #453a94;
            color: #fff;
        }

        /**
            View Mesage
        */
        .card-view {
            position: relative;
            width: 70%;
            background-color: white;
            display: block;
            padding: 20px;
            overflow-y: scroll;
        }

        .card-view-mesage {
            width: 100%;
            margin-bottom: 10px;
            top: 0;
            background-color: rgb(250, 250, 250);
            border-left: 3px solid #262626;
            border-right: 3px solid #262626;
            border-radius: 3px;
            transition: .3s;
        }

        .card-view-mesage:hover {
            border-left: 3px solid #FF284C;
            border-right: 3px solid #FF284C;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgb(170, 170, 170);
        }

        .card-view-mesage .card-view-mesage-content {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-1 {
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-1 p {
            text-decoration: initial;
            font-weight: bold;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-1 p span {
            text-transform: none;
            font-weight: lighter;
        }

        .card-view-mesage .card-view-mesage-content .mesage-content-date {
            text-align: right;
            grid-column-start: 3;
            right: 0;
            color: #bbb;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-2 {
            position: relative;
            display: flex;
            grid-column-end: 4;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-2 form {
            width: 50%;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-2 form button {
            margin: 5px;
            width: 90%;
            height: 28px;
            background: transparent;
            border: 1px solid #262626;
            border-radius: 3px;
            box-sizing: border-box;
            cursor: pointer;
            transition: .5s;
            font-weight: bold;
        }

        .card-view-mesage .card-view-mesage-content .card-view-mesage-content-2 form button:hover {
            border: none;
            background-image: linear-gradient(to right, #f43b47 0%, #453a94 100%);
            box-shadow: 0px 0px 5px #453a94;
            color: #fff;
        }

        /** View Funcionario */

        .card-view-funcionario {
            position: absolute;
            width: 66.2%;
            height: 90%;
            z-index: -1;
            left: 33%;
            overflow-y: scroll;
        }

        .card-view-funcionario table {
            position: relative;
            margin: 20px;
            width: 95%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #fff
        }

        tr:hover {
            background-color: #eee;
        }

        th {
            color: #fff;
            background-color: #FF284C;
        }

        .btn-update,.btn-delete{
            width: 100%;
            height: 25px;
            margin: 5px;
            background-color: transparent;
            border: 1px solid #262626;
            box-sizing: border-box;
            transition: .3s;
        }
        .btn-update:hover {
            border: none;
            color: white;
            background-image: linear-gradient(to left, #d299c2 0%, #fef9d7 100%);
            box-shadow: 0px 0px 10px #d299c2;
        }
        .btn-delete:hover {
            border: none;
            background-image: linear-gradient(to right, #f43b47 0%, #453a94 100%);
            box-shadow: 0px 0px 5px #453a94;
        }
    </style>

    <title>Administrador</title>
</head>

<body>
    <div class="container">

        <div class="dashboard">

            <div class="dashboard-menu">
                <div class="dashboard-menu-plus" onclick="startMenu()">
                    <p>+</p>
                </div>
                <div class="dashboard-menu-exit">
                    <a href="exit">S</a>
                </div>
            </div>

            <div class="card-form" id="card_form-send">
                <div class="">
                    <?php
                    include_once 'app/views/templates/tela_envio_mesage.php';
                    ?>
                </div>
            </div>
            <div class="card-form-funcionario" id="card_form_funcionario">
                <?php
                    $admin = new AdminController();
            
                    if (isset($_GET['id_user'])) :
                        $id = $_GET['id_user'];
                    else :
                        $id = null;
                    endif;
            
                    $lista_funcionario = $admin->buscaFuncionario($id);
                include_once 'app/views/admin/tela_cadastro_funcionario.php';
                ?>
            </div>

            <div class="card-view" id="card-view">
                <?php
                include_once 'app/views/templates/tela_mesage.php';
                ?>
            </div>
            <div class="card-view-funcionario" id="card-view-funcionario">
                <?php
                include_once 'app/views/admin/tela_tabela_funcionario.php';
                $tabela = gerar_tabela();
                echo $tabela;
                ?>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        var button_menu = false

        function startMenu() {

            var form_mesage = document.getElementById('card_form-send')
            var form_func = document.getElementById('card_form_funcionario')

            var view_mesage = document.getElementById('card-view')
            var view_funcionario = document.getElementById('card-view-funcionario')

            if (button_menu == false) {
                form_mesage.style = "z-index: -1;"
                form_func.style = "z-index: 1;"

                view_mesage.style = "z-index: -1;"
                view_funcionario.style = "z-index: 1;"

                button_menu = true
            } else {
                console.log(button_menu);

                form_mesage.style = "z-index: 4;"
                form_func.style = "z-index: -1;"

                view_mesage.style = "z-index: 1;"
                view_funcionario.style = "z-index: -1;"

                button_menu = false
            }

        }
    </script>
</body>

</html>