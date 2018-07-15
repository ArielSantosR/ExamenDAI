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
  <h2>Muestras para analizar</h2>
  <p>Por favor haga el análisis de estas muestras:</p>            
  <table class="table">
    <thead></thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>PPM</th>
      </tr>
    </thead>
    <tbody>  
        <?php for ( que mierda pongooo ) { ?>
          <tr>
            <td><?php echo $res['codigo']?></td>
            <td><?php echo $res['tipo']?></td>
            <td><input type="text" name="ppm"></td>
            <td><input type="submit" name="AnalizarMuestra" value="Analizar Muestra" class="btn btn-primary"></td>        
          </tr>
        <?php } ?>
          
    </tbody>    
  </table>
</div>


<?php include 'footer.php';?>