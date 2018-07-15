<?php session_start();?>
<?php include 'headerEmpleadoAdmin.php';?>

<div class="container">
	<div>
		<center>
			<h4 >Nuevo Usuario Empleado</h4>
			<p>Datos del Empleado</p>
		</center>
	</div>
	<form action="../Controller/ControllerUsuario.php" method="POST">
		<div style="width: 50%; margin-left: auto;margin-right: auto;">
			  <div class="form-group">
			    <label class="colorsito" for="formGroupExampleInput">Rut</label>
			    <input type="text" class="form-control" name="rutEmpleado" placeholder="19672XXX-X">
			  </div>
			  <div class="form-group">
			    <label class="colorsito" for="formGroupExampleInput">Nombre</label>
			    <input type="text" class="form-control" name="nombreEmpleado" placeholder="Juan Travol">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Rol</label>
			    <select class="form-control" name="rol">
			      <option >Seleccione</option>
			      <option value="1">Tecnico de Laboratorio</option>
			      <option value="2">Receptor de Muestras</option>
			      <option value="3">Administrador</option>
			      
			    </select>
			  </div>
			  <div class="form-group">
			    <label class="colorsito" for="formGroupExampleInput">Correo</label>
			    <input type="text" class="form-control" name="emailEmpleado" placeholder="j.tra@gmail.com">
			  </div>
			  <div class="form-group">
			    <label class="colorsito" for="formGroupExampleInput">Contraseña</label>
			    <input type="password" class="form-control"  name="passEmpleado">
			  </div>
			  <input type="hidden" name="accion" value="nuevoUsuario">
			  <center><input class="btn btn-dark" type="submit"  value="Agregar"></center>
		</div>
	</form>
	</div>

<?php include 'footer.php'; ?>