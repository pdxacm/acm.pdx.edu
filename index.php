<?php
   $section = 'home';
   require_once(dirname(__FILE__).'/scripts/top.php');
   $image = 'files/images/new_logo.png';
   ?>

<div class="jumbotron">
  <h1>ACM @ PSU</h1>
  Portland State University Student Chapter of<br />
  the Association for Computing Machinery
</div>

<h2>Welcome New and Returning Students!</h2>

<p>Here's some general info about our organization:</p>

<ul>
  <li>We meet every Tuesday at 6 PM in FAB 88-01. To get there, enter through the Engineering Building.
    Go down the stairs.
    You will see two elevators.
    Go through the double doors to the left of the elevators.
    Suite 88 is straight ahead, behind the glass windows. </li>
  <li>Often times we have guest speakers from the industry or graduate students who talk about their involvements and experiences.</li>
  <li>Membership is free for all students and comes with a load of great benefits. Benefits include creating
  and joining group projects of your liking and having access to many devices such as raspberry pi that could be loaned.</li>
  <li>While we never force anyone to formally join the ACM, it is highly recommended that interested parties
  join the parent organization. (<a href=http://acm.org>acm.org</a>) It is $19.00/year, gives access to free webinars, discounts tickets to research events, and is the only way to count increasing club membership with the parent organization. </li>
  <li>We play board/card games and have PS3 consoles/games on hand that we play with on our game nights.</li>
</ul>
<div class="row">
  <div class="col-md-4">
    <h2>Upcoming Events</h2>
    <?php event_sidebar() ?>
  </div>
  <div class="col-md-4">
    <h2>IRC</h2>
    Join us at
    <a href="irc://irc.cat.pdx.edu/#acm"> #acm irc.cat.pdx.edu</a>
    <br>
    <a href="http://www.irchelp.org/irchelp/irctutorial.html#intro" class="irc_link">What is IRC?</a>
    <br>
    <a class="btn btn-success" href="http://cat.pdx.edu/~thx1138/acm.html">Chat Now</a>
  </div>
  <div class="col-md-4">
    <h2>Mailing List</h2>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfD49MliXqUP7QERKSpbBVT1jDyejtzBGnal9-ZJD4LuHiKNw/viewform">Sign up for ACM Mailing List</a>
  </div>

</div>


<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
