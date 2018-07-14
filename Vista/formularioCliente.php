<?php include 'headerInicio.php';?>

<div class="container">
<h1>Ingresar Muestra para análisis</h1>


<form action="ControllerEnviarMuestra.php">
  
<select name="muestra">
  <option disabled>Seleccione</option>
  <option value="micotoxinas">Detección de Micotoxinas</option>
  <option value="metales">Detección de Metales Pesados</option>
  <option value="plaguicidas">Detección de Plaguicidas Prohibidos</option>
  <option value="marea">Detección de Marea Roja</option>
  <option value="bacterias">Detección de Bacterias Nocivas</option>
</select>
  <input type="submit" class="btn btn-default" Value="Enviar a Análisis">
</form>

</div>


<?php include 'footer.php';?>