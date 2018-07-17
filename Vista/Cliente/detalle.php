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
    require_once '../../Controller/ControllerResultado.php';
    $db = new ConexionBD();
		global $gbd;
        $listaAnalisis = obtenerResultado();

?>
<div class="container"> 
<h1>Detalle</h1>
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
				<?php echo "sesion: ", $_SESSION['idAnalisisMuestras'] ?>
                <td><?php echo $lista->getfechaRegistro(); ?></td>
				<td><?php echo $lista->getPPM(); ?></td>
				<td><?php echo $lista->getEstado() ?></td>
			</tr>
			<?php } ?>
    </tbody>    
  </table>
</div>

<?php include '../laboratorio/footer.php';?>