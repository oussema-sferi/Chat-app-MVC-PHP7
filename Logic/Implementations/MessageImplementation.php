<?php
namespace Implementations;

use Interfaces\InterfaceMessage;
use Database\Db;

class MessageImplementation implements InterfaceMessage {
    public static function SaveMessage(string $content, int $userId): void
    {
        $db = Db::getInstance();
        $sql="INSERT INTO message (content, created_at, user_id) VALUES ('$content', NOW(), '$userId')";
        $db->query($sql);
    }
}