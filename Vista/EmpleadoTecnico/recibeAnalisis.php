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
    require '../Modelo/conexion.php';
    require_once '../Controller/ControllerMostrarMuestras.php';
    $db = new ConexionBD();
    $analisis= new AnalisisMuestras();
    $listaAnalisis = $analisis->obtenerMuestrasEmpresa();
?>

<div class="container">
  <h2>Muestras para analizar</h2>
  <p>Por favor haga el análisis de estas muestras:</p>            
  <table class="table">
    <thead></thead>
      <tr>
        <th>Código de Cliente</th>
        <th>Tipo de Análisis Requerido</th>
        <th>PPM</th>
      </tr>
    </thead>
    <tbody>  
        <?php foreach($listaAnalisis as $analisis) {?>
          <tr>
            <td><?php echo $res['codigo']?></td>
            <td><?php echo $res['tipo']?></td>
            <td><input type="text" name="ppm"></td>
            <td><input type="submit" name="AnalizarMuestra" value="Analizar Muestra" class="btn btn-primary"></td>        
          </tr>
        <?php } ?>
          
    </tbody>    
  </table>
</div>


<?php include 'footer.php';?>