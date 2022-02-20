<?php
    class Public_Model extends Dmodel{
        public function __construct()
        {
            parent::__construct();
        }

        // CategoryProduct --------------------------------------------------->
        public function select($table, $data = array(), $cond = ''){
            return $this->db->select($table, $data, $cond);
        }
        public function insert($table, $data = array()){
            return $this->db->insert($table, $data);
        }
        public function delete($table,$cond){
            return $this->db->delete($table, $cond);
        }
        public function update($table,$data, $cond){
            return $this->db->update($table, $data, $cond);
        }
    }
?>