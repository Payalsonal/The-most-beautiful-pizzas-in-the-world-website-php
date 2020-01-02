<!DOCTYPE_HTML>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Najpiękniejsze Pizze Świata</title>
		<meta name="description" content="Serwis zrzeszający wszystkich fanatyków pięknych pizz na świecie" />
		<meta name="keywords" content="pizza, pizzy, zdjęcia, obrazki, piękne, piekne" />
		
		<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
		<link href="../Public/css/register.css" rel="stylesheet" type="text/css" />
	<!--	<link href="../Public/css/fontello.css" rel="stylesheet" type="text/css" /> -->
	</head>
	<body>
	
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="register">
					<div id="registerContainer">
						<form action="?page=register" method="POST">
						
							<div id="registerUserName">
								<div id="iconRegisterTemplate">
									ikona
								</div>
								<input type="text" name="userName" id="registerUserNameText" placeholder="Nazwa użytkownika"><br>
							</div>
							<div id="registerUserPassword">
								<div id="iconRegisterTemplate">
									ikona
								</div>
								<input type="password" name="password" id="registerUserPasswordText" placeholder="password"><br>
							</div>
							<div id="registerUserEmail">
								<div id="iconRegisterTemplate">
									ikona
								</div>
								<input type="text" name="email" id="registerUserEmailText" placeholder="email@email.com"><br>
							</div>
							<?php
							if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
							?>
							<div style="clear: both"></div>
							<div id="RegisterText">
								<a href="?page=login" class="register-link"> Masz już konto? </a>
							</div>
							<div id="registerSubmitWrapper">
								<input type="submit" name="email_submit" value="Contionue" id="registerSubmit"><br>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>