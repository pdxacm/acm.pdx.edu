<?php
   $title = "ACM @ PSU - Events";
   $section = 'events';
   require_once(dirname(__FILE__).'/scripts/top.php');
   ?>
<h1>Events</h1>
<h2>Calendar</h2>
<iframe src="https://calendar.google.com/calendar/embed?src=thepdxacm%40gmail.com&amp;ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
<?php list_events($events) ?>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
