<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Login example</title>
	
	<link href="scss/styles.css" rel="stylesheet">
	

</head>

<body>

    <section class="containerLogin">
        <form action="check_login.php" method="post" class"containerLogin__form">
            <input type="text" name="username" id="username" placeholder="Username" class="containerLogin__input">
            <input type="password" name="password" id="password" placeholder="Password" class="containerLogin__input">
            <button type="submit" class="containerLogin__button">Login</button>
        </form>
    </section>

</body>

<script src="js/script.js"></script>

</html>
