
        <?php
        include 'includes/header.php';
        ?>
        <div class="d-flex justify-content-center" >
        <?php
        foreach ($bonnets as $i => $bonnet)
        {
                if($i >= 3){
                        break;
                }
        ?>
                <div class="card m-2" style="width: 18rem;">
                        <img src=" <?= $bonnet[3];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                                <h3 class="card-title"><?= $bonnet[0]; ?> </h3>
                                <p class="card-text"><?= $bonnet[1]." "."€"; ?> </p>
                                <p class="card-text"><?= $bonnet[2]; ?> </p>
                                <a href="#" class="btn btn-primary">Add to basket </a>
                        </div>
                </div>
        <?php     
        }
        ?>
        </div> 
        <div class="d-flex justify-content-center">
                <a href="list.php" class="btn btn-primary">All produits</a>
        </div>
<?php
        include 'includes/footer.php';
?>