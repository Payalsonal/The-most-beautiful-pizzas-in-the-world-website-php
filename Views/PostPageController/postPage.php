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
		<script src="https://kit.fontawesome.com/397b33f34a.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="container">
			<?php include(dirname(__DIR__).'/Common/navbar.php'); ?>
			<div id="wrapper">
				<?php include(dirname(__DIR__).'/Common/logo.php'); ?>
				<div id="mainContent">
					
					<div class = "arrowContainer">
						<form action='<?php echo($_SERVER['REQUEST_URI'])?>' method="POST">
							<input type="submit" name="previous" value="Poprzednia" class="arrow"><br>
						</form>
					</div>
					<?php foreach($posts as $post): ?>
						<div class="post">
						<img src="../Public/img/<?php echo $post->getCategory()."/".$post->getSource()?>" class="PostImage">
						<ul class="postDescription">
							<li> <h2> <?php echo $post->getTitle()?> </h2> </li>
							<li> <?php echo $post->getDescription()?> </li>
							<li><?php echo $post->getLikes()?> <i class="fas fa-heart"></i></i>
								<?php echo $post->getDisLikes()?> <i class="fas fa-heart-broken"></i></i>
								<span style="font-weight: 700">SHARE</span> <i class="fas fa-share-alt"></i> </li>
						</ul>
					</div>
					<?php endforeach ?>
					<div class = "arrowContainer">
						<form action='<?php echo($_SERVER['REQUEST_URI'])?>' method="POST">
							<input type="submit" name="next" value="Następna" class="arrow"><br>
						</form>
					</div>
					<div style="clear: both;"></div>	
				</div>
			</div>
			<?php include(dirname(__DIR__).'/Common/footer.php'); ?>
		</div>
	</body>
</html>