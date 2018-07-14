<?php include 'headerEmpleadoReceptor.php';?>

<?php
    require '../Modelo/conexion.php';
    require_once '../Controller/ControllerMostrarMuestras.php'    
    $db = new ConexionBD();
    global $gbd;


    $query = "SELECT * from analisisMuestras  inner join empresa on codigo_empresa = idEmpresa where estado='F'";
    $query2 = "SELECT * from analisisMuestras inner join particular on codigo_particular = idParticular where estado='F'";
?>

<div class="container">
  <h2>Muestras recibidas</h2>
  <p>Por favor haga el ingreso de estas muestras:</p>            
  <table class="table">
    <thead></thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Número de telefono</th>
        <th>Tipo de Análisis Requerido</th>
        <th>Ingresar Muestra</th>
      </tr>
    </thead>
    <tbody> 
        <?php for ( ) { ?>
          <tr>
            <td><?php echo $res['codigo']?></td>
            <td><?php echo $res['telefono']?></td>
            <td><?php echo $res['tipo']?></td>
            <td><input type="submit" name="IngresarMuestra" value="Ingresar Muestra" class="btn btn-primary"></td>        
          </tr>
        <?php } ?>
          
    </tbody>    
  </table>
</div>


<?php include 'footer.php';?>