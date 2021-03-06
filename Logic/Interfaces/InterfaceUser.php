<?php

namespace Interfaces;


interface InterfaceUser {
    public static function Login(string $username, string $password):bool;
    public static function SignUp(string $username, string $password, string $fullName):void;
}