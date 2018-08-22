<?php
  $sessionAdmin = $_SESSION['login'];

  if ($sessionAdmin[0] != 1) {
        header('Location: login');
    }

?>
