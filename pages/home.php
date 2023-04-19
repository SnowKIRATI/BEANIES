<div class="d-flex">
        <?php
        $i = 0;
        foreach ($bonnets as $bonnet) {
                $i++;
                if ($i > 3) {
                        break;
                }
                ?>
                <div class="card m-1">
                        <img src="<?= $bonnet->getImg(); ?>" alt="">
                        <div class="card-body">
                                <h3 class="card-title">
                                        <?= $bonnet->getName(); ?>
                                </h3>
                                <p class="card-text">
                                        <?= $bonnet->getPrice() . " " . "€"; ?>
                                </p>
                                <p class="card-text">
                                        <?= $bonnet->getDescription(); ?>
                                </p>
                                <a href="?page=cart&id=<?= $i; ?>" class="btn btn-primary">Add to basket </a>
                        </div>
                </div>
                <?php
        }
        ?>
</div>
<div>
        <a href="?page=list" class="btn btn-primary">All produits</a>
</div>