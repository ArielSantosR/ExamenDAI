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
    $listaAnalisis = $analisis->obtenerMuestrasEmpresa();
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
            <td><?php echo $lista->getCodigoEmpresa(); echo $lista->getCodigoParticular(); ?></td>
            <td><?php echo $lista->getTipo(); ?></td>
            <input type="hidden" value="<?php $lista->getId ?>">
            <?php ?>

            <td><input type="submit" name="IngresarMuestra" value="Ingresar Muestra" class="btn btn-primary"></td>        
          </tr>
        <?php } ?>
    </tbody>    
  </table>
</div>


<?php include '../laboratorio/footer.php';?>