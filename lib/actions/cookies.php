<?php
if ($_POST['cookies'] == 'accept') {
  setcookie("cookie-consent", 'accepted', time() + 2630000, "/");
}

if ($_POST['cookies'] == 'decline') {
  setcookie("cookie-consent", 'declined', time() + 2630000, "/");
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
