<?php
  //inclusion des fichiers de configuration
  include_once '_config/config.php';
  include_once '_config/db.php';
  include_once '_functions/functions.php';
  include_once '_classes/Autoloader.php';

  //Call Autoloader register function
  Autoloader::register();

  //Get page name
  if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
  } else {
    $page = 'home';
  }

  //Array with all pages
  $allPages = scandir('controllers/');

  //Verification page exist
  if (in_array($page.'_controller.php', $allPages)) {

    // Pages ( Model, view and controller ) include
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

  } else {

    // return 404 error
    include_once 'views/includes/error_404.php';

  }

?>
