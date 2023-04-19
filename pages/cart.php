<?php

// if (isset($_GET['id'])){
//     $_SESSION['cart'][$_GET['id']]++;
// }
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cart = $_SESSION['cart'];

    if (!isset($cart[$id])) {
        $cart[$id] = 0;
    }

    $mode = 'add';
    if (isset($_GET['mode'])) {
        $mode = $_GET['mode'];
    }

    if ($mode == 'minus') {
        $cart[$id]--;
        if ($cart[$id] <= 0) {
            unset($cart[$id]);
        }
    } else {
        $cart[$id]++;
    }

    $empty = 'clean';
    if (isset($_GET['empty'])){
        $cart=[];
    }

    $_SESSION['cart'] = $cart;
}
?>
<table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price per pice</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    <tbody>
        <?php

        $total = 0.0;
        $quantity = 0.0;
        foreach ($_SESSION['cart'] as $id => $quantity) {
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
                    <?= number_format($bonnet->getPrice(), 2, ',', ''); ?>€
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
        <a href="?page=cart&id=<?= $id; ?>&empty=clean" class="btn btn-primary">Empty Basket</a>
</div>

<!-- // var_dump($cart);
// var_dump($_SESSION['cart']); -->