<?php
require_once "../modelos/formularioConexion.php";

 class ControladorForm {
    /* Método que invoca al método del modelo para registrar un usuario */
    static public function ctrRegistro() 
    {
        if(isset($_POST['nombre']))
        {
         $tabla = "usuario";
         $datos = array
         (
            "nombre" => $_POST['nombre'], 
            "apellidos" => $_POST['apellidos'], 
            "correo" => $_POST['correo'], 
            "password" => $_POST['password'], 
            "tipo" => $_POST['tipo']
         );
         $respuesta = ModeloForms::mdlRegistro($tabla, $datos);
         print_r($respuesta);
         return $respuesta;
        }
    }
    
    /* Método que invoca al método del modelo para leer usuarios de la BBDD */
    static public function ctrSeleccionarUsuarios($item, $valor) {
      
      if($item == null && $valor == null)
      {
       $tabla = "usuario";
       $respuesta = ModeloForms::mdlSeleccionarRegistros($tabla, null, null);
       return $respuesta;
      }
      else
      {
       $tabla = "usuario";
       $respuesta = ModeloForms::mdlSeleccionarRegistros($tabla, $item, $valor);
       return $respuesta;
      }
    }

    /* Método que controla el ingreso a la aplicación */
    public function ctrIngreso() {

      if(isset($_POST["correo"])) {
       $tabla = "usuario";
       $item = "correo";
       $valor = $_POST["correo"];  
       $respuesta = ModeloForms::mdlSeleccionarRegistros($tabla, $item, $valor);
      
       if($respuesta != null && $respuesta["correo"] == $_POST["correo"] && $respuesta["password"] == $_POST["password"])
        {
         // Variable de sesión para controlar el acceso
         echo "
           <script>
            if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
            }
           </script>
           ";
           if($respuesta["tipo"] == "administrador")
           {
            $_SESSION["validarIngreso"] = 'ok';
            echo "<script>
             window.location = 'administrador.php';
            </script>";
           }
           if($respuesta["tipo"] == "usuario")
           {
            $_SESSION["validarIngreso2"] = 'ok';
            echo "<script>
             window.location = 'vistasUsuario/inicio.php';
            </script>";
           }
        }
        else
         echo "<div style='color:#721c24;background-color:#f8d7da;border-color:#f5c6cb; position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem text-alig: center;'>Usuario o contraseña NO válidos. Verifícalo o regístrate.</div>";
      }

    }

    /* Eliminar Registro */
    public function ctrEliminarRegistro()
    {
      if(isset($_POST["elimina"]))
      {
         $tabla = "usuario";
         $valor = $_POST["elimina"];
         
         $res = ModeloForms::mdlEliminarRegistro($tabla, $valor);
         if($res == 'ok')
         {
            echo "
           <script>
            if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
            }
           </script>";
            echo "<script>
             window.location = 'administrador.php?pagina=consultarUsuarios';
            </script>";
         }
      }
    }
 }