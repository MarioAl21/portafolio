<?php
  
   require_once "conexion.php";

   /* Clase que conecta con la BBDD */

   class ModeloForms {
    // Método para el registro del usuario en la BBDD
    static public function mdlRegistro($tabla, $datos){

      $stmt = Conexion::conectar() -> prepare
      (
        "INSERT INTO $tabla(nombre,  apellidos, correo, password, tipo) 
        VALUES (:nombre, :apellidos, :correo, :password, :tipo)"
      );
      $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
      $stmt -> bindParam(":apellidos", $datos['apellidos'], PDO::PARAM_STR);
      $stmt -> bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
      $stmt -> bindParam(":password", $datos['password'], PDO::PARAM_INT);
      $stmt -> bindParam(":tipo", $datos['tipo'], PDO::PARAM_STR);

      //print_r($stmt);

      if($stmt -> execute()) return "ok"; 
      else
      {
        $stmt = null; // Si ocurre un error, cerramos "manualmente" la conexión a la BBDD
        return "fail";
      }
    }
    // Método para el la lectura de registros de la BBDD
    static public function mdlSeleccionarRegistros($tabla, $item, $valor) {
      if($item == null && $valor == null)
      {
       $stmt = Conexion::conectar() -> prepare
       (
        "SELECT *, DATE_FORMAT(registro, '%d/%m/%Y') as registro FROM $tabla
        ORDER BY tipo ASC"
       );

       if($stmt -> execute()) 
        return $stmt -> fetchAll(); 
       else
       {
        $stmt = null; // Si ocurre un error, cerramos "manualmente" la conexión a la BBDD
        return "fail";
       }
      }
      else
      {
       $stmt = Conexion::conectar() -> prepare
       (
        "SELECT *, DATE_FORMAT(registro, '%d/%m/%Y') as registro FROM $tabla
        WHERE $item = :$item ORDER BY tipo ASC"
       );

       $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

       if($stmt -> execute()) 
       {
        return $stmt -> fetch(); 
       }
       else
       {
        $stmt = null; // Si ocurre un error, cerramos "manualmente" la conexión a la BBDD
        return "fail";
       }
      } 
    }

    /* Eliminar datos */
    public function mdlEliminarRegistro($tabla, $valor)
    {
      $stmt = Conexion::conectar() -> prepare
       (
        "DELETE FROM $tabla WHERE correo = :correo"
       );

       $stmt -> bindParam(":correo", $valor, PDO::PARAM_STR);

       if($stmt -> execute()) 
        return "ok"; 
       else
       {
        $stmt = null; // Si ocurre un error, cerramos "manualmente" la conexión a la BBDD
        return "fail";
       }  
    }
   }