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
		<link href="../Public/css/posts.css" rel="stylesheet" type="text/css" />
	<!--	<link href="../Public/css/fontello.css" rel="stylesheet" type="text/css" /> -->
	</head>
	<body>
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="mainContent">
					<?php
							if(isset($messages)){
								foreach($messages as $message) {
									echo $message;
									}
								}
							?>
					<div class="post">
						<img src="../Public/img/1.jpg" class="PostImage">
						<ul class="postDescription">
							<li> <h2> Top dzisiaj </h2> </li>
							<li> Opis </li>
							<li>609 |plusik| 120 |minusik| <span style="font-weight: 700">SHARE</span> |ikona| </li>
						</ul>
					</div>
					<div class="post">
						<img src="../Public/img/2.jpg" class="PostImage">
						<ul class="postDescription">
							<li> <h2> Top tygodnia </h2> </li>
							<li> Opis </li>
							<li>609 |plusik| 120 |minusik| <span style="font-weight: 700">SHARE</span> |ikona| </li>
						</ul>
					</div>
					<div class="post">
						<img src="../Public/img/1.jpg" class="PostImage">
						<ul class="postDescription">
							<li> <h2> Top miesiąca </h2> </li>
							<li> Opis </li>
							<li>609 |plusik| 120 |minusik| <span style="font-weight: 700">SHARE</span> |ikona| </li>
						</ul>
					</div>
					<div class="post">
						<img src="../Public/img/2.jpg" class="PostImage">
						<ul class="postDescription">
							<li> <h2> Top roku </h2> </li>
							<li> Opis </li>
							<li>609 |plusik| 120 |minusik| <span style="font-weight: 700">SHARE</span> |ikona| </li>
						</ul>
					</div>
					
					<div class="post">
						<img src="../Public/img/1.jpg" class="PostImage">
						<ul class="postDescription">
							<li> <h2> Top stulecia </h2> </li>
							<li> Opis </li>
							<li>609 |plusik| 120 |minusik| <span style="font-weight: 700">SHARE</span> |ikona| </li>
						</ul>
					</div>
					
					<div style="clear: both;"></div>	
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>