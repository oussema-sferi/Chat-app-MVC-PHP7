<?php

use Workerman\Worker;
use PHPSocketIO\SocketIO;
require_once '../Utils/Db.php';
require_once '../Logic/Interfaces/InterfaceMessage.php';
require_once '../Logic/Implementations/MessageImplementation.php';

require_once __DIR__ . '..\..\vendor\autoload.php';
// Listen port 2020 for socket.io client
$io = new SocketIO(2018);
$io->on('connection', static function ($socket) {
    echo 'connected ...';
    $socket->addedUser = true;
    $socket->on('message-sent', static function ($data) use ($socket) {
        echo 'message received ! ...';
        \Implementations\MessageImplementation::SaveMessage($data['content'], $data['id']);
        $socket->broadcast->emit('new-message', array(
            'username' => $socket->username,
            'message' => $data
        ));
    });
});

Worker::runAll();