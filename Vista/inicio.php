<?php include 'headerInicio.php';?>
<?php session_start();?>


<div class="jumbotron text-center">
                    <h1>Cliente <?php echo $_SESSION['email'] ?></h1>
                    <p>Tu portal para tus muestras y análisis</p> 
</div>

<?php include 'footer.php';?>