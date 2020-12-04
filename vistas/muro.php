<?php 
require_once('plantilla/header.php');
?>


<?php   require_once('../app/listarpublicacion.php'); ?>
<?php  foreach($datos as $valor) : ?>
<div class="publicacion">
    <p> <?php echo $valor->fecha.'-->'. $valor->usuario_idusuario.' Dice:'; ?></p>
    <br>
    <p><?php echo $valor->detalle; ?></p>
</div>
<?php endforeach  ?>


<?php 
require_once('plantilla/footer.php');
?>