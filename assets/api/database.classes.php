<?php

class Database{
    
    
        public function __construct(){
            /*change root = toyourusername; 100072011 = toyourpassword */
            $this->dbconnect = new PDO("mysql:host=localhost;dbname=college", "root", "10072011");
            $this->dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        public function get($column,$table,$condition = null,$values = null){
            if($condition!=null){
            $sql = "SELECT ".$column." FROM ".$table." WHERE ".$condition;}
            else{
            $sql = "SELECT ".$column." FROM ".$table;
            }
            $getData= $this->dbconnect->prepare($sql);
            $getData->execute($values);
            $row=$getData->fetchAll(PDO::FETCH_ASSOC);
            if(count($row) > 0){
            return $row;
            }
            else{
            return false;
            }
        }
    
        public function getwithsql($sql,$values=null){
            $getData= $this->dbconnect->prepare($sql);
            $getData->execute($values);
            $row=$getData->fetchAll(PDO::FETCH_ASSOC);
            if(count($row) > 0){
            return $row;
            }
            else{
            return false;
            }
        }
        public function unique ($column,$table,$condition = null,$values = null){
            if($condition!=null){
            $sql = "SELECT DISTINCT ".$column." FROM ".$table." WHERE ".$condition;}
            else{
            $sql = "SELECT DISTINCT ".$column." FROM ".$table;
            }
            $getData= $this->dbconnect->prepare($sql);
            $getData->execute($values);
            $row=$getData->fetchAll(PDO::FETCH_ASSOC);
            if(count($row) > 0){
            return $row;
            }
            else{
            return false;
            }
        }
        public function insert($table,$arr){
            $bind = ':'.implode(',:', array_keys($arr));
            $sql = 'insert into '.$table.'('.implode(',', array_keys($arr)).') '.'values ('.$bind.')';
            $stmt = $this->dbconnect->prepare($sql);
            $stmt->execute(array_combine(explode(',',$bind), array_values($arr)));
            if($stmt){ return true;} else{return false;}
            }
        public function update($table,$setwhat, $condition=null,$values){
            if($condition!=null){
            $sql="UPDATE ".$table." SET ".$setwhat." WHERE ".$condition;
            }
            else{
            $sql="UPDATE ".$table." SET ".$setwhat." ";
            }
            $updatevalues=$this->dbconnect->prepare($sql);
            $updatevalues->execute($values);
            if($updatevalues->rowCount()!=0)
            { return true;}
            else{return false;}
        }
        public function delete($table,$condition,$values){
            $sql ="DELETE FROM ".$table." WHERE ". $condition;
            $deletevalues=$this->dbconnect->prepare($sql);
            $deletevalues->execute($values);
            if($deletevalues->rowCount()!=0)
            { return true;}
            else{return false;};
            }
    
    
    
        }


