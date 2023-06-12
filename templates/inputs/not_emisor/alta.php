<?php /** @var  \tglobally\notificaciones\controllers\controlador_not_emisor $controlador  controlador en ejecucion */ ?>
<?php use config\views; ?>
<?php echo $controlador->inputs->email; ?>
<?php echo $controlador->inputs->user_name; ?>
<?php echo $controlador->inputs->password; ?>
<?php echo $controlador->inputs->port; ?>
<?php echo $controlador->inputs->host; ?>
<?php echo $controlador->inputs->smtp_secure; ?>
<?php include (new views())->ruta_templates.'botons/submit/alta_bd.php';?>