<?php

if (!empty($_POST)) {
    if (!empty($_POST['size'])) {
        $bonnets = array_filter($bonnets, function (Bonnet $bonnet) {
            return in_array($_POST['size'], $bonnet->getSize());
        });
    }

    if (!empty($_POST['material'])) {
        $bonnets = array_filter($bonnets, function (Bonnet $bonnet) {
            return in_array($_POST['material'], $bonnet->getMaterial());
        });
    }
    if (!empty($_POST['minPrice'])) {
        $minPrice = floatval($_POST['minPrice']);
        $bonnets = array_filter($bonnets, function (Bonnet $bonnet) use ($minPrice) {
            return $bonnet->getPrice() >= $minPrice;
        });
    }
    if (!empty($_POST['maxPrice'])) {
        $maxPrice = floatval($_POST['maxPrice']);
        $bonnets = array_filter($bonnets, function (Bonnet $bonnet) use ($maxPrice) {
            return $bonnet->getPrice() <= $maxPrice;
        });
    }
}

$pageName = "All our bonnets";
?>

<form action="" method="post">
    <label for="size">Size:</label>
    <select id="size" name="size">
        <option value=""> Select your size</option>
        <?php
        foreach (Bonnet::AVAILABLE_SIZES as $key => $size) {
            echo '<option value="' . $size . '">' . $size . '</option>';
        }
        ?>
    </select>

    <label for="material">Material:</label>
    <select id="material" name="material">
        <option value=""> Select material</option>
        <?php
        foreach (Bonnet::AVAILABLE_MATERIAL as $key => $material) {
            echo '<option value="' . $material . '">' . $material . '</option>';
        }
        ?>
    </select>
    <label for="minPrice" maxlength="4" size="4">Minimum price:</label>
    <input type="number" name="minPrice" value="<?= $minPrice; ?>">

    <label for="maxPrice">Maximum price:</label>
    <input type="number" name="maxPrice" value="<?= $maxPrice; ?>">

    <button type="submit">Let's go!</button>
</form>
<table class="table">
    <th>Bennets</th>
    <th>PriceHT</th>
    <th>Price TTC</th>
    <th>Details</th>
    <th>Action</th>

    <?php
    foreach ($bonnets as $id => $bonnet) {
        showBonnet($id, $bonnet);
    } ?>
</table>