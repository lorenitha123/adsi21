<?php
define("ds", $DICTORY_SEPARATOR);
define(root,  realpath(dirname(_FILE_)) . ds);

require_once APP_PATH ."config.php";
require_once APP_PATH .'paqueat.php';
require_once APP_PATH .'bootatrap.php';
require_once APP_PATH .'controlador.php';
require_once APP_PATH .'model.php';
require_once APP_PATH .'view.php';
require_once APP_PATH .'registro.php';

echo "<pre>";print_r(get_required_files());
?>

