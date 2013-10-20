<?php require_once(dirname(__FILE__).'/acm.php') ?>
<?php require_once(dirname(__FILE__).'/events.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="<?= $root ?>/files/css/global.css" />
    <link rel="shortcut icon" href="<?= $root ?>/images/favicon.ico" type="image/x-icon" />
    <?php head_content()?>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <div id="psu">
          <a href="http://www.pdx.edu"><img src="<?=$root?>/files/images/psu-logo-trans.png" alt="Portland State University (PSU) Logo" /></a>
        </div>
        <div id="acm">
          <a href="http://www.acm.org"><img src="<?=$root?>/files/images/acm-logo.jpg" alt="Association for Computing Machinery (ACM) Logo" /></a>
        </div>
        <h1>ACM @ PSU</h1>
        Portland State University Student Chapter of<br />
        the Association for Computing Machinery
      </div>

      <div id="link_bar">
        <table><tr>
            <td>
              <a href="<?=$root?>/index.php">Home</a>
            </td><td>
              <a href="<?=$root?>/about.php">About Us</a>
            </td><td>
              <a href="<?=$root?>/contact.php">Contact Us</a>
            </td><td>
              <a href="<?=$root?>/events.php">Events</a>
            </td><td>
              <a href="<?=$root?>/tutors.php">Tutors</a>
            </td><td>
              <a href="<?=$root?>/misc.php">Misc.</a>
            </td>
        </tr></table>
      </div>

      <div class="backdrop">
        <div id="main"><div class="padding">
