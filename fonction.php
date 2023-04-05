<?php
function priceHT(float $price): float
{
    return round($price / 1.2,2);
}

function showBonnet(array $bonnet): void 
{
    ?>
    <tr> 
       <td> 
           <?php echo $bonnet[0]; ?>
       </td>
       <td>
            <?php echo priceHT($bonnet[1]) ." "."€"; ?>
       
       </td>
       <td <?php if ($bonnet[1] <= 12) {?> class="coloV" <?php } 
           else {?> class="coloB" <?php }?> >  
            <?php echo $bonnet[1] ." "."€"; ?>
       </td>
       <td>
           <?php echo $bonnet[2] ; 
       ?>
       </td>

       <!-- <td>
           <?php echo $bonnet[1] ." "."€"; ?>
       </td> -->
    </tr>

    <?php  
}
?>