<?php
function generatePsw($length) {
  $characters = '0123456789qwertyuiopasdfghjklzxcvbnm!"$%&/()=?-_';
  $password = '';
  while (strlen($password) < $length) {
    $password .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $password;
}
?>