
        <div class="d-flex justify-content-center" >
        <?php
        $i = 0;
        foreach ($bonnets as $id => $bonnet)
        {
                $i++;
                if($i > 3){
                        break;
                }
        ?>
                <div class="card m-2" style="width: 18rem;">
                        <img src="<?= $bonnet[3];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                                <h3 class="card-title"><?= $bonnet[0]; ?> </h3>
                                <p class="card-text"><?= $bonnet[1]." "."€"; ?> </p>
                                <p class="card-text"><?= $bonnet[2]; ?> </p>
                                <a href="?page=cart&id=<?= $id; ?>" class="btn btn-primary">Add to basket </a>
                        </div>
                </div>
        <?php     
        }
        ?>
        </div> 
        <div class="d-flex justify-content-center">
                <a href="?page=list" class="btn btn-primary">All produits</a>
        </div>