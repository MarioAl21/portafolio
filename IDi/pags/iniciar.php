<?php
 /* Variables session para privatizar el login */
 session_start(); 
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
 <link href="../css/styles.css" rel="stylesheet" 
 type="text/css" />
 </head>
 <body>
   
   <div class="logo-container">
    <a href="/idi/"><img class="logo-signup" src="/idi/images/logo.png" alt="logo de Tracking my bus" /></a> 
   </div>
   <!-- Formulario de inicio (header) //-->
   <form method="post" class="form-reg">
    <h2 class="form-title">Iniciar Sesión</h2>
    <p class="form-paragraph">¿Aún no tienes una cuenta? <a href="registro.php">Entra aquí</a></p> 
    
    <div class="form-container">
     <div class="form-group">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -5 24 24" width="24" fill="currentColor"><path d="M2 5.702V12h16V5.702L15.039 2H4.96L2 5.702zM0 5l4-5h12l4 5v7a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm13.874 2a4.002 4.002 0 0 1-7.748 0H2V5h16v2h-4.126zm-2.142 0H8.268a2 2 0 0 0 3.464 0z"></path></svg>
      <label for="correo" class="form-label">Correo: </label> 
      <input type="text" id="correo" name="correo" class="form-input controls" />
     </div>
     <div class="form-group">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 24 24" width="24" fill="currentColor"><path d="M8.612 16.337l3.746-3.747 1.027.183a5 5 0 1 0-4.039-4.039l.184 1.028-6.994 6.994.177 2.651 2.651.177 1.833-1.833-.707-.707a1 1 0 0 1 1.415-1.414l.707.707zm.707-13.435a7 7 0 1 1 3.715 11.84L6.137 21.64l-4.43-.295a1 1 0 0 1-.932-.932l-.295-4.43 6.898-6.898a6.992 6.992 0 0 1 1.94-6.183zm4.242 5.656A2 2 0 1 1 16.39 5.73a2 2 0 0 1-2.829 2.828z"></path></svg>
      <label for="pwd" class="form-label">Contraseña: </label> <br />
      <input type="password" id="pwd" name="password" class="form-input controls" />
     </div>
     <p>¿Olvidaste tu contraseña? click en el siguiente enlace: <br />
        <a href="cambiarPwd.html">Cambiar contraseña</a></p>

    <div>
     <?php 
      require_once "../controladores/controladorForm.php";
      $ingreso = new ControladorForm();
      $ingreso -> ctrIngreso();
     ?>
    </div>

     <div class="form-submit">
      <input type="submit" id="name" value="Iniciar Sesión" class="form-input btn btn-register" />
      <a href="/idi/" class="btn btn-cancelar">
       Cancelar
      </a>
     </div>
    </div>
   </form>

   <footer class="main-footer">
    <p>Todos los derechos resevardos &#169; 2022 | Tracking my bus</p>
   </footer>

 </body> 
</html>
