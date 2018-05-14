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
	
	<h1 class="titre_ps4">Prochaines sorties - PC</h1>

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
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/tennis.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Tennis World Tour</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>

			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/vampyr.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Vampyr</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>
				
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/shaq.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Shaq Fu</span>
					<p><span class="prix">24,99 €</span></p>
				</div>
			</a>
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/moto.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Moto GP 18</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/dark.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Darksiders 3</span>
					<p><span class="prix">59,99 €</span></p>
				</div>
			</a>

			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/eight.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">8 Bit Armies Collector</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>
				
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/cthulhu.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Call of Cthulhu</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>

			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/pc/biomutant.jpg">
					<p><span class="console" style="color: white;">PC</span></p>
					<span class="titre">Biomutant</span>
					<p><span class="prix">59,99 €</span></p>
				</div>
			</a>
				
		</div>

		<footer>a</footer>

	</section>

	<div class="box">
		
	</div>

</body>

</html>