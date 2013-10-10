<?php
//this is needed for links to work because of how the address systems change
$root = "/";
// tell me everything about the following variable: $_SERVER
//echo var_dump($_SERVER) . "\n";

// check if acm.pdx.edu or web.cecs.pdx.edu/~psuacm/
if( strcmp($_SERVER["HTTP_HOST"], "acm.pdx.edu") != 0 ) {
  // if web.cecs.pdx.edu/~psuacm/, then get /~psuacm/
  $root = substr($_SERVER["PHP_SELF"], 1);
  $root = substr($root, 0, strcspn($root, '/'));
  $root = "/" . $root . "/";
} else {
  // if acm.pdx.edu
  // $root already is "/"
}

include 'events_list.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php
if(isset($title))
{
  echo $title;
}
else
{
  echo "ACM @ PSU";
}
?></title>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="<?php echo $root; ?>global.css" />
  <link rel="shortcut icon" href="<?php echo $root; ?>images/favicon.ico" type="image/x-icon" />
<?php
if(function_exists('head_content'))
{
  head_content();
}
?>
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <div id="psu">
        <a href="http://www.pdx.edu"><img src="<?php echo $root; ?>images/psu-logo-trans.png" alt="Portland State University (PSU) Logo" /></a>
      </div>
      <div id="acm">
        <a href="http://www.acm.org"><img src="<?php echo $root; ?>images/acm-logo.jpg" alt="Association for Computing Machinery (ACM) Logo" /></a>
      </div>
      <h1>ACM @ PSU</h1>
      Portland State University Student Chapter of<br />
      the Association for Computing Machinery
    </div>

    <div id="link_bar">
      <table><tr>
        <td>
          <a href="<?php echo $root; ?>index.php">Home</a>
        </td><td>
          <a href="<?php echo $root; ?>about.php">About Us</a>
        </td><td>
          <a href="<?php echo $root; ?>contact.php">Contact Us</a>
        </td><td>
          <a href="<?php echo $root; ?>events.php">Events</a>
        </td><td>
          <a href="<?php echo $root; ?>tutors.php">Tutors</a>
        </td><td>
          <a href="<?php echo $root; ?>misc.php">Misc.</a>
        </td>
      </tr></table>
    </div>

    <div class="backdrop">
      <div id="main"><div class="padding">
<?php
if(function_exists('main_content'))
{
  main_content();
}

// Manage events page
// I've tried to get this to work through just the events.php file.
// That hasn't worked so far due to problems with include.
// If you can figure out how to do this in the events page instead and
// keep the sidebar events list working, please do.
if(strpos($_SERVER['REQUEST_URI'], $root."events.php") !== false)
{
  if(isset($events_array))
  {
    // if a specific event is requested
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

?>
      </div></div>

      <div id="sidebar"><div class="padding">
        <h3>Upcoming Events:</h3><hr />

<?php
if(isset($events_array))
{
  $side_string = "";
  $s = sizeof($events_array);
  
  foreach ($events_array as &$e)
  {
    if($e->date->getTimestamp() >= $cdate->getTimestamp())
    {
      $side_string = "        <p>" . $e->date->format('D, M d, Y') . "<br />\n" .
                     "        <a href=\"" . $root . "events.php?event=" . $s .
                     "\">" . $e->title . "</a></p>\n\n" . $side_string;
    }
    else
      break;

    $s--;
  }
  unset($e);
  echo $side_string;
}
else
  echo "No new events currently schedules<br />\n";

/*        <iframe src="https://www.google.com/calendar/embed?height=120&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=psuacm%40cs.pdx.edu&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles"
          style=" border-width:0 " width="180px" height="120px" frameborder="0" scrolling="no"></iframe>

 I can't make this google calendar fit in the sidebar in any usefull way.*/
?>
        <hr />
        
        Looking for a Job or internship? Check out 
        <a href="http://www.pdx.edu/computer-science/job-resources">MCECS's Job Resources Page</a>.
        
        <hr />

        <p>Sign up for the
        <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
        to get messages about upcoming events.</p>
      </div></div>

      <div style="clear: both;"><!-- should pull backdrop to bottom of page just above the copyright notice --></div>
    </div>
  </div>
  <p class="cr">&copy; 2013 ACM @ PSU</p>
</body>
</html>
