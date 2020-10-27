<?php

session_start();

if(isset($_GET['controller'])) {

    switch ($_GET['controller']) {
        case '':
            break;
        case 'login':
            require 'Controllers/LoginController.php';
            break;
        default:
            echo '404 Not Found';
    }

}
