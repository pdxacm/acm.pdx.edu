<?php

// If running on acm.pdx.edu root is root
if( $_SERVER["HTTP_HOST"] == "acm.pdx.edu") {
  $root = "";
  $production = true;
}
// If accessing at ~psuacm set that as root.
elseif(preg_match('/^\/~psuacm\//',$_SERVER["REQUEST_URI"])){
  $root = '/~psuacm';
  $production = true;
}
// Otherwise assume the user is running with the root as whatever part of the URI matches acm.cat.pdx.edu
else{
  $path_parts = array('');
  preg_match( "/^(.*)acm\.pdx\.edu/", $_SERVER["REQUEST_URI"], $path_parts);
  $root = $path_parts[0].'';
  $production = false;
}

$file_root=dirname(dirname(__FILE__));

if(!isset($title)){
  $title = "ACM @ PSU";
}

if(!function_exists('head_content')){
  function head_content(){
  }
}

if(!function_exists('main_content')){
  function main_content(){
  }
}

function active($target_section){
  global $section;
  if($section == $target_section){
    ?> class="active"<?php
  }
}

?>
