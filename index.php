<?php
   $section = 'home';
   require_once(dirname(__FILE__).'/scripts/top.php');
   ?>


<div class="jumbotron">
  <h1>ACM @ PSU</h1>
  Portland State University Student Chapter of<br />
  the Association for Computing Machinery
</div>

<h2>Welcome New and Returning Students!</h2>

<p>Here's some info about our weekly meetings:</p>

<ul>
  <li>We meet every Thursday at 6 PM in FAB 88-01.</li>
  <li>To get there, enter through the Engineering Building.
    Go down the stairs.
    You will see two elevators.
    Go through the double doors to the left of the elevators.
    Suite 88 is straight ahead, behind the glass windows. </li>
  <li>We play board/card games and have PS3 consoles/games on hand.</li>
  <li>Often times we have guest speakers who talk about technologies they are involved in or helped develop.</li>
  <li>While we never force anyone to formally join the ACM, it is highly recommended that interested parties 
  join the parent organization. It is free for all students and comes with a load of great benefits. Benefits include creating
  and joining group projects of your liking and having access to many devices such as raspberry pi.</li>
</ul>
<div class="row">
  <div class="col-md-4">
    <h2>Upcoming Events</h2>
    We are currently planning workshops and speakers for Fall of 2015.
    <?php event_sidebar() ?>
  </div>
  <div class="col-md-4">
    <h2>IRC</h2>
    Join us at
    <a href="irc://irc.cat.pdx.edu/#acm"> #acm irc.cat.pdx.edu</a>
    <br>
    <a class="btn btn-success" href="http://cat.pdx.edu/~thx1138/acm.html">Chat Now</a>
  </div>
  <div class="col-md-4">
    <h2>Mailing List</h2>
    <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
  </div>

</div>


<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
