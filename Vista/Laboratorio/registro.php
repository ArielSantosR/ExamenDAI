
<?php include '../Laboratorio/header.php';?>

	<?php session_start();?>
	<?php if(!empty($msj)): ?>
		<p><?= $msj ?></p>
	<?php endif; ?>

	

	<div class="container">

		<p>Necesitamos que se indique si es un Registro como <strong>Particular</strong> o como <strong>Empresa</strong></p>
		<p>Seleccione y complete sus datos</p>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Particular</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Empresa</a>
	  </li>
	  
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	
	  		
		<form class="form-horizontal" action="../../Controller/ControllerRegistroParticular.php" method="POST">
        <fieldset>
        	
        
	        <!-- Form Name -->
	        <h3 style="margin: 3% 0;"><strong>Registro Particular</strong></h3>
	        
				<div class="row">
	      	<div class="col">
	        	<!-- Text input-->
	        	<div style="border-bottom: 1px #4caf50 solid;width: 55%;">
		        	<h4>Datos Personales</h4>
		    		</div>
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-7">
	          	<input name="rutParticular" type="text" oninput="checkRut(this)" placeholder="194756828" class="form-control input-md" required="true">
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-7">
	          	<input name="nombreParticular" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	          </div>
	        </div>
	       

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Dirección</label>  
	          <div class="col-md-7">
	          	<input name="direccionParticular" type="text" placeholder="Los Platanos 234" class="form-control input-md" required="">	            
	          </div>
	        </div>
	        
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="add1">Telefono</label>  
	          <div class="col-md-7">
	          	<input name="telefonoParticular" type="number" placeholder="978097364" class="form-control input-md" required="">
	          </div>
	        </div>
				</div>

				<div class="col">
	        <div style="border-bottom: 1px #006cb8 solid;width: 55%;">
	        	<h4>Datos de Ingreso</h4>
	        </div>
	         <!-- Text input-->
	        
	        	<div class="form-group">
		          <label class="col-md-4 control-label" for="email">Email</label>  
		          <div class="col-md-7">
		          <input name="emailParticular" type="text" placeholder="ar.santos@alumnos.duoc.cl" class="form-control input-md" required="">
		            
		          </div>
		        </div>

		         <!-- Text input-->
		        <div class="form-group">
		          <label class="col-md-4 control-label" for="cmpny">Contraseña</label>  
		          <div class="col-md-7">
		          <input name="passParticular" type="password" placeholder="Contraseña" class="form-control input-md" required="">
		            
		          </div>
		        </div>

		         <!-- Text input-->
		        <div class="form-group">
		          <label class="col-md-4 control-label" for="cmpny">Repetir Contraseña</label>  
		          <div class="col-md-7">
		          <input name="repetPassParticular" type="password" placeholder="Contraseña" class="form-control input-md" required="">
		            
		          </div>
		        </div>
	        
	        
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="registro"></label>
	          <div class="col-md-7">
	          	<input type="submit" name="RegistroParticular" value="Registrarse" class="btn btn-primary">
	          </div>
	        </div>
</div>

        </div>
        </fieldset>
        </form>

	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	
	  	<form class="form-horizontal" action="../../Controller/ControllerRegistroEmpresa.php" method="POST">
        <fieldset>
        
	        <!-- Form Name -->
	        <h3 style="margin: 3% 0;"><strong>Registro Empresa</strong></h3>
	        
	        <div class="row">
	        <!-- Text input-->
	        <div class="col">

	        <div style="border-bottom: 1px #4caf50 solid;width: 90%;">
	        	<h4>Datos Empresa</h4>
	        </div>
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-9">
	          <input name="rutEmpresa" type="text" placeholder="194756828" oninput="checkRut(this)" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-9">
	          <input name="nombreEmpresa" type="text" placeholder="Fabrica Muestras A.S" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	       
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Dirección</label>  
	          <div class="col-md-9">
	          <input  name="direccionEmpresa" type="text" placeholder="Los Platanos 234" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        </div>
	        <div class="col">
	        <div style="border-bottom: 1px #4caf50 solid;width: 90%;">
	        	<h4>Persona de contacto</h4>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-10">
	          <input  name="rutContacto" type="text" oninput="checkRut(this)" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-10">
	          <input  name="nombreContacto" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="add1">Telefono</label>  
	          <div class="col-md-10">
	          <input name="telefonoContacto" type="number" placeholder="978097364" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        </div>
	        <div class="col">
	        <div style="border-bottom: 1px #006cb8 solid;width: 90%;">
	        	<h4>Datos de Ingreso</h4>
	        </div>
	          <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Email</label>  
	          <div class="col-md-10">
	          <input  name="emailContacto" type="text" placeholder="ar.santos@alumnos.duoc.cl" class="form-control input-md" required="">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="cmpny">Contraseña</label>  
	          <div class="col-md-10">
	          <input  name="contrasenaEmpresa" type="password" placeholder="Contraseña" class="form-control input-md" required="">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="cmpny">Repetir Contraseña</label>  
	          <div class="col-md-10">
	          <input  name="RcontrasenaEmpresa" type="password" placeholder="Contraseña" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="registro"></label>
	          <div class="col-md-9">
	          	<input type="submit" name="RegistroParticular" value="Registrarse" class="btn btn-primary">
	          </div>
	        </div>
	        </div>

        	</div>
        </fieldset>
        </form>
	  </div>
	</div>
</div>

<script src="../js/validacion.js"></script> 
<?php include '../Laboratorio/footer.php'; ?>