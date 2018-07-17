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
    require_once '../../Controller/ControllerMostrarMuestras.php';
    $db = new ConexionBD();
		global $gbd;
		$analisis = new ControladorMuestras();

		if (!empty($_SESSION['idEmpresa'])){
			$idE = $_SESSION['idEmpresa']; 
			$listaAnalisise = $analisis->obtenerMuestrasEmpresa($idE);
			$listaAnalisisel = $analisis->obtenerMuestrasEmpresaListas($idE);
		}
		if (!empty($_SESSION['idParticular'])){
			$idP = $_SESSION['idParticular'];
			$listaAnalisisp = $analisis->obtenerMuestrasParticular($idP);
			$listaAnalisispl = $analisis->obtenerMuestrasParticularListas($idP);
		}
	
	
?>

<div class="container"> 
<h1>Lista de Muestras</h1>
  <table class="table">
    <thead></thead>
      <tr>

    <th>Tipo de Análisis Requerido</th>
		<th>Estado</th>
		<th>Cantidad</th>
		<th>Temperatura</th>
		<th>Fecha de Recepción</th>
		<th>Detalles</th>
        
      </tr>
    </thead>
    <tbody></tbody>
		<?php if (!empty($_SESSION['idEmpresa'])){ ?>
		
			<?php foreach($listaAnalisise as $lista){ ?>
			<tr>
				<td><?php echo $lista->getTipo(); ?></td>
				<td><?php echo $lista->getEstado() ?></td>
				<td><?php echo $lista->getCantidadMuestra() ?></td>
				<td><?php echo $lista->getTemperaturaMuestra() ?></td>
				<td><?php echo $lista->getFechaRecepcion() ?></td>
				<?php ?>
							
						</tr>
			<?php } ?>
		<?php } ?>	
		<?php if (!empty($_SESSION['idEmpresa'])){ ?>
		
		<?php foreach($listaAnalisisel as $lista){ ?>
		<tr>
		<form method='POST' action='detalle.php'>
		<input type="hidden" name="id" value="<?php echo $lista->getIdAnalisisMuestras() ?>">

			<td><?php echo $lista->getTipo(); ?></td>
			<td><?php echo $lista->getEstado() ?></td>
			<td><?php echo $lista->getCantidadMuestra() ?></td>
			<td><?php echo $lista->getTemperaturaMuestra() ?></td>
			<td><?php echo $lista->getFechaRecepcion() ?></td>
			<?php ?>
					<td>	<input type="submit" value="Detalle" class="btn btn-info"></td>		
					</tr>
					</form>
		<?php } ?>
	<?php } ?>	

		
		<?php if (!empty($_SESSION['idParticular'])){ ?>
			
			<?php foreach($listaAnalisisp as $lista){ ?>
			<tr>
			

				<td><?php echo $lista->getTipo(); ?></td>
				<td><?php echo $lista->getEstado() ?></td>
				<td><?php echo $lista->getCantidadMuestra() ?></td>
				<td><?php echo $lista->getTemperaturaMuestra() ?></td>
				<td><?php echo $lista->getFechaRecepcion() ?></td>
				<?php ?>
				
			</tr>
			
        	<?php } ?>
					
		<?php } ?>
		<?php if (!empty($_SESSION['idParticular'])){ ?>
			
			<?php foreach($listaAnalisispl as $lista){ ?>
			<tr>
			<form method='POST' action='detalle.php'>
			<input type="hidden" name="id" value="<?php echo $lista->getIdAnalisisMuestras() ?>">

				<td><?php echo $lista->getTipo(); ?></td>
				<td><?php echo $lista->getEstado() ?></td>
				<td><?php echo $lista->getCantidadMuestra() ?></td>
				<td><?php echo $lista->getTemperaturaMuestra() ?></td>
				<td><?php echo $lista->getFechaRecepcion() ?></td>
				<?php ?>
				<td><input type="submit" value="Detalle" class="btn btn-info">	</td>	
			</tr>
			</form>
        	<?php } ?>
					
		<?php } ?>

    </tbody>    
  </table>
</div>

<?php include '../laboratorio/footer.php';?>
