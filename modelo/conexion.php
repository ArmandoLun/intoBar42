<?php
    class Conexion{
        protected $db_connect;

        public function __construct(){
            try{
                $this->db_connect=new PDO("mysql:host=us-cdbr-east-06.cleardb.net; dbname=heroku_5efcd308a0883ac", "b07f350183c1bd", "b6f989d6");
                //$this->db_connect=new PDO("mysql:host=localhost; dbname=metodologia", "root", "");
                $this->db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>