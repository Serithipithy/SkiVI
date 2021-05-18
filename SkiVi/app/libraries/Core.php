<?php
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();

            // cauta in "controllers" prima valoare, ucwords face toupper la prima litera
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                // seteaza un nou controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }

            // require the controller
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
        }
        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                // filters variables as string/numbers
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // breaking into arrays
                $url = explode('/', $url);

                return $url;
            }
        }
    }
