<?php
    class Dmodel{
        protected $db;
        public function __construct()
        {
            $connect  = "mysql:dbname=my_blog; host=localhost";
            $user = "root";
            $password = "trannhonhoa";
            $this->db = new Database($connect, $user, $password);
        }
       
        
    }
?>
