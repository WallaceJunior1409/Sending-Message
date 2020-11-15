<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usurario</title>

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

        .dashboard-menu {
            position: relative;
            display: block;
            width: 3%;
        }

        .dashboard-menu-exit {
            position: relative;
            display: flex;
            width: 100%;
            height: 10%;
            align-items: center;
            justify-content: center;
            background-color: #F21A1A;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            cursor: pointer;
            transition: .3s;
        }

        .dashboard-menu-exit:hover {
            box-shadow: 0px 0px 10px #F21A1A;
            z-index: 2;
        }

        .dashboard-menu-exit a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        /**  
            Form Send Mesage CSS
        */
        .card-form {
            width: 30%;
            z-index: 1;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgb(170, 170, 170);
        }

        .card-send-content {
            margin: 30px;
            color: #262626;
        }

        .card-send-content h1 {
            color: #262626;
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
            color: #E8D90E;
            font-size: 15px;
            padding-left: 10px;
            transition: .3s;
        }

        .card-send-content form input:hover,
        select:hover {
            border-bottom: 2px solid #F5E726;
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
            border-bottom: 2px solid #F5E726;
        }

        .card-send-content form button {
            width: 100%;
            height: 30px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgb(170, 170, 170);
            background: #303030;
            color: white;
            cursor: pointer;
            transition: .5s;
        }

        .card-send-content form button:hover {
            box-shadow: 0px 0px 5px rgb(170, 170, 170);
            background: linear-gradient(to right, #f7ff00, #db36a4);
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
            border-left: 3px solid #E8D90E;
            border-right: 3px solid #E8D90E;
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
            background: linear-gradient(to right, #f7ff00, #db36a4);
            box-shadow: 0px 0px 5px #F5E726;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="dashboard">

            <div class="dashboard-menu">
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

            <div class="card-view" id="card-view">
                <?php
                include_once 'app/views/templates/tela_mesage.php';
                ?>
            </div>
        </div>
    </div>
</body>

</html>