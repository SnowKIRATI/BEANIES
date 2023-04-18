<?php
include_once 'includes/header.php';

$pages = [
    'list' => 'Our beanies',
    'home' => 'Welcome',
    'login' => 'Connection',
    'logout' => '',
    'cart' => 'Your basket',
    'formulaire' => 'contact'
];
$page = 'home';

if (isset($_GET['page']) && array($_GET['page'], $pages)) {
    $page = $_GET['page'];
}
// var_dump($page, $_GET['page'], $pages);

$pageTitle = $pages[$page];

// ob_start();

include_once 'pages/' . $page . '.php';

include_once 'includes/footer.php';

// ob_end_flush();
?>