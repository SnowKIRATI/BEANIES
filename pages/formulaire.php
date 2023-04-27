<?php

$contact = new Contact($_POST);

foreach ($contact->getWrong() as $wrong) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?= $wrong; ?>
    </div>
    <?php
}
?>
<?php
if (!empty($_POST) && empty($contact->getWrong())) {
    $_SESSION['email'] = $_POST['email'];
    ?>
    <div class="alert alert-success" role="alert">
        Your message has been sent
    </div>
    <?php
}
?>
<form action="" method="post">

    <div class="mb-3">
        <label for="subject" class="form-label">Sujet</label>
        <input type="text" class="form-control" id="subject" name="subject">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <textarea type="text" class="form-control" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>