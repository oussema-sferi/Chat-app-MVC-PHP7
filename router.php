<?php
require_once 'Utils/Db.php';
require_once 'Models/User.php';
require_once 'Models/Message.php';
require_once 'Logic/Interfaces/InterfaceUser.php';
require_once 'Logic/Implementations/UserImplementation.php';
require 'Logic/Interfaces/InterfaceMessage.php';
require 'Logic/Implementations/MessageImplementation.php';



session_start();

if(isset($_GET['controller'])) {

    switch ($_GET['controller']) {
        case 'home':
            require 'Controllers/HomeController.php';
            break;
        case 'login':
            require 'Controllers/LoginController.php';
            break;
        case 'create-account':
            require 'Controllers/CreateAccountController.php';
            break;
        case 'signup':
            require 'Controllers/SignUpController.php';
            break;
        default:
            echo '404 Not Found';
    }

}
