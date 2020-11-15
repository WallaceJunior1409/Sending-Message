<?php
    use config\Database\Connection;

    class Mesage
    {
        private $id;
        private $remetente;
        private $destinatario;
        private $data;
        private $assunto;
        private $mesage;

        public function enviarMesage()
        {
            $conn = Connection::getCon();

            $sql = "INSERT INTO `mesagens`(`remetente`, `destinatario`, `data`, `assunto`, `mesage`) VALUES (:remetente, :destinatario, :data, :assunto, :mesage)";
            try {
                $result = $conn->prepare($sql);
                $result->execute(array(
                    ":remetente" => $this->getRemetente(),
                    ":destinatario" => $this->getDestinatario(),
                    ":data" => $this->getData(),
                    ":assunto" => $this->getAssunto(),
                    ":mesage" => $this->getMesage(),
                ));
                return true;

            } catch (\PDOException $th) {
                echo $th->getMessage();
                return false;
            }
        }

        public function mostrarMesages()
        {
            $conn = Connection::getCon();
            
            $sql = 'SELECT * FROM mesagens WHERE `destinatario`=:destinatario';

            try {
                $stmt = $conn->prepare($sql);
                $stmt->execute(array(":destinatario" => $this->getDestinatario()));

                if ($result = $stmt->fetchAll()) {
                    return $result;
                }
            } catch (\PDOException $th) {
                echo $th->getMessage();
            }            
        }

        public function buscaMessage()
        {
            $conn = Connection::getCon();
            
            $sql = 'SELECT * FROM mesagens WHERE `id`=:id';

            try {
                $stmt = $conn->prepare($sql);
                $stmt->execute(array(":id" => $this->getId()));

                if ($result = $stmt->fetch()) {
                    $this->setRemetente($result['remetente']);
                    $this->setAssunto($result['assunto']);
                    $this->setData($result['data']);
                    $this->setMesage($result['mesage']);
                    return $result;
                }
            } catch (\PDOException $th) {
                echo $th->getMessage();
                return '';
            } 
        }

        public function deletaMesages(string $remetente)
        {
            $conn = Connection::getCon();
            
            $sql = 'DELETE FROM mesagens WHERE `id`=:id';
            $sql_func = 'SELECT * FROM users WHERE `username`=:username';


            try {

                $stmt_func = $conn->prepare($sql_func);
                $stmt_func->execute(array(":username" => $remetente));

                if ($stmt_func->rowCount() == 0) {
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(array(":id" => $this->getId()));
                }
            } catch (\PDOException $th) {
                echo $th->getMessage();
            }            
        }

        /**
         * SET AND GET
         */
        public function getId()
        {           
            return $this->id ;
        }
        public function setId($id) 
        {
            $this->id = $id;
        }
        public function getRemetente()
        {           
            return $this->remetente ;
        }
        public function setRemetente($remetente) 
        {
            $this->remetente = $remetente;
        }
        public function getDestinatario()
        {           
            return $this->destinatario ;
        }
        public function setDestinatario($destinatario) 
        {
            $this->destinatario = $destinatario;
        }
        public function getData()
        {           
            return $this->data ;
        }
        public function setData($data) 
        {
            $this->data = $data;
        }
        public function getAssunto()
        {           
            return $this->assunto ;
        }
        public function setAssunto($assunto) 
        {
            $this->assunto = $assunto;
        }
        public function getMesage()
        {           
            return $this->mesage ;
        }
        public function setMesage($mesage) 
        {
            $this->mesage = $mesage;
        }
    }

?>