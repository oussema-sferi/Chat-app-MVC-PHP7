<?php

use Implementations\UserImplementation;

if(isset($_POST['username']) && isset($_POST['password'])) {
   if(UserImplementation::Login($_POST['username'], $_POST['password'])) {
       header('Location: router.php?controller=home');
   }
}