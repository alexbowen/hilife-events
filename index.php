<?php
require_once __DIR__ . '/bootstrap.php';
define('ASSETS_URL', '/events/assets/production/');
session_start();
include (APP_ROOT . '/lib/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $regions[$_GET['region']]["page_title"]; ?></title>
    <?php include ('templates/head/meta.php'); ?>
    <?php include ('templates/head/scripts.php'); ?>
    <?php include ('templates/head/links.php'); ?>
    <link rel="stylesheet" href="<?php echo WP_BASE_URL; ?>/wp-content/themes/twentytwentyfive/assets/css/hilife-header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lekton:wght@700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  </head>

  <body>
    <?php include ('templates/head/gtm.php'); ?>

    <header>
      <div class="navigation-container">
        <?php include ('templates/navigation.php'); ?>
        <div class="header-fade"></div>
      </div>
    </header>

    <main role="main">
      <?php include ('templates/notification.php'); ?>
      <div class="container">
        <?php include ('pages/'.$_GET['page_name'].'.php'); ?>
      </div>
    </main>

    <?php include ('templates/cookies.php'); ?>

    <footer>
      <div class="footer-fade"></div>
      <?php include ('templates/footer.php'); ?>
    </footer>
  </body>
</html>
