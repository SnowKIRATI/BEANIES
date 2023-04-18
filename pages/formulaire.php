<?php
$wrong = [];

if (isset($_POST['email'])) {
    $email = ($_POST['email']);
    $message = ($_POST['message']);

    if (empty($email)) {
        $wrong[] = 'Email empty, please add your email.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $wrong[] = 'Incorrect email';
    }
    if (empty($message)) {
        $wrong[] = 'Please write some texts';
    }
    if (empty($wrong)) {
        $_SESSION['email'] = $_POST['email'];
    }

}
?>
<?php
foreach ($wrong as $wrong) {

    ?>
    <div class="alert alert-danger" role="alert">
        <?= $wrong; ?>
    </div>
    <?php
}
?>
<form action="" method="post">

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <textarea type="text" class="form-control" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>