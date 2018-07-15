
<?php
	session_start();

	if (empty($_SESSION['email'])) {
		echo $_SESSION['email'];
	}else{
		if($_SESSION['tipo']== "empresa" || $_SESSION['tipo']== "particular"){
			 include 'headerInicio.php';
		}else{
			if($_SESSION['tipo']== "empleado"){
				switch ($_SESSION['rol']) {
				    case 3:
				        include 'headerEmpleadoAdmin.php';
				        break;
				    case 2:
				        include 'headerEmpleadoReceptor.php';
				        break;
				    case 1:
				        include 'headerEmpleadoTecnico.php';
				        break;
				}
			}
		}
	}
?>


<div class="jumbotron text-center">
    <h1>Cliente <?php echo $_SESSION['email'] ?></h1>
	<p>Tu portal para tus muestras y análisis</p>                     
</div>

<?php include 'footer.php';?>