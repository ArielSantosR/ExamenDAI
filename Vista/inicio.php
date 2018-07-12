<?php include 'headerInicio.php';?>

<?php 
if (empty($_POST['email']) ) {
	header("Location: ../Vista/login.php");
}

?>

<div class="jumbotron text-center">
                    <h1>Cliente <?php echo $_POST['email'] ?></h1>
                    <p>Tu portal para tus muestras y análisis</p> 
</div>

<?php include 'footer.php';?>