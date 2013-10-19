<?php

require_once(dirname(__FILE__)."/../secret.php");
if ($secret == $_GET['secret']){
  echo "Woot";
  echo exec(dirname(__FILE__)."/../deploy.sh");
  echo "Updated";
}

?>
