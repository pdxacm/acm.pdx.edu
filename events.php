<?php
  $title = "ACM @ PSU - Events Schedule";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
.small	{font-size: 8pt;}
  </style>

  <script type="text/javascript">
  </script>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
    <h2>Events Schedule</h2>

    <!--<p>This Friday (10/26/2012) we will have Thomas Schreiber (Ubiquill) talking about node.js, socket.io, and other web development resources.</p>-->

    <!--<p>We have been unable to confirm our guest speaker will be showing up this Friday (11/2/2012), so expect pizza and board games.</p>-->

    <!--<p>This Friday (11/14/2012) we are hoping to have a talk about processing large datasets in the cloud using Hadoop.</p>-->

    <!--<p>This Friday (11/30/2012) Steve Langasek will be talking about Secure Boot and Linux. This will be the last tech talk of the term, so be sure to show up!</p>-->

    <!--<p>This Friday (12/07/2012) we will have a small meating to discuss the ACM and thank the volunteer tutors.</p>-->
    <p>There are no current plans for winter break, Check back some time after 1/1/2013.</p>

    <iframe src="https://www.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=psuacm%40cs.pdx.edu&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe>

    <p>
      Sign up for the
      <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
      to get messages about upcoming events.
    </p>
<?php
}
  include 'scripts/body.php';
?>
