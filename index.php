<?php 

session_start();

?>

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="scripts/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="scripts/showloginwindow.js"></script> 	<!-- Script til visning af loginvindue. -->
	<title>SeanWEB</title>
</head>

<body>
	<header>
		
	</header>
	<div id="wrapper">
		<header>
			<nav>
				<ul>
					<li><a href="#">Forside</a></li>
					<li><a href="#">Projekter</a></li>
					<li><a href="#">Curriculum Vitae</a></li>
					<li><a href="#">Kontakt</a></li>
					<li class="login_section"><input class="userbutton" type="button" onclick="showLoginWindow()" value="Log ind"></li>	
				</ul>
				<!-- Her bliver et loginvindue/loginsettings vist -->
				<article id="popup">
				</article>
				<hr>

			</nav>
		</header>
		
		<section>
		
			<article id="first_colum">
				
					<h2>Velkommen</h2>
					<img src="images/Sean.jpg">
					<p class="alm_text">
						Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. 
						Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. 
						Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. 
						Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, 
						og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.
					</p>
			</article>
			
			<article id="second_colum">
				
					<h2>Nyheder</h2>
					<p>
						Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. 
						Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. 
						Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. 
						Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, 
						og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.	
					</p>
			</article>
			

			<article id="second_colum">
				
					<h2>Nyheder2</h2>
					<p>
						Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. 
						Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. 
						Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer. 
						Sætningen blev gjordt kendt i 1960'erne med lanceringen af Letraset-ark, som indeholdt afsnit med Lorem Ipsum, 
						og senere med layoutprogrammer som Aldus PageMaker, som også indeholdt en udgave af Lorem Ipsum.	
					</p>
			</article>
		</section>

		<aside>
			
		</aside>

		<footer>
			<section id="foot_right_colum">
				<h1 class="footer_header">Nyeste projekter</h1>
				<p class="footer_text">Test</p>
				<p class="footer_text">Test</p>
				<p class="footer_text">Test</p>
			</section>
		</footer>

	</div>
</body>

</html>