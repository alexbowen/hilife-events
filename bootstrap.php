<?php
define('APP_ROOT', __DIR__);
define('APP_URL', '/events');
require_once APP_ROOT . '/config/environment.php';  // secrets, DB etc
require_once APP_ROOT . '/secrets/constants.php';      // DB connection
require_once APP_ROOT . '/lib/database.php';     // app constants
require_once APP_ROOT . '/lib/utils.php';     // app constants

define('WP_BASE_URL', 'http://localhost:10006'); // local
?>