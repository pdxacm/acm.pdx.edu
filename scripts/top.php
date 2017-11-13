<?php require_once(dirname(__FILE__).'/acm.php') ?>
<?php require_once(dirname(__FILE__).'/events.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= $root ?>/files/images/favicon.ico">

    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= $root ?>/files/bootstrap/css/bootstrap.css" rel="stylesheet"/>

    <link href="<?= $root ?>/files/css/acm.css" rel="stylesheet"/>

    <script src="<?= $root ?>/files/js/jquery.js"></script>
    <script src="<?= $root ?>/files/bootstrap/js/bootstrap.js"></script>

    <!-- Custom styles for this template -->
    <!-- <link href="offcanvas.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    <?php head_content()?>
  </head>
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?=$site_title?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li<?php active('home')?>><a href="<?=$root?>/index.php">Home</a></li>
            <li<?php active('about')?>><a href="<?=$root?>/about.php">About Us</a></li>
            <li<?php active('contact')?>><a href="<?=$root?>/contact.php">Contact Us</a></li>
            <li<?php active('events')?>><a href="<?=$root?>/events.php">Events</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->
    <div class="container">
