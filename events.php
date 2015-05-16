<?php
   $title = "ACM @ PSU - Events";
   $section = 'events';
   require_once(dirname(__FILE__).'/scripts/top.php');
   ?>
<h1>Events</h1>

<?php list_events($events) ?>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
