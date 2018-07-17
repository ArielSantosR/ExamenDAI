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

<div class="container">
	<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title" id="myModalLabel">Editar Datos Ingreso</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        
	      </div>
	      <div class="modal-body">
	        <form action="../../Controller/ControllerEditar.php" method="POST">
	        	<div class="form-group">
				    <label >Email</label>
				    <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>">
				  </div>
				  <div class="form-group">
				    <label >Contraseña</label>
				    <input type="text" class="form-control" name="contrasena" value="<?php echo $_SESSION['contrasena'] ?>">

				  </div>
				  
				  
				  <div class="form-group">
				  	<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">
				  	
				    <input type="hidden" name="accion" value="editarIngresoEmpT">
				    <input class="btn btn-success" type="submit" value="Guardar Cambios">
				  </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
		<div >
	  				<div style="background: #E2F1F0; padding: 10px;">
	  					<div class="row">
	  						<div class="col">
	  							<h4>Datos Personales</h4>
	  						</div>
	  						
	  
	  					</div>
	  				</div>
	  				<div class="row">
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Rut:</p>
				  			<p><?php echo $_SESSION['rutEmpleado'] ?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Nombre:</p>
				  			<p> <?php echo $_SESSION['nombreEmpleado']?></p>
				  		</div>
				  		<div class="col">
				  			<p style="margin: 0; font-weight: bold;">Especialidad:</p>
				  			<p> <?php 
				  				if ($_SESSION['rol']==1) {
				  					echo "Tecnico de Laboratorio";
				  				}else if($_SESSION['rol']==2){
				  					echo "Receptor de Muestras";
				  				}else{
				  					echo "Administrador";
				  				}
				  				?>
				  				
				  			</p>
				  		</div>
				  	</div>
				  	
				  	<div style="background: #E2F1F0; padding: 10px;">
				  		<div class="row">
				  			<div class="col"><h4>Datos de Ingreso</h4></div>
				  			<div class="col">
				  				<div class="contenedor-modal">
								  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal2">Editar</button>
								</div>
				  			</div>
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
			</div>
</div>

<?php include '../Laboratorio/footer.php';?>