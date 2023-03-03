<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css" />
  <title>FORMULARIO DE REGISTRO</title>
</head>
<body>

  <div class="logo-container">
   <a href="/idi/"><img class="logo-signup" src="../images/logo.png" alt="logo de Tracking my bus" /></a> 
  </div>
  <!-- Sección que envuelve al formulario y su título //-->
  <section class="form-content section-container form-reg">
   <!-- Títutlo del registro //--> 
   <h4 class="form-title">FORMULARIO DE REGISTRO</h4>
   <p class="form-paragraph">¿Ya tienes una cuenta? <a href="iniciar.php">Inicia Sesión aquí</a></p> 
   
   <!-- Formulario de registro //-->  
  <form method="post" class="form-container2" id="signup-form">
    <!-- Campo NOMBRE //-->
    <div class="formulario__grupo" id="grupo__nombre">
     <label for="nombre" class="formulario__label">Nombre:</label>
      <div class="formulario__grupo-input input-group">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -5 24 24" width="24" fill="currentColor"><path d="M2 0h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 2v10h16V2H2zm9 2h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2zm0 3h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2zM4 4h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1z"></path></svg>
        <input type="text" class="formulario__input controls" name="nombre" id="nombre" placeholder="Augusta" />
	      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">¡Recuerda! Tu nombre es obligatorio y NO puede contener números o guión bajo</p>
    </div>

    <!-- Campo Apellidos //-->
    <div class="formulario__grupo" id="grupo__apellidos">
     <label for="apellidos" class="formulario__label">Apellidos:</label>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -5 24 24" width="24" fill="currentColor"><path d="M2 0h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 2v10h16V2H2zm9 2h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2zm0 3h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2zM4 4h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1z"></path></svg>
      <div class="formulario__grupo-input">
	      <input type="text" class="formulario__input controls" name="apellidos" id="apellidos" placeholder="De Lovelace">
	      <i class="formulario__validacion-estado fas fa-times-circle"></i>
      </div>
      <p class="formulario__input-error">¡Recuerda! Tu(s) Apellido(s) son obligatorios y NO puede contener números o guión bajo.</p>
    </div>    

    <!-- Campo Correo Electrónico -->
    <div class="formulario__grupo" id="grupo__correo">
     <label for="correo" class="formulario__label">Correo Electrónico</label>
     <span class="input-group-text">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -5 24 24" width="24" fill="currentColor"><path d="M2 5.702V12h16V5.702L15.039 2H4.96L2 5.702zM0 5l4-5h12l4 5v7a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm13.874 2a4.002 4.002 0 0 1-7.748 0H2V5h16v2h-4.126zm-2.142 0H8.268a2 2 0 0 0 3.464 0z"></path></svg>
     </span>
     <div class="formulario__grupo-input">
      <input type="email" class="formulario__input controls" name="correo" id="correo" placeholder="correo@correo.com">
      <i class="formulario__validacion-estado fas fa-times-circle"></i>
     </div>
     <p class="formulario__input-error">¡Recuerda! Tu correo es obligatorio y solo puede contener letras, numeros, puntos, <br/>guiones y guion bajo.</p>
    </div>

    <!-- Grupo: Contraseña -->
    <div class="formulario__grupo" id="grupo__password">
     <label for="password" class="formulario__label">Contraseña</label>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 24 24" width="24" fill="currentColor"><path d="M8.612 16.337l3.746-3.747 1.027.183a5 5 0 1 0-4.039-4.039l.184 1.028-6.994 6.994.177 2.651 2.651.177 1.833-1.833-.707-.707a1 1 0 0 1 1.415-1.414l.707.707zm.707-13.435a7 7 0 1 1 3.715 11.84L6.137 21.64l-4.43-.295a1 1 0 0 1-.932-.932l-.295-4.43 6.898-6.898a6.992 6.992 0 0 1 1.94-6.183zm4.242 5.656A2 2 0 1 1 16.39 5.73a2 2 0 0 1-2.829 2.828z"></path></svg>
     <div class="formulario__grupo-input">
       <input type="password" class="formulario__input controls" name="password" id="password"  autocomplete="on" />
       <i class="formulario__validacion-estado fas fa-times-circle"></i>
     </div>
     <p class="formulario__input-error">¡Recuerda! La contraseña tiene que ser de almenos 8 dígitos.</p>
    </div>
    
      <!-- Grupo: Contraseña 2 -->
      <div class="formulario__grupo" id="grupo__password2">
	      <label for="password2" class="formulario__label">Repetir Contraseña</label>
        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -3 24 24" width="24" fill="currentColor"><path d="M11.774 15l1.176 1.176a1 1 0 0 1-1.414 1.414l-2.829-2.828a1 1 0 0 1 0-1.414l2.829-2.829a1 1 0 0 1 1.414 1.415L11.883 13H14a4 4 0 1 0 0-8 1 1 0 0 1 0-2 6 6 0 1 1 0 12h-2.226zM8.273 3L7.176 1.904A1 1 0 0 1 8.591.489l2.828 2.829a1 1 0 0 1 0 1.414L8.591 7.56a1 1 0 0 1-1.415-1.414L8.323 5H6a4 4 0 1 0 0 8 1 1 0 0 1 0 2A6 6 0 1 1 6 3h2.273z"></path></svg></span>
	      <div class="formulario__grupo-input">
	       <input type="password" class="formulario__input controls" name="password2" id="password2"   autocomplete="on" />
	       <i class="formulario__validacion-estado fas fa-times-circle"></i>
     	  </div>
       <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
      </div>
   
    <!-- Grupo: Terminos y Condiciones -->
    <div class="formulario__grupo" id="grupo__terminos">
     <label class="formulario__label">
     <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
	    Acepto los Terminos y Condiciones
     </label>
    </div>
    <div class="formulario__mensaje" style="height: 5rem;" id="formulario__mensaje">
      <p><i class="fas fa-exclamation-triangle"></i> 
      <b>Error:</b> Favor de rellenar el formulario correctamente.</p>
    </div>

    <input type="hidden" name="tipo" value="usuario" />

    <div class="form-container">
     <?php 
      require_once "../controladores/controladorForm.php";
      $registro = ControladorForm::ctrRegistro();
      if($registro == 'ok')
      {
       echo "
        <script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }
        </script>
       ";
       echo "<div style='background: #d4edda; color:#0b2e13; position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem text-alig: center;'>El usuario ha sido registrado con éxito</div>";
      }
      else if($registro == 'fail') 
       echo "<div style='color:#721c24;background-color:#f8d7da;border-color:#f5c6cb; position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem text-alig: center;'>Ha fallado el registro. Póngase en conctacto con el administrador</div>";
     ?>
    </div>

    <div class="formulario__grupo formulario__grupo-btn-enviar">
     <button type="submit" class="formulario__btn btn btn-registro">Registrar</button>
     <!-- Botón y cancelar //-->        
     <a href="/idi/" class="btn btn-cancelar">
      Cancelar
     </a>
     <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
    </div>
  </form>
    
  </section> <!-- FIN de la sección con el formulario //-->

  <footer class="main-footer">
    <p>Todos los derechos resevardos &#169; 2022 | Tracking my bus</p>
  </footer>
  
  <script src="../js/script.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
 </body>
</html>