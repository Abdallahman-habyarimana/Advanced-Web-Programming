<?php require_once('../../../private/initialize.php'); ?>

<?php
$contactList = [
    ['id' => '1', 'firstName' => 'Chris', 'lastName' => 'Haddock', 'email' => 'christopher_j_haddock@hotmail.com'],
    ['id' => '2', 'firstName' => 'Ana', 'lastName' => 'Merfu', 'email' => 'AnaM@email.com'],
    ['id' => '3', 'firstName' => 'De', 'lastName' => 'Colson', 'email' => 'De_col@email.com'],
    ['id' => '4', 'firstName' => 'Tom', 'lastName' => 'Haddock', 'email' => 'Tom_hadd@email.com'],
];
?>

<?php $page_title = 'Contact List'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
    <div class="contact list">
        <h1>Contact List</h1>

        <div class="actions">
            <a class="action" href="<?php echo url_for('/information/contacts/new.php'); ?>">Add New Contact</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach($contactList as $contact) { ?>
                <tr>
                    <td><?php echo h($contact['id']); ?></td>
                    <td><?php echo h($contact['firstName']); ?></td>
                    <td><?php echo h($contact['lastName']); ?></td>
                    <td><?php echo h($contact['email']); ?></td>
                    <td><a class="action" href="<?php echo url_for('/information/contacts/view.php?id=' . h(u($contact['id']))); ?>">View</a></td>
                    <td><a class="action" href="<?php echo url_for('/information/contacts/edit.php?id=' . h(u($contact['id']))); ?>">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
