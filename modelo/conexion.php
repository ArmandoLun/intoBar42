<?php
    class Conexion{
        protected $db_connect;

        public function __construct(){
            try{
                $this->db_connect=new PDO("mysql:host=localhost; dbname=metodologia", "root", "");
                $this->db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo $e;
            }
        }
    }
?>