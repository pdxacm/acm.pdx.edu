<?php
  $title = "ACM @ PSU - About Us";

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
    <h2>About Us</h2>

    <p>
      We are the
      <a href="http://pdx.edu/">Portland State University</a> 
      student chapter of the
      <a href="http://www.acm.org/">Association for Computing Machinery</a>.
    </p>

    <p>
      We meet every Friday at 4pm in FAB 88-07, either for games or for guest speakers.
      We also provide CS tutoring during the week in addition to the existing CS tutors.
      We're open to suggestions for other things we could do as a group.
      Have an idea? <a href="contact.php">Contact us</a>.
    </p>

    <p><b>Official Members:</b><br />
Advisor - Bart Massey - bart at cs.pdx.edu<br />
Chair - Lindsay Ergenekan<br />
Vice Chair - Sean Walsh - spw2 at pdx.edu<br />
Treasurer - Jameson McCowan - jameson at cecs.pdx.edu<br />
Treasurer - Donovan Finch<br /> 
Secretary - Philip Coho <br />
Arbiter - Alexander Steiert - asteiert at cs.pdx.edu<br />
Vizier - Damon Liang - damonl at cecs.pdx.edu<br />Webmaster - Harmanpreet Singh<br />
Events - William Van Hevelingen, wvan at cs.pdx.edu
    </p>
<?php
}

  include 'scripts/body.php';
?>
