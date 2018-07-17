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
<!-- crear y cambiar funcion -->
<div class="container">
  <h2>Ingrese los datos</h2>
   <div class="container">
  <p>Por favor ingrese los datos del análisis:</p>
  
  <table class="table">
    <thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>PPM</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody> 
        <tr>
        <form method='POST' action="../../Controller/ControllerIngresoAnalisis.php">
        <input type="hidden" name="id" value="<?php echo $listaAnalisis->getIdAnalisisMuestras(); ?>">
        <td><?php echo $listaAnalisis->getCodigoEmpresa(); echo $listaAnalisis->getCodigoParticular();?></td>
            <td><?php echo $listaAnalisis->getTipo();?></td>
            <td><input type="number" name="PPM" required></td>
            <td><select name="estado">

					<option value="0">0</option>
					<option value="1">1</option>
					
			</select></td>
        </tr>
    </tbody>    
  </table>
</div>

   	<input type="submit" name="PublicarAnalisis" value="Publicar Análisis" class="btn btn-primary">

    </form>
</div>


<?php include '../Laboratorio/footer.php';?>
