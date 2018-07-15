<?php include 'headerEmpleadoReceptor.php';?>

<?php
    require '../Modelo/conexion.php';
    $db = new ConexionBD();
    global $gbd;

    $query = "SELECT * from analisisMuestras";                
?>
<div class="container">
  <h2>Ingrese los datos correspondientes de la muestra para enviar a análisis</h2>

  <!--
      tabla con los datos de la muestra seleccionada
      mostrar datos de la muestra: codigo de cliente quien mando la muestra, tipo de analisis que quiere para la muestra
      ingresar datos que faltan en la muestra: fecha de recepcion, temperatura, cantidad y rut de empleado que recibio.
      rut empleado y fecha recepcion sera automatico
   -->
   <div class="container">
  <p>Por favor ingrese los datos correspondientes a la muestra:</p>            
  <table class="table">
    <thead></thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>Temperatura</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>      
        <tr>
            <td><?php echo $res['codigo']?></td>
            <td><?php echo $res['tipo']?></td>
            <td><input type="text" name="temperatura"></td>
            <td><input type="text" name="cantidad"></td>
        </tr>
    </tbody>    
  </table>
</div>

   	<input type="submit" name="EnviarAnalisis" value="Enviar a Análisis" class="btn btn-primary">


</div>


<?php include 'footer.php';?>