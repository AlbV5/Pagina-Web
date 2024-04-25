<?php 
include 'conect.php';
error_reporting(0);
if($_POST['btnRegistro']){
//recuperar datos a travez de post 

$NombreRE = $conectando->real_escape_string($_POST['Nombre']);
$CorreoRE = $conectando->real_escape_string($_POST['Email']);
$PasswordRE = $conectando->real_escape_string(md5($_POST['Pass']));
//insertar la bd 
$Insert = "INSERT INTO Registro(NombreRE,CorreoRE,PasswordRE)VALUES('$NombreRE','$CorreoRE','$PasswordRE')";
$EInsert = $conectando->query($Insert);
if($EInsert > 0){
    $Mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Dato insertado!</strong> EXITO.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}
else{
    $Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error</strong>NO EXITO.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

}

?>