
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


	  	<?php
	  		if ($_SESSION['tipo'] == "particular"):
	  ?>			
	  				<div style="background: #E2F1F0; padding: 10px;"><h4>Datos Personales</h4></div>
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
				  	<div style="background: #E2F1F0; padding: 10px;"><h4>Datos de Ingreso</h4></div>
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

	  <?php else: ?>
	  				<div style="background: #E2F1F0; padding: 10px;"><h4>Empresa</h4></div>
	    			<div class="row">
	    				
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Rut:</p>
				  			<p><?php echo $_SESSION['rutEmpresa'] ?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Nombre:</p>
				  			<p> <?php echo $_SESSION['nombreEmpresa']?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Dirección:</p>
				  			<p><?php echo $_SESSION['direccionEmpresa']?></p>
				  		</div>
				  	</div>
				  	<div style="background: #E2F1F0; padding: 10px;"><h4>Contacto</h4></div>
				  	<div class="row">
				  		
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Rut:</p>
				  			<p><?php echo $_SESSION['rutContacto'] ?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Nombre:</p>
				  			<p> <?php echo $_SESSION['nombreContacto']?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Dirección:</p>
				  			<p><?php echo $_SESSION['telefonoContacto']?></p>
				  		</div>
				  	</div>
				  	<div style="background: #E2F1F0; padding: 10px;"><h4>Ingreso</h4></div>
				  	<div class="row">

				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Email:</p>
				  			<p><?php echo $_SESSION['email']?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Contraseña:</p>
				  			<p><?php echo $_SESSION['contrasena']?></p>
				  		</div>
				  		<div class="col">
				  			
				  		</div>
				  	</div>
	<?php	
	  		endif;
	  ?>
	  	
		
	  

	  </div>
		<!--Editar -->
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	
	  </div>
	  
	</div>
</div>

<?php include '../Laboratorio/footer.php';?>




