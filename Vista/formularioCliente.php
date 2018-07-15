<?php session_start();?>
<?php include 'headerInicio.php';?>

<div class="container">
<h1>Ingresar Muestra para análisis</h1>

<h5>Seleccione el tipo de análisis que desea hacer en la muestra</h5>
<form action="../Controller/ControllerEnviarMuestra.php" method="POST">
  
<select name="muestra">
  <option disabled>Seleccione</option>
  <option value="micotoxinas">Detección de Micotoxinas</option>
  <option value="metales">Detección de Metales Pesados</option>
  <option value="plaguicidas">Detección de Plaguicidas Prohibidos</option>
  <option value="marea">Detección de Marea Roja</option>
  <option value="bacterias">Detección de Bacterias Nocivas</option>
</select>

  <?php if ($_SESSION['tipo'] == 'empresa'){ ?>
    <input type="hidden" name="codigo_empresa" value="<?php echo $_SESSION['idEmpresa'] ?>">
  <?php } else if ($_SESSION['tipo'] == 'particular') { ?>
    <input type="hidden" name="codigo_particular" value="<?php echo $_SESSION['idParticular'] ?>">
  <?php } ?>

  <input type="submit" class="btn btn-default" Value="Enviar a Análisis">
</form>
</div>


<?php include 'footer.php';?>