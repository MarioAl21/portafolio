<?php
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


<h1>Bienvenido Administrador</h1>
<a href="?pagina=formDarAlta" class="btn btn-primary">Dar Alta de a usuario</a>
<a href="?pagina=consultarUsuarios" class="btn btn-primary">Consultar usuarios</a>
