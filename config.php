<?php

require_once "vendor/autoload.php";

ActiveRecord\Config::initialize(function($cfg) {

  $cfg->set_model_directory('models'); // isikan nama folder yang akan memuat model yang akan kita gunakan
  $cfg->set_connections(array('development' =>
      'mysql://root:root@localhost/compo')); // melakukan set host dan database yang digunakan

});

?>
