<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <!-- <meta name="author" content="Glenn Hodgkinson"> -->
  <link rel="shortcut icon" type="image/ico" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/base.css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Lato:100,700,300,300italic,700italic|Pompiere' rel='stylesheet' type='text/css'>
  <title><?php the_title(); ?> | A Day Curated</title>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
      <div class="plants"></div>
      <nav>
        <a class="nav_home" href="/">home</a>
        <a class="nav_about" href="/about">about</a>
        <span class="nav_title">a day curated</span>
        <a class="nav_blog" href="/blog">blog</a>
        <a class="nav_authors" href="/authors">authors</a>
      </nav>
    </header>
