<?php

$cart = new Cart($_GET);
?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price per pice</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    <tbody>
        <?php

        $total = 0.0;
        $quantity = 0.0;
        $basket = $cart->getBasket();
        foreach ($basket as $id => $quantity) {
            $bonnet = $bonnets[$id];
            $price = $bonnet->getPrice() * $quantity;
            $total += $price;


            ?>
            <tr>
                <td>
                    <?= $id ?>
                </td>
                <td>
                    <?= $bonnet->getName(); ?>
                </td>
                <td>
                    <?= number_format($bonnet->getPrice(), 2, ',', ''); ?>€
                </td>
                <td>

                    <a href="?page=cart&id=<?= $id; ?>&mode=minus">-</a>
                    <?= number_format($quantity); ?>
                    <a href="?page=cart&id=<?= $id; ?>">+</a>
                </td>
                <td>
                    <?= number_format($bonnet->getPrice() * $quantity, 2, ',', ''); ?>€
                </td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td colspan="4" align="right">
                Total to pay
            </td>
            <td>
                <?= number_format($total, 2, ',', ''); ?>€
            </td>
        </tr>
    </tbody>
</table>
<div>
    <a href="?page=cart&empty=clean" class="btn btn-primary">Empty Basket</a>
</div>

<!-- // var_dump($cart);
// var_dump($_SESSION['cart']); -->