<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="public/style/login.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="avatar">
            <span class="material-icons avatar_img">
                account_circle
            </span>
        </div>
        <form action="login/check" method="post">
            <label for="user">Usuario</label><br>
            <input type="text" name="user" id="user"><br>

            <label for="password">Senha</label><br>
            <input type="password" name="password" id="password"><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>