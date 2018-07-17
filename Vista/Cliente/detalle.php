<?php
	session_start();
	if (empty($_SESSION['email'] || $_SESSION['estado']=='D') || $_SESSION['tipo']=='empleado') {
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
	$db = new ConexionBD();
	global $gbd;
	require_once '../../Controller/ControllerResultado.php';
	
	$analisis = new ControladorResultado();
    $listaAnalisis = $analisis->obtenerResultado($_POST['id']);


?>
<div class="container"> 
<h1>Detalle Muestra N°<?php echo $_POST['id'] ?></h1>
  <table class="table">
    <thead></thead>
      <tr>

        <th>Fecha de Registro</th>
		<th>PPM</th>
		<th>Estado</th>
        
      </tr>
    </thead>
    <tbody></tbody>
			<?php foreach($listaAnalisis as $lista){ ?>
			<tr>
            <?php $_SESSION['idAnalisisMuestras'] = $lista->getIdAnalisisMuestras(); ?>
                <td><?php echo $lista->getFechaRegistro(); ?></td>
				<td><?php echo $lista->getPPM(); ?></td>
				<?php if ($lista->getEstado()==0){ ?>
					<td>Ausencia</td>
				<?php } ?>

				<?php if ($lista->getEstado()==1){ ?>
					<td>Presencia</td>
				<?php } ?>

				
			</tr>
			<?php } ?>
    </tbody>    
  </table>
</div>

<?php include '../laboratorio/footer.php';?>