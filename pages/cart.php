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

    $_SESSION['cart'] = $cart;
}
?>
<table class="table">
    <thead>
        <tr>
            <th scope="row">ID</th>
            <th scope="row">Name</th>
            <th scope="row">Price per pice</th>
            <th scope="row">Quantity</th>
            <th scope="row">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $total = 0.0;
        $quantity = 0.0;
        foreach ($_SESSION['cart'] as $id => $quantity) {
            $bonnet = $bonnets[$id];
            $price = $bonnet[1] * $quantity;
            $total += $price;

            ?>
            <tr>
                <td>
                    <?= $id ?>
                </td>
                <td>
                    <?= $bonnet[0]; ?>
                </td>
                <td>
                    <?= number_format($bonnet[1], 2, ',', ''); ?>€
                </td>
                <td>

                    <a href="?page=cart&id=<?= $id; ?>">+</a>
                    <?= number_format($quantity); ?>
                    <a href="?page=cart&id=<?= $id; ?>&mode=minus">-</a>
                </td>
                <td>
                    <?= number_format($price, 2, ',', ''); ?>€
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

<!-- // var_dump($cart);
// var_dump($_SESSION['cart']); -->