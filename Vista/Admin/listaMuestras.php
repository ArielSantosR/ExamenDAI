<?php
	session_start();

	if (empty($_SESSION['email'] || $_SESSION['estado']=='D') || ($_SESSION['tipo'] != "empleado" && $_SESSION['rol'] != "3")) {
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
  require_once '../../Modelo/conexion.php';
  $db = new ConexionBD(); 
?>

<div class="container">
  <center><h3>Lista Muestras</h3></center>
   <div>
   	<form action="../Admin/Buscar.php" method="POST">
   		<p>Buscar por id</p>
	   	<input type="text" name="idAnalisisMuestras">
	   	<input class="btn btn-primary" type="submit" value="Buscar">
   	</form>
   </div>  
  
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Id </th>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha Recepcion</th>
      <th scope="col">Temperatura</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
      <th scope="col">Estado</th>
     
    </tr>
  </thead>
  <tbody>
   <?php
          try{
            
              $sentencia = $gbd->query('SELECT * FROM  analisismuestras ');

              while ($filas = $sentencia->fetch(PDO::FETCH_ASSOC)){
              echo "<tr>";
              echo "<td>"; echo $filas['idAnalisisMuestras']; echo "</td>";
              
              if ($filas['codigo_empresa']!=null) {
              	$id=$filas['codigo_empresa'];
              	$datos = $gbd->prepare('SELECT nombreEmpresa FROM empresa WHERE idEmpresa = :id');
				$datos->bindParam(':id', $id);
				$datos->execute();
				$resultadoNombre = $datos->fetch(PDO::FETCH_ASSOC);
              	echo "<td>"; echo $resultadoNombre['nombreEmpresa']; echo "</td>";
              }else{
              	if ($filas['codigo_particular']!=null) {
              		$id=$filas['codigo_particular'];
	              	$datos = $gbd->prepare('SELECT nombreParticular FROM particular WHERE idParticular = :id');
					$datos->bindParam(':id', $id);
					$datos->execute();
					$resultadoNombre = $datos->fetch(PDO::FETCH_ASSOC);
	              	echo "<td>"; echo $resultadoNombre['nombreParticular']; echo "</td>";
              	}
              }
              
              
              echo "<td>"; echo $filas['fechaRecepcion']; echo "</td>";
              echo "<td>"; echo $filas['temperaturaMuestra']; echo "</td>";
              echo "<td>"; echo $filas['cantidadMuestra']; echo "</td>";
            
              echo "<td>"; echo $filas['tipo']; echo "</td>";
              //F= enviado por cliente
				//T= recibido por empleado, donde coloca todos los datos faltantes
				//A= terminado de ser analizado
              if ($filas['estado']=="F") {
              	echo "<td>"; echo "Enviado por cliente"; echo "</td>";
              }else if($filas['estado']=="T"){
              	echo "<td>"; echo "Analisis en proceso"; echo "</td>";
              }else if($filas['estado']=="A"){
              	echo "<td>"; echo "Analisis Finalizado"; echo "</td>";
              }
              

              
          echo "</tr>"; 
          }
        }
        catch(PDOException $e)
        {
        echo $e->getMessage();
          return false;
        } 
        ?>
    
  </tbody>
</table>

</div>


<?php include '../Laboratorio/footer.php';?>