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

$title = "ACM @ PSU - Future Site Design!";

function head_content()
{
?>
  <style type="text/css">
body	{text-align: center;
	/*background: url(bg-black-green2.png) repeat-x rgb(106, 127, 16);*/
	background: url(../images/cmt-medium.gif) repeat;
	background-size: 8cm 6cm;	
	margin: 0cm;
	padding: 5mm;}

/* Borders */
#header img	{border: 0.0mm solid rgb(106, 127, 16);}
#menu td	{border: 0.0mm solid #000;}
#main	 	{border: 1px solid gray;
		box-shadow: 2.0mm 2.0mm 3px #000;}

#menu	{display: table;
	margin: auto;
	margin-top: 1mm;
	margin-bottom: 2mm;}

#menu table {margin: auto;
	border-collapse: separate;
	border-spacing: 0.5mm;}

#menu td {width: 3.2cm;
	min-width: 3.2cm;
	background: #fff;
	border-radius: 1mm;
	text-align: center;
	padding: 0px;}

#menu a	{display: block;
	padding: 3px 0px 3px 0px;
	text-decoration: none;
	font-weight: bold;
	font-family: arial;
	/*color: #77f;*/
	color: #fff;
	/*background: #fff;*/
	background: rgb(106, 127, 16);}

#menu a:hover {color: rgb(106, 127, 16);
	background: #fff;}

#main	{text-align: left;
	background: #FFF;
	margin: auto;
	width: 17cm;
	padding: 4mm 1cm 6mm 1cm;}


th, td	{border: 1px solid black;
	padding: 0px 5px 0px 5px;}
th	{text-align: center;}
td	{empty-cells: show;}
table	{border-collapse: collapse;}
  </style>

  <script type="text/javascript">

  </script>
<?php
}

function main_content()
{
?>
    <h2>Future Site Design</h2>

    <p>Comming Soon!</p>
<?php
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
<!--  <link type="text/css" rel="stylesheet" href="<?php echo $root; ?>global.css" />-->
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
    <img src="<?php echo $root; ?>images/logo_color3.png" alt="Portland State University Student Chapter of the Association for Computing Machinery" />
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
        <a href="http://libalevar.so/f/ive8ei.jpg">Pony</a>
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
