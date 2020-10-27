<html>
<head>

</head>
<body>
<input type="text" id="message-input" placeholder="enter a text">
<button onclick="sendMessage()"> Send</button>
<div id="message-box">

</div>
<script src="node_modules/socket.io-client/dist/socket.io.js"></script>
<script>
    const socket = io('http://127.0.0.1:2018');
</script>
<script>
    function sendMessage(){
        console.log('message sent...');
        let message = document.getElementById('message-input');
        socket.emit('message-sent',{content:message.value})
        document.getElementById('message-box').append(`<p>You: ${message.value}</p>`)
    }
    socket.on('new-message',(data)=>{
        console.log(data);
        console.log('message receiiiiiived');
        document.getElementById("message-box").append(`<p> User : ${data.message.content} </p>}`);
    });



</script>
</body>

</html>
