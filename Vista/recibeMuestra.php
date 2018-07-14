<?php include 'headerEmpleadoReceptor.php';?>

<?php
    require '../Modelo/conexion.php';
    $db = new ConexionBD();
    global $gbd;

    $query = "SELECT * from analisisMuestras where estado='T'";
?>
<div class="container">
  <h2>Muestras recibidas</h2>
  <p>Por favor haga el ingreso de estas muestras:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Número de telefono</th>
        <th>Tipo de Análisis Requerido</th>
        <th>Ingresar Muestra</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Código de cliente</td>
        <td>numero de telefono del cliente</td>
        <td>tipo de analisis que quiere</td>
        <td>boton que mande a un editar la muestra para agregar los datos que faltan</td>        
      </tr>
      <tr>
        <td>Mary</td>
        <td><?php echo $res['direccion'] ?></td>
        <td><?php echo $res['nombre'] ?></td>
      </tr>
      <tr>
      <td>Código de cliente</td>
        <td>numero de telefono del cliente</td>
        <td>tipo de analisis que quiere</td>
        <td>boton que mande a un editar la muestra para agregar los datos que faltan</td>
      </tr>
    </tbody>
  </table>
</div>


<?php include 'footer.php';?>