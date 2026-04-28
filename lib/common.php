<?php
include (APP_ROOT . '/lib/utils.php');
include (APP_ROOT . '/config/environment.php');
include (APP_ROOT . '/lib/database.php');

include (APP_ROOT.'/config/regions.php');
$region_url_prefix = isset($_GET['region']) && $_GET['region'] != "leeds" ? "/" . $_GET['region'] : "";
?>