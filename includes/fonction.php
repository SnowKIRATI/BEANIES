<?php
function priceHT(float $price): float
{
    return round($price / 1.2,2);
}

function showBonnet(int $id, object $bonnet): void 
{
    ?>
    <tr> 
       <td> 
           <?= $bonnet->getName(); ?>
       </td>
       <td>
            <?php echo priceHT($bonnet->getPrice()) ." "."€"; ?>
       
       </td>
       <td <?php if ($bonnet->getPrice() <= 12) {?> class="coloV" <?php } 
           else {?> class="coloB" <?php }?> >  
            <?= $bonnet->getPrice() ." "."€"; ?>
       </td>
       <td>
           <?= $bonnet->getDescription() ; 
       ?>
       </td>

       <td>
           <a href="?page=cart&id=<?= $id; ?>" class="btn btn-primary">
            Add to my basket
           </a>
       </td>
    </tr>

    <?php  
}
?>