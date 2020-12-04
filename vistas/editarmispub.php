<?php
require_once('plantilla/header.php');
?>

<?php  require_once('../app/listarmispub.php'); ?>
<?php  foreach($datos as $valor) : ?>
<div class="publicacion">
    <p> <?php echo $valor->fecha.'-->'. $valor->usuario_idusuario.' Dice:'; ?></p>
    <br>
    <p><?php echo $valor->detalle; ?></p>
    <br>
    <a href="editar.php?id=<?php echo $valor->idpublicacion;?>"><i class="material-icons md-24">edit</i> </a>
    <a href="../app/eliminar.php?id=<?php echo $valor->idpublicacion;?>"><i class="material-icons md-24">delete</i> </a>

</div>
<?php endforeach  ?>
<?php 
require_once('plantilla/header.php');
?>