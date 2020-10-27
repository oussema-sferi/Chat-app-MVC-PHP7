<?php

namespace Interfaces;

interface InterfaceMessage {
    public static function SaveMessage(string $content, int $userId):void;
}