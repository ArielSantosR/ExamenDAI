


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
	


	  	<?php
	  		if ($_SESSION['tipo'] == "particular"):
	  ?>			
	  			

	<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title" id="myModalLabel">Editar Datos Personales</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        
	      </div>
	      <div class="modal-body">
	        <form action="../../Controller/ControllerEditar.php" method="POST">
	        	<div class="form-group">
				    <label >Rut</label>
				    <input type="text" class="form-control" name="rutParticular" value="<?php echo $_SESSION['rutParticular'] ?>">
				  </div>
				  <div class="form-group">
				    <label >Nombre</label>
				    <input type="text" class="form-control" name="nombreParticular" value="<?php echo $_SESSION['nombreParticular'] ?>">
				  </div>
				  <div class="form-group">
				    <label >Direcion</label>
				    <input type="text" class="form-control" name="direccionParticular" value="<?php echo $_SESSION['direccionParticular'] ?>">
				  </div>
				  <div class="form-group">
				    <label >Telefono</label>
				    <input type="text" class="form-control" name="telefonoParticular" value="<?php echo $_SESSION['telefonoParticular'] ?>">
				  </div>
				  <div class="form-group">
				  	
				  	<input type="hidden" name="idParticular" value="<?php echo $_SESSION['idParticular'] ?>">
				  	
				    <input type="hidden" name="accion" value="editarParticularPersonal">
				    <input class="btn btn-success" type="submit" value="Guardar Cambios">
				  </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>


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
				    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $_SESSION['email'] ?>">
				  </div>
				  <div class="form-group">
				    <label >Contraseña</label>
				    <input type="text" class="form-control" name="contrasena" pattern=".{3,}" value="<?php echo $_SESSION['contrasena'] ?>">

				  </div>
				  
				  
				  <div class="form-group">
				  	<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">
				  	
				    <input type="hidden" name="accion" value="editarIngreso">
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
	  						<div class="col">
	  							<div class="contenedor-modal">
								  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">Editar</button>
								</div>
							</div>
	  
	  					</div>
	  				</div>
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
	  <?php else: ?>
	  	<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				    <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $_SESSION['email'] ?>">
				  </div>
				  <div class="form-group">
				    <label >Contraseña</label>
				    <input type="text" class="form-control" name="contrasena" pattern=".{3,}"value="<?php echo $_SESSION['contrasena'] ?>">

				  </div>
				  
				  
				  <div class="form-group">
				  	<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario'] ?>">
				  	
				    <input type="hidden" name="accion" value="editarIngreso">
				    <input class="btn btn-success" type="submit" value="Guardar Cambios">
				  </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="modal fade" id="miModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title" id="myModalLabel">Editar Datos Empresa</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        
	      </div>
	      <div class="modal-body">
	        <form action="../../Controller/ControllerEditar.php" method="POST">
	        	<div class="form-group">
				    <label >Rut</label>
				    <input type="text" class="form-control" name="rutEmpresa" value="<?php echo $_SESSION['rutEmpresa'] ?>">
				</div>
	        	<div class="form-group">
				    <label >Nombre</label>
				    <input type="text" class="form-control" name="nombreEmpresa" value="<?php echo $_SESSION['nombreEmpresa'] ?>">
				</div>
				<div class="form-group">
				    <label >Dirección</label>
				    <input type="text" class="form-control" name="direccionEmpresa" value="<?php echo $_SESSION['direccionEmpresa'] ?>">

				</div>
				  
				  
				  <div class="form-group">
				  	<input type="hidden" name="idEmpresa" value="<?php echo $_SESSION['idEmpresa'] ?>">
				  	
				    <input type="hidden" name="accion" value="editarEmpresa">
				    <input class="btn btn-success" type="submit" value="Guardar Cambios">
				  </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="modal fade" id="miModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title" id="myModalLabel">Editar Datos Contacto</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        
	      </div>
	      <div class="modal-body">
	        <form action="../../Controller/ControllerEditar.php" method="POST">
	        	<div class="form-group">
				    <label >Rut</label>
				    <input type="text" class="form-control" name="rutContacto" value="<?php echo $_SESSION['rutContacto'] ?>">
				</div>
	        	<div class="form-group">
				    <label >Nombre</label>
				    <input type="text" class="form-control" name="nombreContacto" value="<?php echo $_SESSION['nombreContacto'] ?>">
				</div>
				<div class="form-group">
				    <label >Telefono</label>
				    <input type="text" class="form-control" name="telefonoContacto" value="<?php echo $_SESSION['telefonoContacto'] ?>">

				</div>
				  
				  
				  <div class="form-group">
				  	<input type="hidden" name="idEmpresaC" value="<?php echo $_SESSION['idEmpresaC'] ?>">
				  	
				    <input type="hidden" name="accion" value="editarContacto">
				    <input class="btn btn-success" type="submit" value="Guardar Cambios">
				  </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	  				<div style="background: #E2F1F0; padding: 10px;">
	  					
	  					<div class="row">
	  						<div class="col">
	  							<h4>Empresa</h4>
	  						</div>
	  						<div class="col">
	  							<div class="contenedor-modal">
								  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal4">Editar</button>
								</div>
	  						</div>
	  					</div>
	  				</div>
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
				  	<div style="background: #E2F1F0; padding: 10px;">
				  		
				  		<div class="row">
				  			<div class="col">
				  				<h4>Contacto</h4>
				  			</div>
				  			<div class="col">
				  				<div class="contenedor-modal">
								  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal5">Editar</button>
								</div>
				  			</div>
				  		</div>
				  	</div>
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
				  			<p style="margin: 0; font-weight: bold;">Telefono:</p>
				  			<p><?php echo $_SESSION['telefonoContacto']?></p>
				  		</div>
				  	</div>
				  	<div style="background: #E2F1F0; padding: 10px;">
				  		
				  		<div class="row">
				  			<div class="col">
				  				<h4>Ingreso</h4>
				  			</div>
				  			<div class="col">
				  				<div class="contenedor-modal">
								  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal3">Editar</button>
								</div>
				  			</div>
				  		</div>
				  	</div>
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




<?php include '../Laboratorio/footer.php';?>




