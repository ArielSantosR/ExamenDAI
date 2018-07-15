<?php session_start();?>
<?php include 'headerEmpleadoAdmin.php';?>
<?php
  require_once '../Modelo/conexion.php';
  $db = new ConexionBD(); 
?>


<div class="container">
  <div class="row">
    <div class="col-md-4" style="margin-bottom: 3%;">
    
       <a class="btn btn-primary" href="nuevoUsuario.php">Nuevo Usuario</a>
   
  </div>
  <div class="col-md-8">
     <h3>Lista Usuarios</h3>
  </div>
  </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Tipo</th>
      <th scope="col">Estado</th>
      <th></th>
      <th></th>

      <th></th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
   <?php
          try{
            
              $sentencia = $gbd->query('SELECT id, email, contrasena, tipo, estado FROM usuario');
            

        
        
        while ($filas = $sentencia->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>"; echo $filas['id']; echo "</td>";
        echo "<td>"; echo $filas['email']; echo "</td>";
        echo "<td>"; echo $filas['contrasena']; echo "</td>";
        echo "<td>"; echo $filas['tipo']; echo "</td>";
      
        echo "<td>"; echo $filas['estado']; echo "</td>";

        if ($filas['estado']=="H") {
           echo "<td>";echo '<form method="POST" action="../Controller/ControllerUsuario.php"';echo "</td>";
           echo "<td>";echo '<input type="hidden" name="accion" value="Deshabilitar">';echo "</td>";echo "</td>";
          echo "<td>";echo '<input type="hidden" name="idUsuario" value="'.$filas['id'].'">';echo "</td>";
          echo "<td>";echo '<input type="submit" value="Deshabilitar" class="btn btn-danger"';echo "</td>";
          echo "<td>";echo "</form>";
        }else{
          echo "<td>";echo '<form method="POST" action="../Controller/ControllerUsuario.php"';echo "</td>";
          echo "<td>";echo '<input type="hidden" name="accion" value="Habilitar">';echo "</td>";echo "</td>";
          echo "<td>";echo '<input type="hidden" name="idUsuario" value="'.$filas['id'].'">';echo "</td>";echo "</td>";
          echo "<td>";echo '<input type="submit" value="Habilitar" class="btn btn-success"';echo "</td>";echo "</td>";
          echo "<td>";echo "</form>";echo "</td>";
        }
       
        
       
        echo "</tr>"; 
      }
        }
        catch(PDOException $e)
        {
        echo $e->getMessage();
          return false;
        } 
        ?>
    
  </tbody>
</table>

</div>


<?php include 'footer.php';?>