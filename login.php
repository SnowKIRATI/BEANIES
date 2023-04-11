<?php
    $pageName = "Connection";

       require_once 'includes/header.php';
    //    require_once include'includes/header.php?login=success';
    
    if (isset($_POST['username'])){
        $_SESSION['username'] = $_POST['username'];
        
        header('location: index.php?login=success');
    }

    // var_dump($_POST);
?>
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