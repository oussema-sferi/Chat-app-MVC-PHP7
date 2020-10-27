<?php
// Example of a php socket.io client ...
$emitter = new Emitter('127.0.0.1',2018);
$emitter->emit('newmsg', array('type'=>'blog','content'=>'.....'));