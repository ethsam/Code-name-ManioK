<?php

  function connectDb() {
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8;', DATABASE_USER, DATABASE_PASSWORD);
    return $db;
  }

  function getCompareLogin($array) {
    $db = connectDb();
      $result = $db->query('SELECT * FROM users WHERE email="'.$array['login'].'" AND password="'.md5($array['password']).'"');
        $result = $result->fetch();
    return $result;
  }
?>
