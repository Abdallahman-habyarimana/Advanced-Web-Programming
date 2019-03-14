<?php

require_once('../../../private/initialize.php');
session_start();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/information/contacts/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

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
        "OfficeNumber" =>
            array ($officeNumber),
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
  echo "Title: " . $title . "<br />";
  echo "First Name: " . $firstName . "<br />";
  echo "Last Name: " . $lastName . "<br />";


}

?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/information/contacts/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

      <form action="<?php echo url_for('/information/contacts/create.php'); ?>" method="post">
          <dl>
              <dt>Title</dt>
              <dd><input type="text" name="title" value=""/></dd>
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
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
