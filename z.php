
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

