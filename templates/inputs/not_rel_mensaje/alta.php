<?php /** @var \tglobally\notificaciones\controllers\controlador_not_rel_mensaje $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>

<?php echo $controlador->inputs->not_mensaje_id; ?>
<?php echo $controlador->inputs->not_receptor_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd.php';?>