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
        .coloV{
            color: green;
        }
        .coloB{
            color: blue;
        }
    </style>
</head>
<body>
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
</body>
</html>