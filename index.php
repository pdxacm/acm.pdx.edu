<?php
  $title = "ACM @ PSU";

// put stuff in here to get added to this specific page's head section
function head_content()
{
/*?>
  <style type="text/css">
  </style>

  <script type="text/javascript">
  </script>
<?php*/
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
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

    <p>IRC: #acm on irc.cat.pdx.edu</p>

    <p>Email: psuacm at cs.pdx.edu</p>

    <p><a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a></p>

<?php
}
  include 'scripts/body.php';
  //phpinfo();
?>
