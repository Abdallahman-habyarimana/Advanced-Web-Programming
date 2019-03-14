<?php require_once('../../../private/initialize.php'); ?>


<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
?>

<?php $page_title = 'View Contact'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/information/contacts/index.php'); ?>">&laquo; Back to List</a>

  <div class="view contact">

    Subject ID: <?php echo h($id); ?>
      <?php




      ?>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>