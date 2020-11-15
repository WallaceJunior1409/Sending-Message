<div class="form-funcionario">
    <h1>Cadastro de Funcionario</h1>
    <form action="insert" method="post">
        <label for="username">Id:</label><br>
        <input type="text" name="id" value=<?php echo $lista_funcionario['id'];?>><br>

        <label for="username">UserName:</label><br>
        <input type="text" name="username" value=<?php echo $lista_funcionario['username'];?>><br>

        <label for="password">Password:</label><br>
        <input type="text" name="password" value="<?php echo $lista_funcionario['password'];?>"><br>

        <label for="level">Level:</label><br>
        <select name="level">
            <option value="1">Administrador</option>
            <option value="2">Operário</option>
        </select><br>

        <button type="submit">Cadastrar</button>

    </form>
</div>