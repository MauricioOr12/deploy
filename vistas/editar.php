<?php 
require_once('plantilla/header.php');
require_once('../app/libs/Class.bdatos.php');
require_once('../app/config/Config.php');

$id =$_GET['id'];
$sql = "SELECT * from publicacion where idpublicacion='$id'";
$usuario = new Bdatos();
$datos =$usuario->listarRegistros($sql);

?>
<form action="../app/editarpublicacion.php" method="post">
    <input type="hidden" name="id" value=<?php echo $datos[0]->idpublicacion;?>>
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" value=<?php echo $datos[0]->fecha;?> id="">

    <label for="detalle"></label>
    <textarea name="detalle" id="" cols="30" rows="10"><?php  echo $datos[0]->detalle;?></textarea>
    <input type="reset" value="Cancelar">
    <input type="submit" value="guardar" id="guardar">
</form>


<!-- <script src="assets/js/editar.js"></script> -->
<?php 
require_once('plantilla/footer.php');
?>