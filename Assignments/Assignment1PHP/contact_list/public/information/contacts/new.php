<?php
session_start();
require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/information/contacts/index.php'));
}

$title = $_POST['title'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$site= $_POST['site'] ?? '';
$cellNumber = $_POST['cellNumber'] ?? '';
$homeNumber= $_POST['homeNumber'] ?? '';
$officeNumber= $_POST['officeNumber'] ?? '';
$twitter= $_POST['twitter'] ?? '';
$facebook= $_POST['facebook'] ?? '';
$picture= $_POST['picture'] ?? '';
$comment= $_POST['comment'] ?? '';

$ContactList = array (
    "Title" =>
        array($title),
    "FirstName" =>
        array($firstName),
    "LastName" =>
        array ($lastName),
    "Email" =>
        array ($email),
    "Website" =>
        array ($site),
    "CellNumber" =>
        array ($cellNumber),
    "HomeNumber" =>
        array ($homeNumber),
    "OfiiceNumber" =>
        array ($homeNumber),
    "Twitter" =>
        array ($twitter),
    "Facebook" =>
        array ($facebook),
    "Picture" =>
        array ($picture),
    "Comment" =>
        array ($comment)
);

echo "Form parameters<br />";
print_r($ContactList);

?>

<?php $page_title = 'Create Contact'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/information/contacts/index.php'); ?>">&laquo; Back to List</a>

  <div class="contact new">
    <h1>Create Contact</h1>

    <form action="<?php echo url_for('/information/contacts/new.php'); ?>" method="post">
      <dl>
        <dt>Title</dt>
        <dd><input type="text" name="title" value="" /></dd>
      </dl>
        <dl>
            <dt>First Name</dt>
            <dd><input type="text" name="firstName" value="" /></dd>
        </dl>
      <dl>
          <dl>
              <dt>Last Name</dt>
              <dd><input type="text" name="lastName" value="" /></dd>
          </dl>
          <dl>
              <dt>Email Address</dt>
              <dd><input type="text" name="email" value="" /></dd>
          </dl>
          <dl>
              <dt>Site</dt>
              <dd><input type="text" name="site" value="" /></dd>
          </dl>
          <dl>
              <dt>Cell Number</dt>
              <dd><input type="text" name="cellnumber" value="" /></dd>
          </dl>
          <dl>
              <dt>Home Number </dt>
              <dd><input type="text" name="homeNumber" value="" /></dd>
          </dl>
          <dl>
              <dt>Office Number</dt>
              <dd><input type="text" name="officeNumber" value="" /></dd>
          </dl>
          <dl>
              <dt>Twitter URL</dt>
              <dd><input type="text" name="twitter" value="" /></dd>
          </dl>
          <dl>
              <dt>Facebook URL</dt>
              <dd><input type="text" name="facebook" value="" /></dd>
          </dl>
          <dl>
              <dt>Picture</dt>
              <dd><input type="text" name="picture" value="" /></dd>
          </dl>
          <dl>
              <dt>Comment</dt>
              <dd><input type="text" name="comment" value="" /></dd>
          </dl>


      </dl>
      <div id="operations">
        <input type="submit" value="Create Contact" method ="post"/>
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
