<?php 
	session_start();
?>

<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Gaming</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
	<link rel="stylesheet" type="text/css" href="../CSS/jeux_ps4.css"/>
	<link rel="stylesheet" type="text/css" href="../CSS/top_ventes_ps4.css"/>
	<script src="jquery.min.js"></script>
	<script type="text/javascript" src="../js/liste_déroulante.js"></script>
</head>

<body >

	<header>
		<p>
			<a href="index.php"><img class="logo" src="../img/logo1.png" alt="logo" title="logo"/></a>
		</p>
		
		<p>
			<a class="panier" href="#">
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

	<section style="height : 2200px";>

	<div class="navbar">
	  	<div class="dropdown">
		    <button class="dropbtn"><a href="#news">PS4</a></button>
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
	
	<h1 class="titre_ps4">Prochaines sorties</h1>

	<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps4/god.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">God Of War</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps4/shantae.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Shantae</span>
					<p><span class="prix">44,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps4/atari.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Atari Flashback</span>
					<p><span class="prix">24,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps4/rick.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Rick and Morty</span>
					<p><span class="prix">34,99 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/xbox1/starve.jpg">
					<p><span class="console" style="color: white;">Xbox One</span></p>
					<span class="titre">Don't Starve</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/xbox1/invisible.jpg">
					<p><span class="console" style="color: white;">Xbox One</span></p>
					<span class="titre">The Invisible Hours</span>
					<p><span class="prix">34,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/xbox1/conan.jpg">
					<p><span class="console" style="color: white;">Xbox One</span></p>
					<span class="titre">Conan Exiles D1</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/xbox1/conan_collector.jpg">
					<p><span class="console" style="color: white;">Xbox One</span></p>
					<span class="titre">Conan Exiles Collector</span>
					<p><span class="prix">79,99 €</span></p>
				</div>
			</a>
				
		</div>
		
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/switch/octopath.jpg">
					<p><span class="console" style="color: white;">Switch</span></p>
					<span class="titre">Octopath Traveler</span>
					<p><span class="prix">64,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/switch/hyrule.jpg">
					<p><span class="console" style="color: white;">Switch</span></p>
					<span class="titre">Hyrule Warriors</span>
					<p><span class="prix">64,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/switch/donkey.jpg">
					<p><span class="console" style="color: white;">Switch</span></p>
					<span class="titre">Donkey Kong Country</span>
					<p><span class="prix">64,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/switch/valkyria.jpg">
					<p><span class="console" style="color: white;">Switch</span></p>
					<span class="titre">Valkyria Chronicles 4</span>
					<p><span class="prix">59,99 €</span></p>
				</div>
			</a>
				
		</div>

		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ds/shin.jpg">
					<p><span class="console" style="color: white;">3DS</span></p>
					<span class="titre">Shin Megami Tensei</span>
					<p><span class="prix">39,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ds/dillon.jpg">
					<p><span class="console" style="color: white;">3DS</span></p>
					<span class="titre">Dead-heat Breakers</span>
					<p><span class="prix">44,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ds/sushi.jpg">
					<p><span class="console" style="color: white;">3DS</span></p>
					<span class="titre">Sushi Striker</span>
					<p><span class="prix">44,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ds/captain.jpg">
					<p><span class="console" style="color: white;">3DS</span></p>
					<span class="titre">Captain Toad</span>
					<p><span class="prix">44,99 €</span></p>
				</div>
			</a>
				
		</div>

		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/conan.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Conan Exiles D1</span>
					<p><span class="prix">39,99 €</span></p>
				</div>
			</a>

			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/conan_exiles.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Conan Exiles Collector</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>

			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/pillars.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Pillars of Eternity 2</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>
				
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/agony.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Agony</span>
					<p><span class="prix">39,99 €</span></p>
				</div>
			</a>

		</div>
		
		<footer>a</footer>

	</section>

	<div class="box">
		
	</div>

</body>

</html>