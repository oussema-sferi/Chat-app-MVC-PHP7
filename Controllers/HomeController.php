<?php
//var_dump($_SESSION);
if(isset($_SESSION['user'])) {
    require 'Views/HomeView.php';
} else {
    header('Location: Views/LoginView.php');
}