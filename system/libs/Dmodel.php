<?php
    class Dmodel{
        protected $db;
        public function __construct()
        {
            $connect  = "mysql:dbname=db_a858b3_dtdd; host=mysql8001.site4now.net";
            $user = "a858b3_dtdd";
            $password = "sql2022Hoa";
            $this->db = new Database($connect, $user, $password);
        }
       
        
    }
?>
