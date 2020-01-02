<nav>
	<div id="navbar">
		<br><br>
		<ul class="navigation">
			<li> <h3> KATEGORIE: </h3> </li>
			<li> PIZZE WŁOSKIE </li>
			<li> PIZZE GRUBE </li>
			<li> PIZZE CIEŃKIE </li>
			<li> PIZZE SEROWE</li>
			<li> PIZZE ŚWIATA</li>
			<li> <h3> PANEL UŻYTKOWNIKA: </h3> </li>
			<li> <a href="?page=register" class="navigation-link"> REJESTRACJA </a> </li>
			<li> <a href="?page=login" class="navigation-link"> ZALOGUJ </a> </li>
			<?php
				if(isset($_SESSION['id'])) {
					echo <<<EOT
					<li> <a href='?page=logout' class='navigation-link'> WYLOGUJ </a>
					<li> <a href='?page=resetPassword' class='navigation-link'> RESET HASŁA </a> </li>
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
</nav>