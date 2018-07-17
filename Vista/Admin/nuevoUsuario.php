<?php
	session_start();

	if (empty($_SESSION['email'] || $_SESSION['estado']=='D') || ($_SESSION['tipo'] != "empleado" && $_SESSION['rol'] != "3")) {
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
	<div>
		<center>
			<h4 >Nuevo Usuario Empleado</h4>
			<p>Datos del Empleado</p>
		</center>
	</div>
	<form action="../../Controller/ControllerUsuario.php" method="POST">
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
			      <option value="2">Receptor de Muestras</option>
						<option value="1">Tecnico de Laboratorio</option>
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

<?php include '../laboratorio/footer.php'; ?>