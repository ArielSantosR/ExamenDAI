<?php
	session_start();

	if (empty($_SESSION['email'] || $_SESSION['estado']=='D') || $_SESSION['tipo']!='empleado') {
		header('location: ../Laboratorio/login.php');
	}else{
		if($_SESSION['tipo']== "empresa" || $_SESSION['tipo']== "particular"){
			 include '../Cliente/headerInicio.php';
		}else{
			if($_SESSION['tipo']== "empleado"){
				switch ($_SESSION['rol']) {
				    case 3:
				        include '../Admin/headerEmpleadoAdmin.php';
				        break;
				    case 2:
				        include '../EmpleadoReceptor/headerEmpleadoReceptor.php';
				        break;
				    case 1:
				        include '../EmpleadoTecnico/headerEmpleadoTecnico.php';
				        break;
				}
			}
		}
	}
?>

<?php
    require '../../Modelo/conexion.php';
    require_once '../../Controller/ControllerMostrarMuestras.php';
    $db = new ConexionBD();
    global $gbd;

    $analisis = new ControladorMuestras();
    $listaAnalisis = $analisis->obtenerMuestrasId($_POST['id']);             
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
    <thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>Temperatura</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody> 
        <form method='POST' action="../../Controller/ControllerEditarMuestra.php">
        <tr>

        <input type="hidden" name="id" value="<?php echo $listaAnalisis->getIdAnalisisMuestras(); ?>">
        <input type="hidden" name="rutEmpleado" value="<?php echo $_SESSION['rutEmpleado'] ?>">

        <td><?php echo $listaAnalisis->getCodigoEmpresa(); echo $listaAnalisis->getCodigoParticular();?></td>
            <td><?php echo $listaAnalisis->getTipo();?></td>
            <td><input type="number" name="temperatura" required></td>
            <td><input type="number" name="cantidad" required></td>
        </tr>
        
    </tbody>    
  </table>
</div>

   	<input type="submit" name="EnviarAnalisis" value="Enviar a Análisis" class="btn btn-primary">
       </form>

</div>


<?php include '../Laboratorio/footer.php';?>