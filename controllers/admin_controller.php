<?php
  $sessionAdmin = $_SESSION['login'];

  if ($sessionAdmin[0] != 1) {
        header('Location: login');
    }

    $test = new Database();
    var_dump($test);
?>
