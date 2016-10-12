<!DOCTYPE html>
<html>
<head>
 <title>Spark API demo</title>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
 <style type="text/css">
 body {
  background-color: white;
  text-align: center;
  padding: 50px;
  font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
 }
 </style>
 <script type="text/javascript">
 function PostSparkMessage() {
      var email = document.getElementById("email").value;
      var message = document.getElementById("message").value;
      var authKey = document.getElementById("authkey").value;
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "https://api.ciscospark.com/v1/messages", false);
      xhttp.setRequestHeader("Content-type", "application/json");
  xhttp.setRequestHeader("Authorization", "Bearer " + authKey);     
  xhttp.send("{\"text\":\"" + message + "\",\"toPersonEmail\":\"" + email + "\"}");
  var response = JSON.parse(xhttp.responseText);
  document.getElementById("SendMsgResp").innerHTML=JSON.stringify(response);
 }

function fun(){
    document.getElementById("t").innerHTML = "hello";
}
 </script>
</head>
<body>
 <img id="logo" src="logo_blue.png" alt="logo.png"/>
 <h1><?php echo "Spark your friend from Here"; ?></h1>
Your authorisation key: <input type="text" id="authkey" placeholder="ZTg1OWExYmYtODY1My00NjUxLTg5ZTQtZGQ2ZDM5MTM2ZjNkNmIzZGE5YmUtZDA3"></input><br>
Your Friend's Email: <input type="email" id="email" placeholder="adivesh@cisco.com"></input><br>
Your message: <input type="text" id="message" placeholder="Hello Anupam"></input><br>
 <button type="submit" onclick="PostSparkMessage()">Send</button>
 <p id="SendMsgResp">
  Waiting for Response!
 </p>
<a href="aricent.mp3">Play my song</a>
</body>
</html>
