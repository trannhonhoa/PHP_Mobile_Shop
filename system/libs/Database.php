<?php
    class Database extends PDO{

        public function __construct($connect, $user, $password)
        {
            parent::__construct($connect, $user, $password);
        }
        
        public function select($table, $data = array(), $cond = ''){
            if($cond != ''){
                $sql = "select * from $table where $cond";
            }
            else{
                $sql = "select * from $table";
            }
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindParam(":".$key, $value);
            }
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }
        public function insert($table, $data = array()){
            $key = implode(",", array_keys($data));
            $value = ":".implode(", :", array_keys($data));
            $sql = "insert into $table($key) values($value)";
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindValue(":$key", $value);
            }
            return $stmt->execute();
        }
        public function delete($table, $cond = ''){
           if($cond == ''){
               $sql = "delete from $table";
           }
           else{
               $sql = "delete from $table where $cond";
           }
           $stmt = $this->prepare($sql);
           return $stmt->execute();
        }
        public function update($table, $data, $cond){
            $updates = '';
            foreach($data as $key => $value){
                $updates.="$key=:$key,";
            }
            $updates = rtrim($updates, ",");

            $sql = "update $table set $updates where $cond";
            $stmt = $this->prepare($sql);
            foreach($data as $key => $value){
                $stmt->bindValue(":$key", $value);
            }
            return $stmt->execute();
        }
        
    }
?>