<?php

namespace Interfaces;

use ArrayObject;

interface InterfaceUser {
    public static function Login(string $username, string $password):bool;
}