<?php
    class LoginController 
    {
        public function index()
        {
            include "app/Views/login.php";
        }

        public function check()
        {
            if (isset($_POST['user']) and isset($_POST['password'])) {
                try {
                    $funcionairo = new Funcionario();
                    $funcionairo->setUser($_POST['user']);
                    $funcionairo->setPassword($_POST['password']);
                    $login = $funcionairo->validateLogin();

                    if ($login == 1)
                        header('Location: ../admin/index');
                    else    
                        header('Location: ../funcionario/index');

                } catch (\PDOException $th) {
                    echo $th->getMessage();
                }
                
            }
        }
    }
?>