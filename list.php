
<?php
    $pageName = "All our bonnets";
    
    include'includes/header.php';
?>
    <table>
        <th>Bennets</th>
        <th>PriceHT</th>
        <th>Price TTC</th>
        <th>Details</th>
        <!-- <th>Test</th> -->
                <?php 
                 foreach ($bonnets as $bonnet){ 
                    showBonnet($bonnet);
                  } ?>
    </table>
    
<?php
        include'includes/footer.php';
?>