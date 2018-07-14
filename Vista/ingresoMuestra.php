<?php include 'headerEmpleadoReceptor.php';?>

<?php
    require '../Modelo/conexion.php';
    $db = new ConexionBD();
    global $gbd;

    $query = "SELECT * from analisisMuestras where estado='F'";                
?>
<div class="container">
  <h2>Ingrese los datos correspondientes de la muestra para enviar a análisis</h2>

  <!--
      tabla con los datos de la muestra seleccionada
      mostrar datos de la muestra: codigo de cliente quien mando la muestra, tipo de analisis que quiere para la muestra
      ingresar datos que faltan en la muestra: fecha de recepcion, temperatura y cantidad.
   -->

   	<input type="submit" name="EnviarAnalisis" value="Enviar a Análisis" class="btn btn-primary">


</div>


<?php include 'footer.php';?>