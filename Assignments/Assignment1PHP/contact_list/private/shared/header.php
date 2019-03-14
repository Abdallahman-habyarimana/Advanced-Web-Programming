<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/contact.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Contact Book Assignment</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/information/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>
