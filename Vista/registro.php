

<?php include 'header.php';?>

	<?php session_start();?>
	<?php if(!empty($msj)): ?>
		<p><?= $msj ?></p>
	<?php endif; ?>

	

	<div class="container">

		<p>Necesitamos que se indique si es un Registro como <strong>Particular</strong> o como <strong>Empresa</strong></p>
		<p>Seleccione y complete sus datos</p>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Persona</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Empresa</a>
	  </li>
	  
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	
	  		
		<form class="form-horizontal" action="../Controller/ControllerRegistroParticular.php" method="POST">
        <fieldset>
        
	        <!-- Form Name -->
	        <center><h3><strong>Registro Particular</strong></h3></center>
	        
	        <!-- Text input-->
	        <div style="border-bottom: 1px #4caf50 solid;width: 30%;margin-left: auto;margin-right: auto;">
		        <center><h4>Datos Personales</h4></center>
		    </div>
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-4">
	          <input id="txtrut" name="rutParticular" type="text" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-4">
	          <input id="txtnombre" name="nombreParticular" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	       

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Dirección</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="direccionParticular" type="text" placeholder="Los Platanos 234" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="add1">Telefono</label>  
	          <div class="col-md-4">
	          <input id="txtnumber" name="telefonoParticular" type="number" placeholder="978097364" class="form-control input-md" required="">
	            
	          </div>
	        </div>


	        <div style="border-bottom: 1px #006cb8 solid;width: 30%;margin-left: auto;margin-right: auto;">
	        	<center><h4>Datos de Ingreso</h4></center>
	        </div>
	         <!-- Text input-->
	        
	        	<div class="form-group">
		          <label class="col-md-4 control-label" for="email">Email</label>  
		          <div class="col-md-4">
		          <input id="txtemail" name="emailParticular" type="text" placeholder="ar.santos@alumnos.duoc.cl" class="form-control input-md" required="">
		            
		          </div>
		        </div>

		         <!-- Text input-->
		        <div class="form-group">
		          <label class="col-md-4 control-label" for="cmpny">Contraseña</label>  
		          <div class="col-md-4">
		          <input id="txtcontrasena" name="passParticular" type="password" placeholder="Contraseña" class="form-control input-md" required="">
		            
		          </div>
		        </div>

		         <!-- Text input-->
		        <div class="form-group">
		          <label class="col-md-4 control-label" for="cmpny">Repetir Contraseña</label>  
		          <div class="col-md-4">
		          <input id="txtcontrasena" name="repetPassParticular" type="password" placeholder="Contraseña" class="form-control input-md" required="">
		            
		          </div>
		        </div>
	        
	        
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="registro"></label>
	          <div class="col-md-4">
	          	<input type="submit" name="RegistroParticular" value="Registrarse" class="btn btn-primary">
	          </div>
	        </div>
        
        </fieldset>
        </form>

	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	
	  	<form class="form-horizontal" action="../Controller/ControllerRegistroEmpresa.php" method="POST">
        <fieldset>
        
	        <!-- Form Name -->
	        <center><h3><strong>Registro Empresa</strong></h3></center>
	        
	        <!-- Text input-->
	        <div style="border-bottom: 1px #4caf50 solid;width: 30%;margin-left: auto;margin-right: auto;">
	        	<center><h4>Datos Empresa</h4></center>
	        </div>
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-4">
	          <input id="txtrut" name="rutEmpresa" type="text" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-4">
	          <input id="txtnombre" name="nombreEmpresa" type="text" placeholder="Fabrica Muestras A.S" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	       
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Dirección</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="direccionEmpresa" type="text" placeholder="Los Platanos 234" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	         
	        <div style="border-bottom: 1px #4caf50 solid;width: 30%;margin-left: auto;margin-right: auto;">
	        	<center><h4>Persona de contacto</h4></center>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-4">
	          <input id="txtrut" name="rutContacto" type="text" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-4">
	          <input id="txtnombre" name="nombreContacto" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="add1">Telefono</label>  
	          <div class="col-md-4">
	          <input id="txtnumber" name="telefonoContacto" type="number" placeholder="978097364" class="form-control input-md" required="">
	            
	          </div>
	        </div>

	        <div style="border-bottom: 1px #006cb8 solid;width: 30%;margin-left: auto;margin-right: auto;">
	        	<center><h4>Datos de Ingreso</h4></center>
	        </div>
	          <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Email</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="emailContacto" type="text" placeholder="ar.santos@alumnos.duoc.cl" class="form-control input-md" required="">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="cmpny">Contraseña</label>  
	          <div class="col-md-4">
	          <input id="txtcontrasena" name="contrasenaEmpresa" type="password" placeholder="Contraseña" class="form-control input-md" required="">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="cmpny">Repetir Contraseña</label>  
	          <div class="col-md-4">
	          <input id="txtcontrasena" name="RcontrasenaEmpresa" type="password" placeholder="Contraseña" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        <!-- Button -->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="registro"></label>
	          <div class="col-md-4">
	          	<input type="submit" name="RegistroParticular" value="Registrarse" class="btn btn-primary">
	          </div>
	        </div>
        
        </fieldset>
        </form>

	  </div>
	  
	</div>
	</div>




<?php include 'footer.php'; ?>