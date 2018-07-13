<?php include 'headerInicio.php';?>

<?php
	if (empty($_SESSION['email'])) {
		header("Location: ../Vista/login.php");
	}
?>


<div class="jumbotron text-center">
                    <h1>Cliente <?php echo $_SESSION['email'] ?></h1>
                    <p>Tu portal para tus muestras y análisis</p> 

                    <?php echo $_SESSION['contrasena'] ?> 
					<?php	echo $_SESSION['tipo'] ?>
					<?php	echo $_SESSION['nombreParticular']  ?>
					<?php	echo $_SESSION['direccionParticular'] ?>
					<?php	echo $_SESSION['telefonoParticular'] ?>
					
                    
</div>

<?php include 'footer.php';?>