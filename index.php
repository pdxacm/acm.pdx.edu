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
  <li>We meet every Monday at 6:30 PM in FAB 88-08. To get there, enter through the Engineering Building.
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
  <div class="col-md-8">
    <h2>Upcoming Events</h2>
    <ul class="list-unstyled upcoming-events"></ul><iframe src="https://calendar.google.com/calendar/embed?src=thepdxacm%40gmail.com&amp;ctz=America/Los_Angeles" style="border: 0" width="700" height="600" frameborder="0" scrolling="no"></iframe>
</div>
  <div class="col-md-4">
    <h2>Slack</h2>
    Join our slack channel at
    <a href="https://psuacm.slack.com/">psuacm.slack.com</a>
    <br>
    <h2>Mailing List</h2>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfD49MliXqUP7QERKSpbBVT1jDyejtzBGnal9-ZJD4LuHiKNw/viewform">Sign up for PSU ACM Mailing List</a>
  </div>
</div>


<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
