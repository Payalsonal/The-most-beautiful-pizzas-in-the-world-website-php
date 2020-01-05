	<div id="navbar">
		<br><br>
		<ul class="navigation">
			<?php
				if(isset($_SESSION['id'])) {
					echo <<<EOT
			<li> <h3> KATEGORIE: </h3> </li>
			<li> <a href="?page=postPage&top" class="navigation-link"> TOP PIZZE </a> </li>
			<li> <a href="?page=postPage&world" class="navigation-link"> PIZZE ŚWIATA </a> </li>
			<li> <a href="?page=postPage&italian" class="navigation-link"> PIZZE WŁOSKIE </a> </li>
			<li> <a href="?page=postPage&fluffy" class="navigation-link"> PIZZE GRUBE </a> </li>
			<li> <a href="?page=postPage&thin" class="navigation-link"> PIZZE CIEŃKIE </a> </li>
			<li> <a href="?page=postPage&cheese" class="navigation-link"> PIZZE SEROWE </a> </li>
EOT;
				}
			?>
			<li> <h3> PANEL UŻYTKOWNIKA: </h3> </li>
			<?php
				if(!isset($_SESSION['id'])) {
					echo <<<EOT
					<li> <a href="?page=register" class="navigation-link"> REJESTRACJA </a> </li>
					<li> <a href="?page=login" class="navigation-link"> ZALOGUJ </a> </li>
					<li> <a href='?page=resetPassword' class='navigation-link'> RESET HASŁA </a> </li>
EOT;
				}
				if(isset($_SESSION['id'])) {
					echo <<<EOT
					<li> <a href='?page=logout' class='navigation-link'> WYLOGUJ </a>
					<li> <a href='?page=changePassword' class='navigation-link'> ZMIANA HASŁA </a> </li>
EOT;
				}
			?>
		</ul>
				<!--	<div id="icons">
					
						<div class="icon">
							<i class="icon-instagram"></i>
						</div>
						<div class="icon">
							<i class="icon-twitter"></i>
						</div>
						<div class="icon">
							<i class="icon-facebook"></i>
						</div>
						
					</div>-->
	</div>