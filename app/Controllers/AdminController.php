<?php
    class AdminController
    {
        // PARTE VISUAL

        public function index()
        {
            include_once "app/views/admin.php";
        }

        public function exit()
        {
            session_destroy();
            header("Location: ../");
        }

        // COMUNICAÇÃO COM O MODEL

        public function insert():void
        {
            $funcionario = new Funcionario();

            $funcionario->setUser($_POST['username']);
            $funcionario->setPassword($_POST['password']);
            $funcionario->setLevel($_POST['level']);

            if ($_POST['id'] != 0) {
                $funcionario->setId($_POST['id']);
                $funcionario->altera_func();
            } else {
                $funcionario->cadastro_func();
            }

            header("Location: index");
                
        }

        public function delete():void
        {
            $funcionario = new Funcionario();
            $funcionario->setId($_POST['id_user']);
            $funcionario->deletaFuncionario();

            header("Location: index");
        }

        public function setFuncionario(array $user)
        {
            $funcionario = new Funcionario();

            $funcionario->setId($user['id']);
            $funcionario->setUser($user['username']);
            $funcionario->setPassword($user['password']);
            $funcionario->setLevel($user['nivel']);
        }
        
        public function buscaFuncionario(int $id = null)
        {
            $funcionario = new Funcionario();

            $funcionario->setId( ($id != null) ? $id : $_SESSION["id_user"]);
            $result = $funcionario->buscaFuncioanrio();

            return $result;
        }
        public function getFuncionario()
        {

            $funcionario = new Funcionario();
            return array(
                "id" => $funcionario->getId(),
                "username" => $funcionario->getUser(),
                "password" => $funcionario->getPassword(),
                "nivel" =>$funcionario->getLevel()
            );
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
        
        public function busca()
        {
            $mesage = new Mesage();

            $mesage->setId($_POST['ler_mesage']);
            return $mesage->buscaMessage();
        }
    }
?>