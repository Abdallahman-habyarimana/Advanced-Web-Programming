<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/information/contacts/index.php'); ?>">Contact List</a></li>
      <li><a href="<?php echo url_for('/information/contacts/new.php'); ?>">Add Contact</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
