<?php
    class Main{
        private $url;
        private $controllerName = "index";
        private $controllerMethod = "index";
        private $controllerPath = "app/controllers/";
        public $controller;
        public function __construct()
        {
            $this->getUrl();
            $this->loadControllers();
            $this->loadMehthod();
        }
        public function getUrl(){
            $this->url = isset($_GET['url']) ? $_GET['url'] : NULL;
            if($this->url != NULL){
                $this->url = rtrim($this->url, "/");
                $this->url = explode("/", $this->url);
            }
            else{
                unset($this->url);
            }
        }
        public function loadControllers(){
            if(!isset($this->url[0])){
                include_once $this->controllerPath.$this->controllerName.'.php';
                $this->controller = new $this->controllerName();
            }
            else{
                $this->controllerName = $this->url[0];
                $filename = $this->controllerPath.$this->controllerName.'.php';
                if(file_exists($filename)){
                    include_once "$filename";
                    if(class_exists($this->controllerName)){
                        $this->controller = new $this->controllerName();
                    }
                }
            }
        }
        public function loadMehthod(){
            if(isset($this->url[2])){
                $this->controllerMethod = $this->url[1];
                if(method_exists($this->controller, $this->controllerMethod)){
                    $this->controller->{$this->controllerMethod}($this->url[2]);
                }
                else{
                    header("Location:" .BASE_URL. "/index/error");
                }


            }
            else{
                if(isset($this->url[1])){
                    $this->controllerMethod = $this->url[1];
                    if(method_exists($this->controller, $this->controllerMethod)){
                        $this->controller->{$this->controllerMethod}();
                    }
                    else{
                        header("Location:" .BASE_URL. "/index/error");
                    }
                }
                else{
                    if($this->controller && method_exists($this->controller, $this->controllerMethod)){
                        $this->controller->{$this->controllerMethod}();
                    }
                    else{
                        header("Location:" .BASE_URL. "/index/error");
                    }
                }
            }
        }
    }
?>