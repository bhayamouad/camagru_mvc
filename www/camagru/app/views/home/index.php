<?php require ROOT.'/app/views/includes/header.php';?>
<?php (isset($_SESSION['reset_success'])) ? flashMessage('reset_success','success') : '';?>
<?php require ROOT.'/app/views/includes/footer.php';?>