               
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="panel panel-info">
                          <div class="panel-heading align-left">
                            <h3 class="panel-title">LIVE SURGERY</h3>
                          </div>
                          <div class="panel-body">
                            <div>
                            <div class="col-md-5 col-sm-5">
                              
                            <img src="img/images.jpg" width="500" height="430">

                            </div>
                            <div class="col-md-1 col-sm-1"></div>
                            <div class="col-md-4 col-sm-4">
                            <input id="name" name="textinput" type="text" placeholder="My name" class="form-control input-md" autofocus><br>
                            <button onclick="setName()">Set my name</button>
                                   
                            <button onclick="joinRoom()">Join room</button>   &nbsp;<button onclick="leaveRoom()">Leave room</button> <br><br>

                              <div id="container" >
                              <div id="chatbox" style="border: 1px solid black; width:350px; height:150px; overflow:auto">
                              </div>
                              <br>
                              <!-- <input type="text" id="message" placeholder="My message" /> -->
                              <textarea class="form-control" id="message" name="message" rows="3" cols="20" style="overflow:auto"></textarea>
                                <button onclick="sendMessage()">Send message</button>
                              
                                                        



                            </div>



                        


                            </div>
                          </div>
                        </div>
                    </div>
                </div>
</div>

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
  appKey: '8ac312fc-ee51-4d7b-8517-78fd103acc17',
  defaultRoom: 'group2'
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
