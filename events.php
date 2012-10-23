<?php
  $title = "ACM @ PSU - Events Schedule";

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
    <h2>Events Schedule</h2>

    <p>This Friday (10/26/2012) we will have Thomas Schreiber (Ubiquill) talking about node.js, socket.io, and other web development resources.</p>

    <p>There are future events planned, but we haven't added them to the site yet.</p>

    <p>
      Sign up for the
      <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
      to get messages about upcoming events.
    </p>
<?php
}
  include 'scripts/body.php';
?>
