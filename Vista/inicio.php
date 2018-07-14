<?php include 'headerInicio.php';?>

<?php
	if (empty($_SESSION['email'])) {
		header("Location: ../Vista/login.php");
	}
?>


<div class="jumbotron text-center">
                    <h1>Cliente <?php echo $_SESSION['email'] ?></h1>
                    <p>Tu portal para tus muestras y análisis</p> 

					<?php if($_SESSION['tipo'] == 'particular') { 
						echo $_SESSION['tipo'];	
						echo $_SESSION['nombreParticular'];
						echo $_SESSION['direccionParticular']; 
						echo $_SESSION['telefonoParticular'];
					} else if($_SESSION['tipo'] == 'empresa') {
						echo $_SESSION['idEmpresa'];
						echo $_SESSION['tipo'];
						echo $_SESSION['nombreEmpresa'];
						echo $_SESSION['direccionEmpresa']; 
					} 
					?>
                    
</div>

<?php include 'footer.php';?>