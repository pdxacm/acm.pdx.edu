<?php
   $title = "ACM @ PSU - Events";
   $section = 'events';
   require_once(dirname(__FILE__).'/scripts/top.php');
   ?>
<h1>Events</h1>

<h2>Where and When</h2>
<p>
  Events take place in Room 86-01 of Portland State's
  <a href="http://www.fap.pdx.edu/floorplans/detail2.php?buildingID=12">Fourth Avenue Building (FAB)</a>
  from 4:30pm to 5:30pm, unless circumstances dictate otherwise.
</p>

<?php list_events($events) ?>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
