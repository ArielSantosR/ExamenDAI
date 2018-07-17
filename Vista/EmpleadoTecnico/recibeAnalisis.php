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
    $analisis= new ControladorMuestras();
    $listaAnalisis = $analisis->obtenerMuestrasRecibidas();
?>

<div class="container"></div>
  <h2>Muestras para analizar</h2>
  <p>Por favor haga el análisis de estas muestras:</p>            
  <table class="table">
    <thead></thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>Analizar</th>
      </tr>
    </thead>
    <tbody>  
    <?php foreach($listaAnalisis as $lista){ ?>
          <tr></tr>
            <td><?php echo $lista->getCodigoEmpresa(); echo $lista->getCodigoParticular(); ?></td>
            <td><?php echo $lista->getTipo(); ?></td>

            <form method='POST' action='../EmpleadoTecnico/ingresoAnalisis.php'>
              <input type="hidden" name="id" value="<?php echo $lista->getIdAnalisisMuestras() ?>">
              <td><input type="submit" name="IngresarAnalisis" value="Ingresar Análisis" class="btn btn-primary"></td>
            </form>
          </tr>
        <?php } ?>
          
    </tbody>    
  </table>
</div>


<?php include '../laboratorio/footer.php';?>