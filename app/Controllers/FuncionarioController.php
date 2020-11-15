<?php
    class FuncionarioController
    {
        //  PARTE VISUAL

        public function index()
        {
            include_once "app/views/funcionario.php";
        }

        public function exit()
        {
            session_destroy();
            header("Location: ../");
        }

        // COMUNICAÇÃO COM O MODEL

        public function mostra_func()
        {
            $funcionario = new Funcionario();
            $result = $funcionario->mostrar();
            return $result;
        }

        public function buscaFuncionario()
        {
            $funcionario = new Funcionario();

            $funcionario->setId($_SESSION["id_user"]);
            $result = $funcionario->buscaFuncioanrio();

            return $result;
        }

        public function sendMesage():void
        {
            $mesage = new Mesage();

            $mesage->setRemetente($_POST['remetente']);
            $mesage->setDestinatario($_POST['destinatario']);
            $mesage->setData($_POST['data']);
            $mesage->setAssunto($_POST['assunto']);
            $mesage->setMesage($_POST['mesage']);

            $mesage->enviarMesage();

            header("Location: index");
            
        }

        public function mostraMesage()
        {
            $mesage = new Mesage();

            $destiatario = $this->buscaFuncionario();

            $mesage->setDestinatario($destiatario['username']);
            $result = $mesage->mostrarMesages();
            return $result;
        }

        public function deletaMesage():void
        {
            $mesage = new Mesage();

            $mesage->setId($_POST['excluir_mesage']);
            $data = $mesage->buscaMessage();
            $mesage->deletaMesages($data['remetente']);

            header("Location: index");
        }

        public function visualizarMesage()
        {
            include_once 'app/Views/templates/tela_conteudo_mesage.php';
        }
    }
?>