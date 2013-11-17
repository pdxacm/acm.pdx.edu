<?php
   $title = "ACM @ PSU - Events";
   $section = 'events';
   require_once(dirname(__FILE__).'/scripts/top.php');

  $event = $events[$_GET['event']];
  if($event){ ?>
    <div class='event_full'>
      <h1><?=$event['title']?></h1>
      <sub><?=$event['date']->format('m/d/Y')?> - <?=$event['speaker']?></sub>
      <?=\Michelf\Markdown::defaultTransform($event['description'])?>
    </div>
<?php }
require_once(dirname(__FILE__).'/scripts/bottom.php')
?>
