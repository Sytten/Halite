<!DOCTYPE html>
<html>

<head>
	<title>Halite4</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<script src="lib/jquery.min.js"></script>
	<script src="script/backend.js"></script>
	<script src="script/app.js"></script>

	<script type="text/javascript">
		if(getSession() != null) {
			goToDashboard();
		}
		
		$(document).ready(function() {
			$("#submit").click(function() {
				var username = $("input:text[name=username]").val();
				var password = $("input:password[name=password]").val();

			    if(getUser(null, username, null) == null) {
			    	storeUserDatabase(username, password, false)
			    	storeUserSession(username, password, false);

					goToDashboard();
				} else {
					$("#message").text("That username is already taken");
				}
			});
		});
	</script>	
</head>

<body>
	<h1>Sign Up</h1>

	<p id="message"></p>
	
	<input type="text" name="username" value="">
	<br>
	<input type="password" name="password" value="">
	<br>
	<button id="submit">Submit</button>
</body>

</html>