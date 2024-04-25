<?php 
$Server = "localhost";
$User = "root";
$pass = "";
$bd = "cherrytree";
$conectando = new mysqli($Server,$User,$pass,$bd);
if($conectando->connect_error){
    die("Error al conectar".$conectando->connect_error);
}
?>