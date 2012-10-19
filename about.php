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

    <p>We meet every Friday at 4pm in FAB 88-02, either for games or for guest speakers. We also provide CS tutoring during the week in addition to the existing CS tutors.</p>

    <p><b>Official Members:</b><br />
Advisor - Bart Massey - bart at cs.pdx.edu<br />
Chair - Bradley  Rasussen - bajr at cecs.pdx.edu<br />
Vice Chair - Alexander Steiert - alexandersteiert at gmail.com<br />
Treasurer - Jameson McCowan - jameson at cecs.pdx.edu<br />
Secretary - Sage Imel - sage at iloveco.ws<br />
Vizier - Damon Liang - damonl at cecs.pdx.edu<br />
Events - William Van Hevelingen, blkperl at cat.pdx.edu
    </p>
<?php
}

  include 'scripts/body.php';
?>
