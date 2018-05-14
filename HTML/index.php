<?php 
	session_start();
?>


<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Gaming</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
	<script src="jquery.min.js"></script>
	<script type="text/javascript" src="../js/slider.js"></script>
</head>

<body onload="showSlides()">

	<header>
		<p>
			<a href="index.php"><img class="logo" src="../img/logo1.png" alt="logo" title="logo"/></a>
		</p>

		<p>
			<a class="panier" href="panier.php">
				<img class="icon_panier" src="../img/panier.png" alt="icon panier"/>
				<span>Panier</span>
			</a>
		</p>
        
		
		<?php 

		if (isset($_SESSION['u_id'])) {
			
			echo '<form action="../BDD/logout.php" method="POST">
					<button style="height:124px;width:127px;;background-color:black;color:white;font-size:16px;margin-top:-10px;margin-right:-32%" type="submit" name="submit"><span>Déconnexion</span></button>
				  </form>';
		} else {

			echo '<p>
			<a class="compte" href="connection.php">
			<img class="icon_compte" src="../img/picto.png" alt="icon compte"/>
			<span>Compte</span>
			</a>
			</p>';
		}

		?>

	</header>

	<section>

	<div class="navbar">
	  	<div class="dropdown">
		    <button class="dropbtn"><a href="#">PS4</a></button>
		    <div class="dropdown-content-ps4">
		      <a href="jeux_ps4.php">Tous les jeux</a>
		      <a href="top_ventes_ps4.php">Top des ventes</a>
		      <a href="nouveautes_ps4.php">Nouveautés</a>
		      <a href="prochaines_sorties_ps4.php">Prochaines sorties</a>
   			</div>
 		</div> 
	  	<div class="dropdown">
		    <button class="dropbtn"><a href="#home">PS3</a></button>
		    <div class="dropdown-content-ps3">
		      <a href="jeux_ps3.php">Tous les jeux</a>
		      <a href="top_ventes_ps3.php">Top des ventes</a>
   			</div>
 		</div> 
	  	<div class="dropdown">
		    <button class="dropbtn"><a href='#'>XBOX ONE</a></button>
		    <div class="dropdown-content-xbox1">
		      <a href="jeux_xbox_one.php">Tous les jeux</a>
		      <a href="top_ventes_xbox_one.php">Top des ventes</a>
		      <a href="nouveautes_xbox_one.php">Nouveautés</a>
		      <a href="prochaines_sorties_xbox_one.php">Prochaines sorties</a>
   			</div>
 		</div> 
 		<div class="dropdown">
		    <button class="dropbtn"><a href='#'>XBOX 360</a></button>
		    <div class="dropdown-content-xbox360">
		      <a href="jeux_xbox.php">Tous les jeux</a>
		      <a href="top_ventes_xbox.php">Top des ventes</a>
   			</div>
 		</div> 
 		<div class="dropdown">
		    <button class="dropbtn"><a href='#'>SWITCH</a></button>
		    <div class="dropdown-content-switch">
		      <a href="jeux_switch.php">Tous les jeux</a>
		      <a href="top_ventes_switch.php">Top des ventes</a>
		      <a href="nouveautes_switch.php">Nouveautés</a>
		      <a href="prochaines_sorties_switch.php">Prochaines sorties</a>
   			</div>
 		</div> 
 		<div class="dropdown">
		    <button class="dropbtn"><a href='#'>3DS/2DS</a></button>
		    <div class="dropdown-content-ds">
		      <a href="jeux_ds.php">Tous les jeux</a>
		      <a href="top_ventes_ds.php">Top des ventes</a>
		      <a href="prochaines_sorties_ds.php">Prochaines sorties</a>
   			</div>
 		</div> 
 		<div class="dropdown">
		    <button class="dropbtn"><a href='#'>PC</a></button>
		    <div class="dropdown-content-pc">
		      <a href="jeux_pc.php">Tous les jeux</a>
		      <a href="top_ventes_pc.php">Top des ventes</a>
		      <a href="nouveautes_pc.php">Nouveautés</a>
		      <a href="prochaines_sorties_pc.php">Prochaines sorties</a>
   			</div>
 		</div> 
	</div>
	
	</br>

		<div class="slideshow-container">
			
			<div class="slide fade">
				<img class="img" src="../img/dbz.jpg">
			</div>

			<div class="slide fade">
				<img class="img" src="../img/promo_xbox_one.jpg">
			</div>

			<div class="slide fade">
				<img class="img" src="../img/bundle_xbox.jpg">
			</div>

			</br>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>

			<div style="text-align:center">

		        <span class="dot" onclick="currentSlide(1)"></span> 
		  		<span class="dot" onclick="currentSlide(2)"></span> 
		  		<span class="dot" onclick="currentSlide(3)"></span> 
		  	</div>
		  		
		</div>
		
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/switch/aot.jpg">
					<p><span class="console" style="color: white;">Switch</span></p>
					<span class="titre">Attack on Titan 2</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps4/farcry.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Farcry 5 - Deluxe</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps4/god_of_war.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">God Of War</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps4/detroit.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Detroit Become Human</span>
					<p><span class="prix">79,99 €</span></p>
				</div>
			</a>
				
		</div>
		
			<button class="button">
			<a href="prochaines_sorties.php">
			<span>Voir toutes les prochaines sorties</span>
			</a>
			</button>

 		<div class="table-container"> 
			
			<a href="">
				<div class="nail">
					</br><img src="../img/ps4/titan.png">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Titan Quest</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>
			
			<a href="">	
				<div class="nail">
					</br><img src="../img/ps4/isle.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">TT Isle of Man</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>	

			<a href="">
				<div class="nail">
					</br><img src="../img/switch/overcooked.png">
					<p><span class="console" style="color: white;">Switch</span></p>
					<span class="titre">Overcooked</span>
					<p><span class="prix">39,99 €</span></p>
				</div>
			</a>	

			<a href="">
				<div class="nail">
					</br><img src="../img/ps4/arizona.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Arizona Sunshine</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>
				
		</div>

			<button class="button">
				<a href="nouveautes.php">
					<span>Voir plus de nouveautés</span>
				</a>
			</button>

		<footer>
			<p>a</p>
		</footer>	

	</section>
	
</body>

</html>