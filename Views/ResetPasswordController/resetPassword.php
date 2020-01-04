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
				<div id="mainContent">
					<div class="userPanel">
						<form action="?page=resetPassword" method="POST">
							<div class="inputContainer">
								<div class="inputIcon">
									ikona
								</div>
								<input type="text" name="email" class="input" placeholder="email@email.com">
							</div>
							<?php
							if(isset($messages)){
								foreach($messages as $message) {
									echo $message;
									}
								}
							?>
							<div class="informationText">
								Wyślij nowe hasło na e-mail
							</div>
							<input type="submit" value="Continue" class="inputSubmit"><br>
						</form>
					</div>	
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>