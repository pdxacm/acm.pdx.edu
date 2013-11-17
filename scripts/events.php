<?php

require_once(dirname(__FILE__).'/acm.php');
require_once($file_root.'/scripts/spyc/Spyc.php');
require_once($file_root.'/scripts/PHP_markdown/Michelf/Markdown.php');

$current_date = new DateTime("now");

$events_path = $file_root.'/files/events.yaml';
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

function render_event_list_item($event, $root){
  ?>
  <li>
  <h4><a href="<?=$root?>/event.php?event=<?=$event['index']?>"><?=$event['title']?></a></h4>
  <?=$event['date']->format('m/d/Y')?> - by <?=$event['speaker']?>
  </li>
  <?php
}

function render_event_list($events){
  global $root;
  $count = 0;
  ?><ui class="unstyled"><?php
  foreach ($events as $event){
    render_event_list_item($event, $root);
    $count++;
  }
  ?></ui><?php
}

function list_events(){
  global $future_events, $past_events;
  ?><h2>Upcoming Events</h2><?php
  render_event_list($future_events);
  ?><h2>Past Events</h2><?php
  render_event_list(array_reverse($past_events));
}

function event_sidebar(){
  global $future_events, $root;

  ?><ul class="list-unstyled upcoming-events"><?php
  foreach ($future_events as $event)
    {
      ?>
      <li>
        <a href="<?=$root?>/events.php?event=<?=$event['index']?>"><?=$event['title']?></a>
        <br />
        <?=$event['date']->format('D, M d, Y')?>
        </li>
        <?php
        }
  ?></ul><?php
}

?>
