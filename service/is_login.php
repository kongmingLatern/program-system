<?php
$login = isset($_COOKIE['uid']) ? $_COOKIE['uid'] : '';

if ($login !== '') {
  return true;
} else {
  return false;
}
?>