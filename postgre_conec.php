<?php 
class database{

    var $db_HOST = "";
    var $db_PORT = "";
    var $db_USER = "";
    var $db_PASS = "";
    var $db = "";
    var $CONST_ERRO = "erro ao conectar no nosso banco"; 
    var $dbc;
    var $last_id;


    function database($db, $user, $pass="nopass",$host="localhost", $port=5432){
        $this->db_HOST=$host;
        $this->db_PORT=$port;
        $this->db_USER=$user;
        $this->db_PASS=$pass;
        $this->db=$db;
        
        $this->connect_db();
    }

    function connect_db(){
        $connect_string = "host=".$this->db_HOST." port=".$this->db_PORT." user=".$this->db_USER." password=".$this->db_PASS." dbname=".$this->db;
        $this->dbc = pg_connect($connect_string);
        return $dbc;
    } 


    function consulta($sentencia){
      return 	$result=pg_query($dbc,$sentencia);
    }
 ?>