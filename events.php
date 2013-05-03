<?php
  $title = "ACM @ PSU - Events";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
b a	{text-decoration: none;
	color: #57f;}
b a:visited {color: #57f;}

.box	{font-size: 10pt;}
  </style>

  <script type="text/javascript">
  </script>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
        <h2>Events</h2>

        <div class="box"><b>Where and When</b><br />
        Events take place in Room 86-01 of Portland State's 
        <a href="http://www.fap.pdx.edu/floorplans/detail2.php?buildingID=12">Fourth Avenue Building (FAB)</a>
        from 4:30pm to 5:30pm, unless circumstances dictate otherwise.</div>
<?php

// Are you looking for the events?
/* To add the functionality the events section now enjoys, unfortunatly I
 * had to break the normal design style and add all the event handling to
 * the body.php script, with the actual events information stored in the 
 * events_list.php script. 
 * 
 * events are stored in events_list.php for two reasons; so that the
 * sidebar can access them without accessing this page every time, and
 * so there is one file that is purely events information. In the future,
 * if we ever use a database to store events information, the 
 * events_list.php script is the only script that would need to change.
 * 
 * I would have gone with just using SQL, but it's easier to show new
 * people how to edit a text file than it is to create, maintain, and use
 * a secure form or other interface for SQL. Anyone can edit a text file,
 * but not everyone can use SQL.
 *
 * So why not call events_list.php from here and use this page to display
 * it? honestly I couldn't figure out how to. I tried and tried, but 
 * aparently my understanding of php is not good enough to get it to work.
 * It seems to have something to do with how the main_content function is
 * actually run in body.php causing some scope issues. Anyways I suffered
 * enough trying to make it work that way. Give it a try if you feel like
 * it, I'm done struggling with it for now.
 *
*/


// Google calendar, which is now redundant.
/*
    <!--<iframe src="https://www.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=psuacm%40cs.pdx.edu&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe>

    <p>
      Sign up for the
      <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
      to get messages about upcoming events.
    </p>-->
*/
}

include 'scripts/body.php';
?>
