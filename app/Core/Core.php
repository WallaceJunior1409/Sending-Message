<?php
    class Core 
    {
        private $user;

        private $url;
        private $controller;
        private $method;
        private $params;

        function __construct()
        {
            $this->user = $_SESSION['id_user'] ?? null;
        }


        public function start($request)
        {
            if (isset($request['url'])) {
                $this->url = explode('/', $request['url']);

                $this->controller = ucfirst($this->url[0]).'Controller';
                array_shift($this->url);

                if (isset($this->url[0]) && $this->url != '') {
                    $this->method = $this->url[0];
                    array_shift($this->url);

                    if (isset($this->url[0]) && $this->url != '') {
                        $this->params = $this->url;
                    }
                    
                } 
            }
            
            if ($this->user) {
                $pg_permission = ['AdminController', 'FuncionarioController'];
                if (!isset($this->controller) || !in_array($this->controller, $pg_permission)) {
                    $this->controller = "FuncionarioController";
                    $this->method = "index";
                }
            } else {
                $pg_permission = ['LoginController'];

                if (!isset($this->controller) || !in_array($this->controller, $pg_permission)) {
                    $this->controller = 'LoginController';
                    $this->method = "index";
                }
            }
            
            $_SESSION['type_user'] = $this->controller;

            return call_user_func(array(new $this->controller, $this->method), $this->params);
            var_dump($this->controller, $this->method);
        }
    }
?>