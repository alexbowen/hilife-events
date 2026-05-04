<?php
require_once __DIR__ . '/../../bootstrap.php';
require APP_ROOT.'/vendor/autoload.php';
$auth = new \Delight\Auth\Auth($database->connection, null);

class User {
  public function isAdmin() {
    return $this->signedIn() && $this->authRoles() === 9;
  }

  public function isCustomer() {
    return $this->signedIn() && $this->authRoles() === 0;
  }

  public function isInternal() {
    return $this->signedIn() && $this->authRoles() > 0;
  }

  public function signedIn() {
    return isset($_SESSION['auth_email']);
  }

  private function authRoles() {
    return isset($_SESSION['auth_roles']) ? $_SESSION['auth_roles'] : null;
  }
}

$user = new User();

header('Content-Type: application/json');

echo json_encode([
    'authenticated' => $auth->isLoggedIn(),
    'is_admin'      => $user->isAdmin(),
    'is_internal'   => $user->isInternal(),
    'is_customer'   => $user->isCustomer(),
]);
?>