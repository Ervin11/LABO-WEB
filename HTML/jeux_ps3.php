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

	<section>

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
	
	<h1 class="titre_ps4">Playstation 3</h1>

	<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps3/handball.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Handball 16</span>
					<p><span class="prix">12,95 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps3/codg.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Call Of Duty : Ghosts</span>
					<p><span class="prix">4,95 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps3/uncharted2.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Uncharted 2</span>
					<p><span class="prix">4,95 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps3/mgs.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Metal Gear Solid 4</span>
					<p><span class="prix">5,06 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps3/batman.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Batman : Arkham City</span>
					<p><span class="prix">9,95 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps3/driver.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Driver : San Francisco</span>
					<p><span class="prix">6,95 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps3/dante.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Dante's Inferno</span>
					<p><span class="prix">8,24 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps3/dark.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Dark Souls II</span>
					<p><span class="prix">16,16 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps3/resid.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Resident Evil</span>
					<p><span class="prix">11,05 €</span></p>
				</div>
			</a>

			<a href="deus.php">
				<div class="nail">
					</br><img src="../img/ps3/skyrim.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">TES V : Skyrim</span>
					<p><span class="prix">13,34 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps3/nfl.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Madden NFL 15</span>
					<p><span class="prix">13,62 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps3/ride.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Ride</span>
					<p><span class="prix">16,96 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps3/marvel.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Marvel VS Capcom 3</span>
					<p><span class="prix">31,55 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps3/sonic.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Sonic Generations</span>
					<p><span class="prix">12,31 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps3/lbp.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Little Big Planet 3</span>
					<p><span class="prix">14,95 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps3/codmw.jpg">
					<p><span class="console" style="color: white;">PS3</span></p>
					<span class="titre">Modern Warfare 3</span>
					<p><span class="prix">4,95 €</span></p>
				</div>
			</a>
				
		</div>

		<footer>a</footer>

	</section>

	<div class="box">
		
	</div>

</body>

</html>