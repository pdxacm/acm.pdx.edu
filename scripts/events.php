<?php

require_once(dirname(__FILE__).'/acm.php');
require_once($file_root.'/scripts/spyc/Spyc.php');
require_once($file_root.'/scripts/PHP_markdown/Michelf/Markdown.php');

$events_path = $file_root.'/events.yaml';
$events = file_exists($events_path) ? Spyc::YAMLLoad($events_path) : Array();

function render_event($event){
  ?>
<div class='event_full'>
  <h3><?=$event['title']?></h3>
  <sub><?=$event['date']?> - <?=$event['speaker']?></sub>
  <?=\Michelf\Markdown::defaultTransform($event['description'])?>
</div>
<?php }


function event_shit(){
  if(isset($events_array))
    {
      if(isset($_REQUEST['event']))
        {
          $s = sizeof($events_array);
          if((int) $_REQUEST['event'] > 0 &&
             (int) $_REQUEST['event'] <= $s)
            {
              $e = $events_array[ $s - (int) $_REQUEST['event'] ];
              echo "        <p><b>" . $e->title . "</b><br />\n";
              echo "        &#160; <sub>" . $e->date->format('m/d/Y');
              echo " - by " . $e->speaker . "</sub><br />\n";
              echo "<p>" . $e->description . "</p>\n";
            }
        }
      else // general page display
        {
          $events_string = "";
          $s = sizeof($events_array);

          // future events
          foreach ($events_array as &$e)
            {
              if($e->date->getTimestamp() >= $cdate->getTimestamp())
                {
                  $events_string = "        <p><b><a href=\"" . $root .
                    "events.php?event=" . $s . "\">" . $e->title . "</a></b><br />\n" .
                    "        &#160; <sub>" . $e->date->format('m/d/Y') .
                    " - by " . $e->speaker . "</sub></p>\n\n" . $events_string;
                }
              else
                break;

              $s--;
            }
          unset($e);

          if($events_string != "")
            $events_string = "        <h3>Upcoming Events</h3>\n\n" . $events_string;
          if($s > 0)
            $events_string =  $events_string ."        <hr />\n\n        <h3>Past Events</h3>\n\n";

          $s = sizeof($events_array);

          // past events
          foreach ($events_array as &$e)
            {
              if($e->date->getTimestamp() < $cdate->getTimestamp())
                {
                  $events_string =  $events_string . "        <p><b><a href=\"" . $root .
                    "events.php?event=" . $s . "\">" . $e->title . "</a></b><br />\n" .
                    "        &#160; <sub>" . $e->date->format('m/d/Y') .
                    " - by " . $e->speaker . "</sub></p>\n\n";
                }

              $s--;
            }
          unset($e);

          echo $events_string;
        }
    }
  else
    {
      echo "        <p>Event List currently offline.</p>";
    }
}

function event_sidebar($events){
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
