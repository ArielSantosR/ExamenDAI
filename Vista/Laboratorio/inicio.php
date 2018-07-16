<?php
	session_start();

	if (empty($_SESSION['email'] || $_SESSION['estado']=='D')) {
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


<div class="jumbotron text-center">
    <h1><?php echo $_SESSION['tipo']?> <?php echo $_SESSION['email'] ?></h1>
	<p>Tu portal para tus muestras y análisis</p>                     
</div>

<?php include '../Laboratorio/footer.php';?>