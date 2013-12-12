<?php
   $title = "ACM @ PSU - Events";
   $section = 'events';
   require_once(dirname(__FILE__).'/scripts/top.php');

  $event = $events[$_GET['event']];
  if($event){ ?>
    <div class='event_full'>
      <h1><?=$event['title']?></h1>
      <sub><?=$event['date']->format('m/d/Y')?> - <?=$event['speaker']?></sub>
      <?php if($event['github']){?><p><a href="<?=$event['github']?>">Source code</a></p><?php }?>
	  <?php if($event['tutorial']){?><p><a href="<?=$event['tutorial']?>">Tutorial</a></p><?php }?>
	  <?php if($event['slides']){?><p><a href="<?=$event['slides']?>">Slides</a></p><?php }?>
      <?php if($event['ndas']){?><p><a href="<?=$event['ndas']?>"></a></p><?php }?>
<?=\Michelf\Markdown::defaultTransform($event['description'])?>
    </div>
<?php }
require_once(dirname(__FILE__).'/scripts/bottom.php')
?>
