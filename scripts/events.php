<?php

require_once(dirname(__FILE__).'/acm.php');
require_once($file_root.'/scripts/spyc/Spyc.php');
require_once($file_root.'/scripts/PHP_markdown/Michelf/Markdown.php');

$current_date = new DateTime("now");

$events_path = $file_root.'/events.yaml';
$events = file_exists($events_path) ? Spyc::YAMLLoad($events_path) : Array();

// Transform the date on each event into a DateTime object
foreach($events as &$event){
  $event['date'] = DateTime::createFromFormat('m-d-Y',$event['date']);
}

// Sort the events in ascending date order
usort($events, function($a, $b){
    return $a['date']->getTimestamp() > $b['date']->getTimestamp();
  });

// Tag each event with it's chronilogical index, and transform its date to a DateTime object
foreach($events as $key => &$event){
  $event['index'] = $key;
}

$future_events = array_filter($events, function($event) use ($current_date){
    return $event['date']->getTimestamp() >= $current_date->getTimestamp();
  });

$past_events = array_filter($events, function($event) use ($current_date){
    return $event['date']->getTimestamp() < $current_date->getTimestamp();
  });

function render_event($event_number){
  global $events, $root;
  $event = $events[$event_number];
  if($event){
    ?>
    <div class='event_full'>
      <h3><?=$event['title']?></h3>
      <sub><?=$event['date']->format('m/d/Y')?> - <?=$event['speaker']?></sub>
      <?=\Michelf\Markdown::defaultTransform($event['description'])?>
      <?='cows'?>
      <?=$event['description']?>
      </div>
      <?php } }


function render_event_list($events){
  global $root;
  foreach ($events as $event)
    {
      ?>
      <p>
         <b>
         <a href="<?=$root?>/events.php?event=<?=$event['index']?>"><?=$event['title']?></a>
         </b>
         </br>
         <sub><?=$event['date']->format('m/d/Y')?> - by <?=$event['speaker']?></sub>
         <br />
         </p>
         <?php
    }
}

function list_events(){
  global $future_events, $past_events;
  ?><h3>Upcoming Events</h3><?php
  render_event_list($future_events);
  ?><h3>Past Events</h3><?php
  render_event_list(array_reverse($past_events));
}

function event_sidebar(){
  global $future_events, $root;

  $current_date = new DateTime("now");
  foreach ($future_events as $event)
    {
        ?>
        <p><?=$event['date']->format('D, M d, Y')?>
          <br />
          <a href="<?=$root?>/events.php?event=<?=$event['index']?>"><?=$event['title']?></a>
          </p>
          <?php
    }
}

?>
