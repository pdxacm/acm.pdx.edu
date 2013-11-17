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
  <li>We meet every Friday at 4pm in FAB 88-07.</li>
  <li>To get there, enter through the Engineering Building.
    Go down the stairs.
    You will see two elevators.
    Go through the double doors to the left of the elevators.
    Suite 88 is straight ahead, behind the glass windows. </li>
  <li>We play board games and card games.</li>
  <li>Often times we have a guest speaker who talks about a technology they are involved in or helped develop.</li>
  <li>There is no sign-up or fee required, just walk in and join us if you're interested.</li>
  <!--<li>Refreshments are provided, but go fast. It's usually pizza and soda.</li>-->
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
    <a class="btn btn-success" href="http://cat.pdx.edu/~thx1138/acm.html">Chat Now</a>
  </div>
  <div class="col-md-4">
    <h2>Mailing List</h2>
    <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
  </div>

</div>


<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
