<?php /** @var  \tglobally\notificaciones\controllers\controlador_not_receptor $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->email; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd.php';?>