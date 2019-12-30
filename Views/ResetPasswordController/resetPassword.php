<!DOCTYPE_HTML>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Najpiękniejsze Pizze Świata</title>
		<meta name="description" content="Serwis zrzeszający wszystkich fanatyków pięknych pizz na świecie" />
		<meta name="keywords" content="pizza, pizzy, zdjęcia, obrazki, piękne, piekne" />
		
		<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
		<link href="../Public/css/resetPassword.css" rel="stylesheet" type="text/css" />
	<!--	<link href="../Public/css/fontello.css" rel="stylesheet" type="text/css" /> -->
	</head>
	<body>
	
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="resetPassword">
					<div id="resetPasswordContainer">
						<form action="?page=login" method="POST">
							<div id="resetUserPassword">
								<div id="iconResetPasswordTemplate">
									ikona
								</div>
								<input type="text" name="password" id="resetUserPasswordText" placeholder="email@email.com"><br>
							</div>
							<div style="clear: both"></div>
							<div id="resetPasswordText">
								Wyslij nowe haslo na e-mail
							</div>
							<div id="resetPasswordSubmitWrapper">
								<input type="submit" name="email_submit" value="Continue" id="resetPasswordSubmit"><br>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>