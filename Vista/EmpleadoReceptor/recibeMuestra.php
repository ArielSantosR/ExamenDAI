<?php session_start();?>
<?php include 'headerEmpleadoReceptor.php';?>

<?php
    require '../../Modelo/conexion.php';
    require_once '../../Controller/ControllerMostrarMuestras.php';
    $db = new ConexionBD();
    global $gbd;
    $analisis = new ControladorMuestras();
    $listaAnalisis = $analisis->obtenerMuestrasEmpresa();
    //$query = "SELECT * from analisisMuestras  inner join empresa on codigo_empresa = idEmpresa where estado='F'";  
    //$query2 = "SELECT * from analisisMuestras inner join particular on codigo_particular = idParticular where estado='F'";
?>

<div class="container">
  <h2>Muestras recibidas</h2>
  <p>Por favor haga el ingreso de estas muestras:</p>            
  <table class="table">
    <thead></thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>Ingresar Muestra</th>
      </tr>
    </thead>
    <tbody></tbody>
        <?php foreach($listaAnalisis as $lista){ ?>
          <tr>
            <?php echo print_r($lista) ?> 
            
            <td><?php echo $lista->getCodigoEmpresa(); echo $lista->getCodigoParticular(); ?></td>
            <td><?php echo $lista->getTipo(); ?></td>
            <td><input type="submit" name="IngresarMuestra" value="Ingresar Muestra" class="btn btn-primary"></td>        
          </tr>
        <?php } ?>
    </tbody>    
  </table>
</div>


<?php include '../laboratorio/footer.php';?>