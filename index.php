<?php 
require("app/conect.php");
require("app/acciones.php");
?>


<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords"
    content="Desarrollo web, Instalacion de redes, soporte tecnico, Administracion de base de datos, Servicios de redes, Diseño">
  <meta name="description" content="Pagina Empresarial de Digital Cherry Mexico">
  <meta name="author" content="Digital Cherry">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="js/jquery.js"></script>

  <title>Inicio | digital cherrys</title>
</head>

<body>
 
  <!-- Navbar -->
  <?php include 'includes/navbar.php';?>
  <!--termina navbar -->

  <!--Coimenza el principal-->
  <?php include 'includes/principal.php';?>
  <!-- termina -->


  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    //ejemplo starter javascript for disabling form submissions if there are invalid fields
(function(){
'use strict'
//fetch all the form we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')
//loop over them and prevent submissions
Array.prototype.slice.call(forms)
.forEach(function (form) {
  form.addEventListener('submit', function (event) {
    if(!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }
    form.classList.add('was-validated')
    }, false)
})
})()

  </script>
</body>

</html>