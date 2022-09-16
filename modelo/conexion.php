<?php
    class Conexion{
        protected $db_connect;
        // Connect to DB
        //descomentar esto al commitearlo XDDDDDDD
        
        public function __construct(){
            try{

                $this->db_connect=new PDO("mysql:host=us-cdbr-east-06.cleardb.net; dbname=heroku_5efcd308a0883ac", "b07f350183c1bd", "b6f989d6");
                //$this->db_connect=new PDO("mysql:host=localhost; dbname=restaurante", "root", "");
                $this->db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo $e;
            }
        }
    }
    //Get Heroku ClearDB connection information
//$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$cleardb_server = $cleardb_url["host"];
//$cleardb_username = $cleardb_url["user"];
//$cleardb_password = $cleardb_url["pass"];
//$cleardb_db = substr($cleardb_url["path"], 1);
//$active_group = 'default';
//$query_builder = TRUE;
// Connect to DB
//descomentar esto al commitearlo XDDDDDDD
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
//descomentar esto al commitearlo XDDDDDDD
//conexion para probar una bd local
//$conn = mysqli_connect('localhost','root','','pruebita');
//conexion para probar una bd local
?>