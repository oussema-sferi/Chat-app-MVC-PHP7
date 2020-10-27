<?php
namespace Implementations;

use Database\Db;
use Interfaces\InterfaceUser;
use Entities\User;

class UserImplementation implements InterfaceUser {
    public static function Login(string $username, string $password): bool
    {
        $db = Db::getInstance();
        $sql = " SELECT * FROM user WHERE username = :username and password = :password";
        $query = $db->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        $result = $query->fetchAll();
        if (count($result) === 1) {
            $user = new User();
            $user->setId($result[0]['id']);
            $user->setUsername($result[0]['username']);
            $user->setPassword($result[0]['password']);
            $user->setFullName($result[0]['fullname']);
            $_SESSION['user'] = $user;
            return true;

        }
        return false;

    }
}