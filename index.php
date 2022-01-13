<?php
$title='Accueil';
require_once(__DIR__ . '/views/templates/head.php');
?>
<link rel="stylesheet" href="/../css/styles.css">
<?php $page=0;
    require_once(__DIR__ . '/views/templates/navbar.php');
    require_once(__DIR__ . '/views/V_home.php');
    require_once(__DIR__ . '/views/templates/footer.php');
?>
