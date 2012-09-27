<?php

spl_autoload_register(function($class) {

  foreach (array('classes', 'traits') as $dir) {
    $file = "$dir/$class.php";
    if (file_exists($file)) {
      include $file;
    }
  }

});
