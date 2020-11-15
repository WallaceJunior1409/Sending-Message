<?php

    function gerar_tabela()
    {
        $funcionario = new FuncionarioController();
        $lista = $funcionario->mostra_func();
        
        //$vd = var_dump($lista);
        $table = '<table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USERNAME</th>
                                <th>NÍVEL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>';

        for ($i=0; $i < count($lista); $i++) : 
            if ($lista[$i]['level'] == 1):
                $level = 'Administador';
            else:
                $level = 'Operário';
            endif;

            $table .="<tr>";
            $table .="<td>".$lista[$i]['id']."</td>";
            $table .="<td>".$lista[$i]['username']."</td>";
            $table .="<td>".$level."</td>";
            $table .="<td>
                        <form action='index?".$lista[$i]['id']." method='post'>
                            <button type='submit' value=".$lista[$i]['id']." class='btn-update' name='id_user' >Alterar</button>
                        </form>
                        <form action='delete' method='post'>
                            <button type='submit' value=".$lista[$i]['id']."  class='btn-delete' name='id_user'>Excluir</button>
                        </form>
                    </td>";
            $table .="</tr>";
        endfor;
        $table .= "</tbody>
                    </table>";
        return $table;
    }

?>