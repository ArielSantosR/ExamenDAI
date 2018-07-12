

<?php include 'header.php';?>

	<?php session_start();?>
	<?php if(!empty($message)): ?>
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
	  	
	  		
		<form class="form-horizontal" action="">
        <fieldset>
        
	        <!-- Form Name -->
	        <center><h3><strong>Registro Particular</strong></h3></center>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-4">
	          <input id="txtrut" name="Rut" type="text" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-4">
	          <input id="txtnombre" name="nombre" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="cmpny">Contraseña</label>  
	          <div class="col-md-4">
	          <input id="txtcontrasena" name="contrasena" type="password" placeholder="Contraseña" class="form-control input-md" required="">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Dirección</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="direccion" type="text" placeholder="Los Platanos 234" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Email</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="txtemail" type="text" placeholder="ar.santos@alumnos.duoc.cl" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="add1">Telefono</label>  
	          <div class="col-md-4">
	          <input id="txtnumber" name="txtnumber" type="number" placeholder="978097364" class="form-control input-md" required="">
	            
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
	  	
	  	<form class="form-horizontal" action="">
        <fieldset>
        
	        <!-- Form Name -->
	        <center><h3><strong>Registro Empresa</strong></h3></center>
	        
	        <!-- Text input-->
	        <center><h4>Datos Empresa</h4></center>
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-4">
	          <input id="txtrut" name="Rut" type="text" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-4">
	          <input id="txtnombre" name="nombre" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	            
	          </div>
	        </div>
	        
	       
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Dirección</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="direccion" type="text" placeholder="Los Platanos 234" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	         <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="cmpny">Contraseña</label>  
	          <div class="col-md-4">
	          <input id="txtcontrasena" name="contrasena" type="password" placeholder="Contraseña" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        <center><h4>Persona de contacto</h4></center>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="fn">Rut</label>  
	          <div class="col-md-4">
	          <input id="txtrut" name="Rut" type="text" placeholder="194756828" class="form-control input-md" required="true">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="ln">Nombre</label>  
	          <div class="col-md-4">
	          <input id="txtnombre" name="nombre" type="text" placeholder="Ariel Santos" class="form-control input-md" required="true">
	            
	          </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="email">Email</label>  
	          <div class="col-md-4">
	          <input id="txtemail" name="txtemail" type="text" placeholder="ar.santos@alumnos.duoc.cl" class="form-control input-md" required="">
	            
	          </div>
	        </div>
	        
	        <!-- Text input-->
	        <div class="form-group">
	          <label class="col-md-4 control-label" for="add1">Telefono</label>  
	          <div class="col-md-4">
	          <input id="txtnumber" name="txtnumber" type="number" placeholder="978097364" class="form-control input-md" required="">
	            
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