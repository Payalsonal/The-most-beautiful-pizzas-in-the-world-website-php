<?php
if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
    die('You are not logged in!');
}

if(!in_array('ROLE_USER', $_SESSION['role'])) {
    die('You do not have permission to watch this page!');
}
?>

<!DOCTYPE_HTML>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Najpiękniejsze Pizze Świata</title>
		<meta name="description" content="Serwis zrzeszający wszystkich fanatyków pięknych pizz na świecie" />
		<meta name="keywords" content="pizza, pizzy, zdjęcia, obrazki, piękne, piekne" />
		<link href="../Public/css/style.css" rel="stylesheet" type="text/css" />
		<link href="../Public/css/upload.css" rel="stylesheet" type="text/css" />
		<script src="https://kit.fontawesome.com/397b33f34a.js" crossorigin="anonymous"></script>
	</head>
	<body>
	
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="mainContent">
					<div class="userPanel">
						<form action="?page=upload" method="POST" enctype="multipart/form-data">
							<div class="inputContainer">
								<div class="inputIcon">
									<i class="far fa-image"></i>
								</div>
								<input type="file" name="file" class="input">
							</div>
                            <div class="inputContainer">
                                <div class="inputIcon">
                                    <i class="fas fa-font"></i>
                                </div>
                                <input type="text" name="title" class="input" placeholder="Tytuł">
                            </div>
                            <div class="inputContainer">
                                <div class="inputIcon">
                                    <i class="fas fa-bold"></i>
                                </div>
                                <input type="text" name="description" class="input" placeholder="Opis">
                            </div>
							<?php
							if(isset($messages)){
								foreach($messages as $message) {
									echo $message;
									}
								}
							?>
							<input type="submit" value="Continue" class="inputSubmit"><br>
						</form>
					</div>	
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>