<?php
$title='Projet de première année';
require_once(__DIR__ . '/../views/templates/head.php');
?>
<link rel="stylesheet" href="/../css/styles.css">
<link rel="stylesheet" href="/../css/realisations.css">
<link rel="icon" href="../favicon.ico">
<?php $page=2;
    require_once(__DIR__ . '/../views/templates/navbar.php');
    require_once(__DIR__ . '/../views/V_firstyear.php');
    require_once(__DIR__ . '/../views/templates/footer.php');
?>
