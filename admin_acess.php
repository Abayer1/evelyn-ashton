<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Evelyn Ashton - admin</title>
		<link rel="icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/foundation-icons.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="css/admin.css">
	</head>
<body>
	<form method="post" action="verify_admin_access.php" accept-charset="utf-8">
    	<legend>Admin login</legend>
    	<label for="username">Username</label>
    	<input id="user_name" type="s" name="username" placeholder="Username"/>
        <label for="password">Password</label>
        <input id="pass_word" type="password" name="password" placeholder="Password"/>
        <br>
        <br>
        <input type="button" value="submit"/>   	
    </form>
</body>
</html>