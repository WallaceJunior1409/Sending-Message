<?php
    use config\Database\Connection;

    class Funcionario 
    {
        private $id;
        private $user;
        private $password;
        private $level;

        public function validateLogin()
        {
            $conn = Connection::getCon();

            $sql = 'SELECT * FROM users WHERE username=:user';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':user', $this->user);
            $stmt->execute();

            if ($stmt->rowCount()) {
                $result = $stmt->fetch();

                if ($result['password'] === $this->password) {
                    $_SESSION['id_user'] = $result['id'];
                    return $result['level'];
                }
            }
            throw new \Exception("Login Invalido", 1);
            
        }


        public function cadastro_func()
        {
        
            $conn = Connection::getCon();

            $sql = 'INSERT INTO `users`(`username`, `password`, `level`) VALUES (:user, :pass, :level) ';
            
            try {
                $result = $conn->prepare($sql);
                $result->execute(array(
                    ":user" => $this->user,
                    ":pass" => $this->password,
                    ":level" => $this->level
                ));
                
            } catch (\PDOException $th) {
                echo $th->getMessage();
           }
            
        }

        public function altera_func()
        {
        
            $conn = Connection::getCon();

            $sql = 'UPDATE `users` SET `username`=:user,`password`=:pass,`level`=:level WHERE `id`=:id';
            
            try {
                $result = $conn->prepare($sql);
                $result->execute(array(
                    ":user" => $this->user,
                    ":pass" => $this->password,
                    ":level" => $this->level,
                    ":id" => $this->id
                ));
                
            } catch (\PDOException $th) {
                echo $th->getMessage();
           }
            
        }

        public function mostrar()
        {
            $conn = Connection::getCon();
            
            $sql = 'SELECT * FROM users';

            try {
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if ($result = $stmt->fetchAll()) {
                    return $result;
                }
            } catch (\PDOException $th) {
                echo $th->getMessage();
            }            
        }

        public function buscaFuncioanrio()
        {
            $conn = Connection::getCon();
            
            $sql = 'SELECT * FROM users WHERE `id`=:id';

            try {
                $stmt = $conn->prepare($sql);
                $stmt->execute(array(":id" => $this->getId()));

                if ($result = $stmt->fetch()) {
                    return $result;
                }
            } catch (\PDOException $th) {
                echo $th->getMessage();
            }           
        }
        public function deletaFuncionario():void
        {
            $conn = Connection::getCon();
            
            $sql = 'DELETE FROM users WHERE `id`=:id';

            try {
                $stmt = $conn->prepare($sql);
                $stmt->execute(array(":id" => $this->getId()));
            } catch (\PDOException $th) {
                echo $th->getMessage();
            }  
        }

        public function getId()
        {
            return $this->id ;
        }
        public function setId($id)
        {
            $this->id  = $id ;
        }

        public function getUser()
        {
            return $this->user ;
        }
        public function setUser($user)
        {
            $this->user = $user ;
        }

        public function getPassword()
        {
            return $this->password ;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getLevel()
        {
            return $this->level ;
        }
        public function setLevel($level)
        {
            $this->level  = $level ;
        }
    }
