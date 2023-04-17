<?php
    $pageName = "Connection";

       require_once 'includes/header.php';
    //    require_once include'includes/header.php?login=success';
      $erreur = [];
    
    if (isset($_POST['username'])){
      $username = ($_POST['username']);
      $password = ($_POST['password']);
      
      if (empty($password)){
        $erreur[] = 'Password incorrect';

      } elseif ($password != $passwordCorrect){
        $erreur[] = 'Password must have special characters is hello';
      }

      if (empty($username)){
        $erreur[] = 'Username empty';
      }
      if (empty($erreur)){
        $_SESSION['username'] = $_POST['username'];

        header('location: ?login=success');
    }
}    
?>
    <?php
    foreach ($erreur as $erreur) { 
    ?>
      <div class="alert alert-danger" role="alert">
      <?= $erreur; ?>        
      </div>
    <?php  
    }
?>

    <!-- // var_dump($_POST); -->
    <form action="" method="post">
    
            <div class="mb-3">
              <label for="username" class="form-label">User ID</label>
              <input type="text" class="form-control" id="username" name="username">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    
<?php
        include 'includes/footer.php';
?>