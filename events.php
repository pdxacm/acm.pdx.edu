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
    
    <!--<p>Friday (1/18/2013) in FAB 86-01 we will have guest speaker Michael Schern presenting Git For Ages 4 And Up.</p>

    <p>Synopsis: Tinker Toys are the best illustration of a Git repository I've found. Side-by-side with issuing Git commands, 
    we'll build a Git repository out of kid's toys to show what's going on behind the scenes. 
    Mind bending concepts like remote branches, rebase and the staging area become child.s play.<br />
    <br />
    Basic knowledge of git commands is expected of the audience (init, add, commit, diff, log, push, pull).
    If you.ve started using git, but are uncomfortable with it and don.t really get it, this is for you.<br />
    <br />
    WARNING: CHOKING HAZARD - Small Parts. Not For Children Under 4 Years.</p>-->

    <p>Friday (1/25/2013) there will be a presentation on Consulting in the IT world.</p>

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
