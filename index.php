<?php
$bonnets = [
    ["Bonnet en laine",10,"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],
    ["Bonnet en laine bio","14","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],
    ["Bonnet en laine et cachemire",20,"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],
    ["Bonnet arc-en-ciel",12,"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],
]
?>

function priceTTC

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEANIS-BONNETS</title>
    <style>

        table, th, td{
            border : 1px solid green;
        }
        .colo{
            color: blue;
        }
    </style>
</head>
<body>
    

    <table>
        <th>Bennets</th>
        <th>Price</th>
        <th>Price TTC</th>
        <th>Details</th>
        <th>Test</th>
                <?php 
                 foreach ($bonnets as $i => $bonnet){ ?>
         <tr> 
            <td> 
                <?php echo $bonnet[0]; ?>
            </td>
            <td <?php if ($bonnet[1] <= 12) { ?> class="colo" <?php } ?>>
                 <?php echo $bonnet[1] ." "."€"; ?>
            
            </td>
            <td <?php if ($bonnet[1] <= 12) { ?> class="colo" <?php } ?>>
                 <?php echo $bonnet[1] ." "."€"; ?>
            
            </td>
            <td>
                <?php echo $bonnet[2] ; 
            ?>
            </td>

            <td>
                <?php echo $bonnet[1] ." "."€"; ?>
            </td>
         </tr>

         <?php } ?>
    </table>


</body>
</html>