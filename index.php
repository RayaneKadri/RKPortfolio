<?php
include(__DIR__ . '/pages/controller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        home();
    }
    elseif ($_GET['action'] == 'cv') {
        cv();
    }
    elseif ($_GET['action'] == 'nolark') {
            nolark();
    }
    elseif ($_GET['action'] == 'firstyear') {
            firstyear();
     }
    }
else {
    home();
}

