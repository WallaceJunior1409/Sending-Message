<?php
    $funcionarioController = new FuncionarioController();
    $lista = $funcionarioController->mostra_func();

    $funcionario = $funcionarioController->buscaFuncionario();
?>

<div class="card-send-content">
    <h1>Enviar Mesage</h1>
    <form action="sendMesage" method="post">
        <label for="remetente">Remetente:</label><br>
        <input type="text" name="remetente" value="<?php echo $funcionario['username'];?>" placeholder="Digite o Remetente..."><br>

        <label for="destinatario">Destinatário:</label><br>
        <select name="destinatario" id="">
            <?php
                for ($i=0; $i < count($lista); $i++): 
                    $option .= "<option value=".$lista[$i]['username'].">".$lista[$i]['username']."</option>";
                endfor;

                echo $option;

            ?>
        </select><br>

        <label for="data">Data:</label><br>
        <input type="date" name="data" require ><br>

        <label for="assunto">Assunto:</label><br>
        <input type="text" name="assunto" require placeholder="Digite o Assunto..."><br>

        <label for="mesage">Mesage:</label><br>
        <textarea name="mesage" require placeholder="Escreva a Mesage..."></textarea><br>

        <button type="submit">Enviar</button>

    </form>
</div>