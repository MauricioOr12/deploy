<?php 
require_once('plantilla/header.php');  ?>


<form action="../app/insertarpublicacion.php" method="post">
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="">
    <label for="detalle">Detalle:</label>
    <textarea name="detalle" id="" cols="40" rows="20"></textarea>
    <br>
    <input type="reset" value="Cancelar">
    <input type="submit" value="Enviar">
</form>

<?php 
require_once('plantilla/footer.php');
?>