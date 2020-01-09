<?php
  function filter_php_file($element_file_name){
    return !is_dir($element_file_name)
            && stripos(strrev($element_file_name), "php.") === 0
            && $element_file_name !== "index.php";
  }