<!DOCTYPE_HTML>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Najpiękniejsze Pizze Świata</title>
		<meta name="description" content="Serwis zrzeszający wszystkich fanatyków pięknych pizz na świecie" />
		<meta name="keywords" content="pizza, pizzy, zdjęcia, obrazki, piękne, piekne" />
		
		<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
		<link href="../Public/css/changePassword.css" rel="stylesheet" type="text/css" />
	<!--	<link href="../Public/css/fontello.css" rel="stylesheet" type="text/css" /> -->
	</head>
	<body>
	
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="mainContent">
						<form action="?page=changePassword" method="POST">
							<div id="changeUserPassword">
								<div id="iconChangePasswordTemplate">
									ikona
								</div>
								<input type="password" name="password1" id="changeUserPasswordText" placeholder="password"><br>
							</div>
							<div style="clear: both"></div>
							<div id="changeUserPassword">
								<div id="iconChangePasswordTemplate">
									ikona
								</div>
								<input type="password" name="password2" id="changeUserPasswordText" placeholder="password"><br>
							</div>
							<div style="clear: both"></div>
							<?php
							if(isset($messages)){
								foreach($messages as $message) {
									echo $message;
									}
								}
							?>
							<div id="changePasswordText">
								Wpisz nowe hasło 2 razy
							</div>
							<div id="changePasswordSubmitWrapper">
								<input type="submit" name="email_submit" value="Zmień hasło" id="changePasswordSubmit"><br>
							</div>
						</form>
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>