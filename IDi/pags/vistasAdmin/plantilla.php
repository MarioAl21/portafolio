<?php
    session_start();
    if(!isset($_SESSION["validarIngreso"]))
    {
         echo "<script>window.location = '/idi/';</script>";
        return; 
    } 
    else
    {
      if($_SESSION["validarIngreso"] != 'ok') 
      {
         echo "<script>window.location = '/idi/';</script>";
        return; 
      }  
    }
?>


<!DOCTYPE html>
<html lang="es">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Inicio | Tracking My Bus</title>
   <!-- Normalize CSS que resetea todos los estilos por defecto //-->
   <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"
     rel="styleshett" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <link href="/idi/css/styles.css" rel="stylesheet" 
 type="text/css" />
 </head>
 <body>

 <!-- Nuestro menú (header) //-->
 <header class="main-header">
     <div class="content-wrapper">
      <!-- Logo //-->
      <a href="/idi/"><img src="/idi/images/logo.png" alt="logo de Tracking my bus" class="logo" /></a> 
       <!-- Ícono de menú (Responsive Design) //--> 
       <svg id="open-menu-button" class="jam" xmlns="http://www.w3.org/2000/svg" viewBox="-5 -7 24 24" width="32" fill="currentColor"><path d="M1 0h5a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2zm7 8h5a1 1 0 0 1 0 2H8a1 1 0 1 1 0-2zM1 4h12a1 1 0 0 1 0 2H1a1 1 0 1 1 0-2z"></path></svg>
      <!-- Menú //-->
       <nav id="main-menu" class="main-menu">
         <svg id="close-menu-button" class="jam" xmlns="http://www.w3.org/2000/svg" viewBox="-6 -6 24 24" width="32" fill="currentColor"><path d="M7.314 5.9l3.535-3.536A1 1 0 1 0 9.435.95L5.899 4.485 2.364.95A1 1 0 1 0 .95 2.364l3.535 3.535L.95 9.435a1 1 0 1 0 1.414 1.414l3.535-3.535 3.536 3.535a1 1 0 1 0 1.414-1.414L7.314 5.899z"></path></svg>
         <ul>
           <li>
             <a href="?pagina=gestionarUsuario">Gestionar usuario</a>
           </li>
           <li>
             <a href="?pagina=gestionarRuta">Gestionar ruta</a>
           </li>
           <li>
             <a href="?pagina=salirAdmin" class="btn-register">Cerrar Sesión</a>
           </li>
         </ul>
       </nav>
     </div>
   </header>
   <!-- Fin del header //-->

   <!-- Contenido -->
   <div class="container-fluid">
    <div class="container py-5">
       <div style="margin-top:2rem; py-5"> </div>
    <?php

       if(isset($_GET['pagina'])) {
        if($_GET['pagina'] == "gestionarUsuario" 
        || $_GET['pagina'] == "gestionarRuta"
        || $_GET['pagina'] == "salirAdmin"
        || $_GET['pagina'] == "formDarAlta"
        || $_GET['pagina'] == "consultarUsuarios"
        || $_GET['pagina'] == "editar")
         include 'C:/xampp/htdocs/IDi/pags/vistasAdmin/'.$_GET['pagina'].'.php';
        else
         include 'C:/xampp/htdocs/IDi/pags/vistasAdmin/error404.php';
       }
       else {
        include ("C:/xampp/htdocs/IDi/pags/vistasAdmin/gestionarUsuario.php");
       }
     ?>
    </div>
   </div>
   <!-- FIN de contenido -->

   <footer class="main-footer">
    <p>Todos los derechos resevardos &#169; 2022 | Tracking my bus</p>
   </footer>

   <script src="/idi/js/menu.js"></script>
   <script src="/idi/js/script.js"></script>
 </body> 
</html>
