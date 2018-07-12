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


    function connect_db(){
        $connect_string = "host=".$this->db_HOST." port=".$this->db_PORT." user=".$this->db_USER." password=".$this->db_PASS." dbname=".$this->db;
        $this->dbc = pg_connect($connect_string);
        return $dbc;
    } 


    function consulta($sentencia){
      return 	$result=pg_query($dbc,$sentencia);
    }
 ?>
