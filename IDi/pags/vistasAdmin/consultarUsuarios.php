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


<?php
 require_once "../controladores/controladorForm.php"; 
 $usuarios = ControladorForm::ctrSeleccionarUsuarios(null, null);
?>
<a href="?pagina=formDarAlta" class="btn btn-primary" style="margin-left:50rem">Crear cuenta de usuario</a>

<h1 style="text-align: center">Usuarios</h1>

<table class="table table-striped" style="margin-top: 1rem;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
      <th scope="col">Fecha en que se registró</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach($usuarios as $key => $value):  ?>
  
    <tr>
      <td><?php echo $key + 1; ?></td> 
      <td><?php echo $value["nombre"] ?></td>
      <td><?php echo $value["apellidos"] ?></td>
      <td><?php echo $value["correo"] ?></td>
      <td><?php echo $value["tipo"] ?></td>
      <td><?php echo $value["registro"] ?></td>
      <td>
        <div class="btn-group">
          <div class="px-1">
            <a  href="?pagina=editar&correo=<?php echo $value["correo"];?>" class="btn-warning" style="display:inline-block; font-weight:600; color:#212529; text-align:center; vertical-align:middle; border:1px solid transparent; padding:.375rem .75rem; font-size:1rem; line-height:1.5; border-radius:.25rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2.5 -2.5 24 24" width="24" fill="currentColor" style="color:black"><path d="M16.318 6.11l-3.536-3.535 1.415-1.414c.63-.63 2.073-.755 2.828 0l.707.707c.755.755.631 2.198 0 2.829L16.318 6.11zm-1.414 1.415l-9.9 9.9-4.596 1.06 1.06-4.596 9.9-9.9 3.536 3.536z"></path></svg></a>
  </div>
              <div class="px-1">
            <form method="post">
              <input type="hidden" value="<?php echo $value["correo"];?>" name="elimina">
              <button type="submit" class="btn-danger" style="display:inline-block; font-weight:600; color:white; text-align:center; vertical-align:middle; border:1px solid transparent; padding:.375rem .75rem; font-size:1rem; line-height:1.5; border-radius:.25rem"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -2 24 24" width="24" fill="currentColor" style="color:white"><path d="M12 2h5a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm3.8 6l-.613 9.2a3 3 0 0 1-2.993 2.8H5.826a3 3 0 0 1-2.993-2.796L2.205 8H15.8zM7 9a1 1 0 0 0-1 1v7a1 1 0 0 0 2 0v-7a1 1 0 0 0-1-1zm4 0a1 1 0 0 0-1 1v7a1 1 0 0 0 2 0v-7a1 1 0 0 0-1-1z"></path></svg></button>
              <?php
                 $eliminar = new ControladorForm();
                 echo $eliminar -> ctrEliminarRegistro();
              ?>
            </form>
  </div>
        </div>
      </td>
    </tr>

    <?php endforeach ?>
  </tbody>
</table>