<?php
require_once __DIR__ . '/../../../bootstrap.php';
require APP_ROOT.'/vendor/autoload.php';
$auth = new \Delight\Auth\Auth($database->connection, null);
?>