<?php
require_once __DIR__ . '/../../../bootstrap.php';
session_start();
include (APP_ROOT . '/lib/notify.php');
require APP_ROOT.'/vendor/autoload.php';
$auth = new \Delight\Auth\Auth($database->connection, null);

try {
  $auth->admin()->deleteUserByEmail($_POST['email']);
  Notify::add('message', 'Account deleted for ' . $_POST['email']);

  header('Location: /');
}
catch (\Delight\Auth\InvalidEmailException $e) {
  Notify::add('error', "Account could not be deleted for " . $_POST['email'] . "\r\nPlease contact us");
}
?>
