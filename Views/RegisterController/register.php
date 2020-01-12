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
		<script src="https://kit.fontawesome.com/397b33f34a.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="Views/RegisterController/validation.js"></script>
	</head>
	<body>
	
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="mainContent">
					<div class="userPanel">
						<form action="?page=register" method="POST" id="contactForm">
							<div class="inputContainer">
								<div class="inputIcon">
									<i class="far fa-user"></i>
								</div>
								<input type="text" name="userName" class="input" placeholder="Nazwa użytkownika">
							</div>
							<div class="inputContainer">
								<div class="inputIcon">
                                    <i class="fas fa-lock-open"></i>
								</div>
								<input type="password" name="password" class="input" placeholder="password">
							</div>
							<div class="inputContainer">
								<div class="inputIcon">
                                    <i class="far fa-envelope-open"></i>
								</div>
								<input type="text" name="email" class="input" placeholder="email@email.com">
							</div>
                            <div class="informationText" id="warning" style="color: red;"></div>
							<div class="informationText">
								<a href="?page=login" class="link"> Masz już konto? </a>
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