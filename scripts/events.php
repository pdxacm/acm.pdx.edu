<?php

require_once(dirname(__FILE__).'/acm.php');
require_once($file_root.'/scripts/spyc/Spyc.php');
require_once($file_root.'/scripts/PHP_markdown/Michelf/Markdown.php');

$events_path = $file_root.'/events.yaml';
$events = file_exists($events_path) ? Spyc::YAMLLoad($events_path) : Array();

function render_event($event_number){
  global $events, $root;
  $event = $events[$event_number];
if($event){
  ?>
<div class='event_full'>
  <h3><?=$event['title']?></h3>
  <sub><?=$event['date']?> - <?=$event['speaker']?></sub>
  <?=\Michelf\Markdown::defaultTransform($event['description'])?>
</div>
    <?php } }


function list_events(){
  global $events, $root;

  $current_date = new DateTime("now");
  ?><h3>Upcoming Events</h3><?php
  $past_events = false;
  foreach ($events as $key => $event)
    {
      $date = DateTime::createFromFormat('m-d-Y',$event['date']);
      ?>
      <p>
         <b>
         <a href="<?=$root?>/events.php?event=<?=$key?>"><?=$event['title']?></a>
         </b>
         </br>
         <sub><?=$date->format('m/d/Y')?> - by <?=$event['speaker']?></sub>
         <br />
         </p>
         <?php
      
         if(!$past_events && $date->getTimestamp() <= $current_date->getTimestamp()){
           $past_events = true;
           ?><h3>Past Events</h3><?php
         }
    }
}

function event_sidebar(){
  global $events, $root;
  
  $current_date = new DateTime("now");
  foreach ($events as $key => $event)
    {
      $date = DateTime::createFromFormat('m-d-Y',$event['date']);
      if($date->getTimestamp() >= $current_date->getTimestamp()){
        ?>
        <p><?=$date->format('D, M d, Y')?>
          <br />
          <a href="<?=$root?>/events.php?event=<?=$key?>"><?=$event['title']?></a>
        </p>
        <?php
       }
      else{
        break;
      }
    }
}

?>
