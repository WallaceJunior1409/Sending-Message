<?php
    $funcionarioController = new FuncionarioController();
    $lista = $funcionarioController->mostraMesage();
?>


<?php
    
    for ($i=0; $i < count($lista); $i++) :
        $row ="<div class='card-view-mesage'>";
        $row .= "<div class='card-view-mesage-content'>";

        $row .= "<div class='card-view-mesage-content-1'>";
        $row .= "<p>Assunto: <span>".$lista[$i]["assunto"]."</span></p>";
        $row .= "<p>Remetente: <span>".$lista[$i]["remetente"]."</span></p>";
        $row .= "</div>";
        $row .= "<p class='mesage-content-date'>".$lista[$i]["data"]."</p>";
        $row .= "<div class='card-view-mesage-content-2'>";
        $row .= "<form action='visualizarMesage' method='post'>
                    <button type='submit' name='ler_mesage' value=".$lista[$i]['id']." >Ler Mesage</button>
                </form>
                <form action='deletaMesage' method='post' >
                    <button type='submit' name='excluir_mesage' value=".$lista[$i]['id']." id='excluir_mesage'>Deletar</button>
                </form>";
        $row .= "</div>";
        $row .= "</div>";
        $row .= "</div>";
        
        
        echo $row;
    endfor;    
    
    
?>


