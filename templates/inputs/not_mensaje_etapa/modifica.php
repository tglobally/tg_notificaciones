<?php /** @var  \tglobally\notificaciones\controllers\controlador_not_mensaje_etapa $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->not_mensaje_id; ?>
<?php echo $controlador->inputs->pr_etapa_proceso_id; ?>
<?php include (new views())->ruta_templates.'botons/submit/modifica_bd.php';?>