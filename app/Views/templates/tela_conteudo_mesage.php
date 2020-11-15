<?php
    $admin = new AdminController();
    $mesage = $admin->busca();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesage</title>
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
            width: 60%;
            background-color: whitesmoke;
            box-sizing: border-box;
            box-shadow: 0px 0px 10px rgb(170, 170, 170);
        }
        .dashboard .content {
            position: relative;
            display: block;
            margin: 5%;
            padding: 10px;
            border-left: 2px solid #FF0044;
            background-color: #eee;
        }

        .dashboard .content:hover {
            background-color: white;
        }
        .dashboard .content h1 {
            text-align: center;
            font-size: 25px;
            text-decoration: underline;
        }
        h3 {
            font-size: 18px;
        }
        span{
            font-size: 16px;
            font-weight: normal;
            color: #FF0044;
        }
        hr {
            width: 100%;
            border: 1px solid #ddd;
        }
        p {
            font-size: 16px;
            color: #262626;
            text-align: justify;
        }
        a {
            text-decoration: none;
        }
        button {
            width: 100px;
            height: 30px;
            border: none;
            border-radius: 5px;
            background: #FF0044;
            color: white;
            cursor: pointer;
            transition: .5s;
        }
        button:hover {
            background-image: linear-gradient(to right, #f43b47 0%, #453a94 100%);
            box-shadow: 0px 0px 10px #453a94;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="dashboard">
            <div class="content">
                <h1><?php echo $mesage['assunto']; ?></h1>
                <h3>Remetente:<span> <?php echo $mesage['remetente']; ?> </span></h3>
                <h4>Data:<span> <?php echo $mesage['data']; ?> </span></h3>

                <hr>

                <p><?php echo $mesage['mesage']; ?></p>

                <a href="index"><button>Voltar</button></a>
            </div>
        </div>
    </div>
</body>

</html>