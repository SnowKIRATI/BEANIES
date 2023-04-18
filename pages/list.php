
<?php
    $pageName = "All our bonnets";
    
?>
    <table>
        <th>Bennets</th>
        <th>PriceHT</th>
        <th>Price TTC</th>
        <th>Details</th>
        <th>Action</th>

                <?php 
                 foreach ($bonnets as $key => $bonnet){ 
                    showBonnet($key, $bonnet);
                  } ?>
    </table>
    