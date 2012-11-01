<?php
  $title = "ACM @ PSU - Contact Us";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
.irc_link	{}
  </style>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
    <h2>Contact Us</h2>
 
    <p>Join us on irc at #acm on irc.cat.pdx.edu<br />
    <a href="http://www.irchelp.org/irchelp/irctutorial.html#intro" class="irc_link">What is IRC?</a></p>

    <p>Or email us through: psuacm at cs.pdx.edu<br />
    This will forward your message to each of the active officers for this chapter.</p>
<?php
}
  include 'scripts/body.php';
?>
