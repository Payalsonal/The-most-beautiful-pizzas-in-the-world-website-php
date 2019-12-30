<!DOCTYPE_HTML>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Najpiękniejsze Pizze Świata</title>
		<meta name="description" content="Serwis zrzeszający wszystkich fanatyków pięknych pizz na świecie" />
		<meta name="keywords" content="pizza, pizzy, zdjęcia, obrazki, piękne, piekne" />
		
		<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
	<!--	<link href="../Public/css/fontello.css" rel="stylesheet" type="text/css" /> -->
	</head>
	<body>
	
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="login">
					<div id="loginContainer">
						<form action="?page=login" method="POST">
							<div id="loginUserName">
								<div id="iconLoginTemplate">
									ikona
								</div>
								<input type="text" name="userName" id="loginUserNameText" placeholder="Nazwa użytkownika"><br>
							</div>
							<div id="loginUserPassword">
								<div id="iconLoginTemplate">
									ikona
								</div>
								<input type="password" name="password" id="loginUserPasswordText" placeholder="password"><br>
							</div>
							<div style="clear: both"></div>
							<div id="LoginText">
								Zapomniałeś hasła?
							</div>
							<div id="LoginText">
								Nie masz jeszcze konta?
							</div>
							<div id="loginSubmitWrapper">
								<input type="submit" name="email_submit" value="Login" id="loginSubmit"><br>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>