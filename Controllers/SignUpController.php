<?php
use Implementations\UserImplementation;

if(isset($_POST['new-username']) && isset($_POST['new-password']) && isset($_POST['new-fullname'])) {
    UserImplementation::SignUp($_POST['new-username'], $_POST['new-password'], $_POST['new-fullname']);
    header('Location: router.php?controller=home');
}