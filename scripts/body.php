<!DOCTYPE html>
<html>
<head>
  <title><?php
if(isset($title))
{
  echo $title;
}
else
{
  echo "ACM @ PSU";
}
?></title>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="/global.css" />
<?php
if(function_exists(head_content()))
{
  head_content();
}
?>
</head>
<body>
  <div id="header">
    <img src="/images/logo_gray2.png" alt="Portland State University Student Chapter of the Association for Computing Machinery" />
  </div>

  <div id="menu">
    <table><tr>
      <td>
        <a href="/">Home</a>
      </td><td>
        <a href="/about.php">About Us</a>
      </td><td>
        <a href="/contact.php">Contact Us</a>
      </td><td>
        <a href="/events.php">Events</a>
      </td><td>
        <a href="/tutors.php">Tutors</a>
      </td><td>
        <a href="/misc.php">Misc.</a>
      </td>
    </tr></table>
  </div>

  <div id="main">
<?php
if(function_exists(main_content()))
{
  main_content();
}
?>
  </div>
  <p class="cr">&copy; 2012 ACM @ PSU</p>
</body>
</html>
