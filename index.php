<!DOCTYPE html>
<html>
<head>
	<title>Hello, world!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	</style>
	<script>
	function UserAction() {
    	var xhttp = new XMLHttpRequest();
    	xhttp.open("POST", "curl https://api.ciscospark.com/v1/messages -X POST -H "Authorization:Bearer ZTg1OWExYmYtODY1My00NjUxLTg5ZTQtZGQ2ZDM5MTM2ZjNkNmIzZGE5YmUtZDA3" --data "toPersonId=722bb271-d7ca-4bce-a9e3-471e4412fa77" --data "text=Hi%20Sparky"", false);
    	xhttp.setRequestHeader("Content-type", "application/json");
    	xhttp.send();
	var response = JSON.parse(xhttp.responseText);
	}
	</script>
</head>
<body>
	<img id="logo" src="logo_blue.png" alt="logo.png"/>
	<h1><?php echo "Hello, World!!"; ?></h1>
	
	<button type="submit" value="Say Hi!" onclick="PostSparkMessage()">Search</button>
</body>
</html>
