<?php


class SecuredController
{

function __construct()
{
  session_start();
  if (isset($_SESSION['User'])){
    if ( isset($_SESSION['LAST_ACTIVITY']) &&
    (time() - $_SESSION['LAST_ACTIVITY'] > 6000)) {
    $this->logout();
    die();
    }
    $_SESSION['LAST_ACTIVITY'] = time();
  }
  else{
    header(HOME);
  }
}

function logout(){
  session_start();
  session_unset();
  session_destroy();
  header(HOME);
}
}
 ?>
