<html>
<head>
	<title>WebRTC with SkylinkJS</title>
  <style>
header {
  background: #eee;
  padding: 20px;
  margin-bottom: .4em;
  font-family: Helvetica, Arial, sans-serif;
}

header a:first-child {
  float: right;
  margin: 0 0 20px 30px;
}

#container {
  position: relative;
  border: 1px #ddd solid;
  height: 180px;
  overflow-y: auto;
}

#chatbox {
  position: absolute;
  bottom: 0px;
}

.action {
  font-style: italic;
  color: gray;
}

.you {
  font-weight: bold;
}
  </style>
  
	<script src="//cdn.temasys.io/skylink/skylinkjs/0.6.x/skylink.complete.min.js"></script>
</head>
<body>

  <header>
    <input type="text" id="name" placeholder="My name" autofocus />
    <button onclick="setName()">Set my name</button>
    <button onclick="joinRoom()">Join room</button>
    <button onclick="leaveRoom()
    ">Leave room</button>
    <br/>
    <input type="text" id="message" placeholder="My message" />
    <button onclick="sendMessage()">Send message</button>
    <a href="ggg.php" target="_blank">Open a new tab to chat with yourself</a>
  </header>
  
  <div id="container">
    <div id="chatbox"></div>
  </div>
  
</body>
</html>

<script>
  var skylink = new Skylink();

skylink.on('peerJoined', function(peerId, peerInfo, isSelf) {
  var user = 'You';
  if(!isSelf) {
    user = peerInfo.userData.name || peerId;
  }
  addMessage(user + ' joined the room', 'action');
});

skylink.on('peerUpdated', function(peerId, peerInfo, isSelf) {
  if(isSelf) {
    user = peerInfo.userData.name || peerId;
    addMessage('You\'re now known as ' + user, 'action');
  }
});

skylink.on('peerLeft', function(peerId, peerInfo, isSelf) {
  var user = 'You';
  if(!isSelf) {
    user = peerInfo.userData.name || peerId;
  }
  addMessage(user + ' left the room', 'action');
});

skylink.on('incomingMessage', function(message, peerId, peerInfo, isSelf) {
  var user = 'You',
      className = 'you';
  if(!isSelf) {
    user = peerInfo.userData.name || peerId;
    className = 'message';
  }
  addMessage(user + ': ' + message.content, className);
});

skylink.init({
  appKey: 'e90245da-3385-4943-bc33-936e1aef60e2',
  defaultRoom: 'asds'
}); // Get your own key at https://console.temasys.io

function setName() {
  var input = document.getElementById('name');
  skylink.setUserData({
    name: input.value
  });
}

function joinRoom() {
  skylink.joinRoom();
}

function leaveRoom() {
  skylink.leaveRoom();
}

function sendMessage() {
  var input = document.getElementById('message');
  skylink.sendP2PMessage(input.value);
  input.value = '';
  input.select();
}

function addMessage(message, className) {
  var chatbox = document.getElementById('chatbox'),
    div = document.createElement('div');
  div.className = className;
  div.textContent = message;
  chatbox.appendChild(div);
}
</script>