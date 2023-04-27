
<?
if (!empty($_POST)) {
    if (!empty($_POST['size'])) {
        $bonnets = array_filter($bonnets, function (Bonnet $bonnet) {
            return in_array($_POST['size'], $bonnet->getSize());
        });
    }
    
}
if (!empty($_POST)) {
    if (!empty($_POST['material'])) {
        $bonnets = array_filter($bonnets, function (Bonnet $bonnet) {
            return in_array($_POST['material'], $bonnet->getMaterial());
        });
    }
}
// ..................................... Cart Avant mis dans une function!
if (isset($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]++;
}
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
    if (isset($_GET['empty'])) {
        $cart = [];
    }

    $_SESSION['cart'] = $cart;
}