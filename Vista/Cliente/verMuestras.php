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
<h1>Lista de Muestras</h1>
<?php
    require '../../Modelo/conexion.php';
    require_once '../../Controller/ControllerMostrarMuestras.php';
    $db = new ConexionBD();
	global $gbd;
	$analisis = new ControladorMuestras();

	if (!empty($_SESSION['idEmpresa'])){
		$idE = $_SESSION['idEmpresa']; 
		$listaAnalisise = $analisis->obtenerMuestrasEmpresa($idE);
	}
	if (!empty($_SESSION['idParticular'])){
		$idP = $_SESSION['idParticular'];
		$listaAnalisisp = $analisis->obtenerMuestrasParticular($idP);
	}
	
	
?>

<div class="container">          
  <table class="table">
    <thead></thead>
      <tr>

        <th>Tipo de Análisis Requerido</th>
		<th>Estado</th>
		<th>Detalles</th>
        
      </tr>
    </thead>
    <tbody></tbody>
		<?php if (!empty($_SESSION['idEmpresa'])){ ?>
			<?php foreach($listaAnalisise as $lista){ ?>
			<tr>
				<td><?php echo $lista->getTipo(); ?></td>
				<td><?php echo $lista->getEstado() ?></td>
				<?php ?>
						<td><!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button></td>
			</tr>
			<?php } ?>
		<?php } ?>	
		<?php if (!empty($_SESSION['idParticular'])){ ?>
			<?php foreach($listaAnalisisp as $lista){ ?>
			<tr>
				<td><?php echo $lista->getTipo(); ?></td>
				<td><?php echo $lista->getEstado() ?></td>
				<?php ?>
					<td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button></td></td>
			</tr>
        	<?php } ?>
		<?php } ?>
    </tbody>    
  </table>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalle del Análisis</h4>
      </div>
      <div class="modal-body">
        <p>Datos de resultado analisis</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<?php include '../laboratorio/footer.php';?>
