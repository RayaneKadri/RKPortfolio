<?php
$title='CV';
require_once(__DIR__ . '/../views/templates/head.php');
?>
<link rel="stylesheet" href="/../css/styles.css">
<link rel="stylesheet" href="/../css/cv.css">
<link rel="icon" href="../favicon.ico">
<?php $page=1;
    require_once(__DIR__ . '/../views/templates/navbar.php');
    require_once(__DIR__ . '/../views/V_cv.php');
    require_once(__DIR__ . '/../views/templates/footer.php');
?>
