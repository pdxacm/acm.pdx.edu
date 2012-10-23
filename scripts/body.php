<?php
//this is needed for links to work because of how the address systems change
$root = "/";
// check if acm.pdx.edu or web.cecs.pdx.edu/~psuacm/
if( strcspn($_SERVER["SCRIPT_URI"], "~") < strlen($_SERVER["SCRIPT_URI"]) )
{
  // if web.cecs.pdx.edu/~psuacm/, then get /~psuacm/
  $char_count = strcspn($_SERVER["SCRIPT_URI"], "~");
  $root = substr($_SERVER["SCRIPT_URI"], $char_count, -1);
  $root = substr($root, 0, strcspn($root, "/"));
  $root = "/" . $root . "/";
}
?>
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
  <link type="text/css" rel="stylesheet" href="<?php echo $root; ?>global.css" />
  <link rel="shortcut icon" href="<?php echo $root; ?>images/favicon.ico" type="image/x-icon" />
<?php
if(function_exists('head_content'))
{
  head_content();
}
?>
</head>
<body>
  <div id="header">
    <img src="<?php echo $root; ?>images/logo_gray2.png" alt="Portland State University Student Chapter of the Association for Computing Machinery" />
  </div>

  <div id="menu">
    <table><tr>
      <td>
        <a href="<?php echo $root; ?>index.php">Home</a>
      </td><td>
        <a href="<?php echo $root; ?>about.php">About Us</a>
      </td><td>
        <a href="<?php echo $root; ?>contact.php">Contact Us</a>
      </td><td>
        <a href="<?php echo $root; ?>events.php">Events</a>
      </td><td>
        <a href="<?php echo $root; ?>tutors.php">Tutors</a>
      </td><td>
        <a href="<?php echo $root; ?>misc.php">Misc.</a>
      </td>
    </tr></table>
  </div>

  <div id="main">
<?php
if(function_exists('main_content'))
{
  main_content();
}
?>
  </div>
  <p class="cr">&copy; 2012 ACM @ PSU</p>
</body>
</html>
