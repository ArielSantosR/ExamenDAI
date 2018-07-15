<?php include 'headerInicio.php';?>

<div class="container">
	<h1>Mis Datos</h1>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ver</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Editar</a>
	  </li>
	  
	</ul>
	<div class="tab-content" id="myTabContent">
	<!--Ver Datos -->
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	
		<?php if($_SESSION['tipo'] == 'particular'): ?>
						echo $_SESSION['tipo'];	echo "<br>";
						echo $_SESSION['nombreParticular'];
						echo $_SESSION['direccionParticular'];  
						echo $_SESSION['telefonoParticular']; 
				<?php	else if($_SESSION['tipo'] == 'empresa') :?>
						echo $_SESSION['tipo']; 
						echo $_SESSION['nombreEmpresa']; 
						echo $_SESSION['direccionEmpresa']; 
				 
<?php endif;	?>
	  

	  </div>
		<!--Editar -->
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	
	  	

	  </div>
	  
	</div>
</div>

<?php include 'footer.php';?>




<?php
	  		if ($_SESSION['tipo'] = "particular"):
	  ?>
	  				<div class="row">
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Rut:</p>
				  			<p><?php echo $_SESSION['rutParticular'] ?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Nombre:</p>
				  			<p> <?php echo $_SESSION['nombreParticular']?></p>
				  		</div>
				  	</div>
				  	<div class="row">
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Dirección:</p>
				  			<p><?php echo $_SESSION['direccionParticular']?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Telefono:</p>
				  			<p><?php echo $_SESSION['telefonoParticular']?></p>
				  		</div>
				  	</div>
				  	<div class="row">
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Correo</p>
				  			<p><?php echo $_SESSION['email']?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Contraseña</p>
				  			<p><?php echo $_SESSION['contrasena']?></p>
				  		</div>
				  	</div>
	  <?php	
	  		else:
	?>
	     CHAO
	<?php	
	  		endif;
	  ?>