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

    <p>Questions, comments, or concerns? Feel free to contact us if there's anything ACM related you want to talk about.</p>

    <p><b>IRC:</b> #acm on irc.cat.pdx.edu<br />
    <a href="http://www.irchelp.org/irchelp/irctutorial.html#intro" class="irc_link">What is IRC?</a></p>

    <p><b>Email:</b> psuacm at cs.pdx.edu<br />
    <sup>(This will forward your message to each of the active officers for this chapter.)</sup></p>

    <p><b>Mailing Address:</b><br />
       Association for Computing Machinery<br />
       1819 SW 5th Ave. #271<br />
       Portland OR 97201</p>
<?php
}
  include 'scripts/body.php';
?>
