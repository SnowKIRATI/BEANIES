
<?php
    $pageName = "All our bonnets";
    
?>
    <table class="table">
        <th>Bennets</th>
        <th>PriceHT</th>
        <th>Price TTC</th>
        <th>Details</th>
        <th>Action</th>

                <?php 
                 foreach ($bonnets as $id => $bonnet){ 
                    showBonnet($id, $bonnet);
                  } ?>
    </table>
    