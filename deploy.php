<?php

require_once(dirname(__FILE__)."/../secret.php");
if ($secret == $_GET['secret']){
  $json = json_decode($_POST['payload']);
  if(preg_match('/\/master$/', $stuff->ref){
    echo "Woot";
    echo exec(dirname(__FILE__)."/../deploy.sh");
    echo "Updated";
  }
}

?>
