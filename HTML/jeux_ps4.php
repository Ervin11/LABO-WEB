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
	
	<h1 class="titre_ps4">Playstation 4</h1>

	<div class="table-container">
			
			<a href="fiche_elder_ps4.php">
				<div class="nail">
					</br><img src="../img/ps4/elder.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">The Elder Scrolls Online</span>
					<p><span class="prix">4,99 €</span></p>
				</div>
			</a>

			<a href="fiche_guardian_ps4.php">
				<div class="nail">
					</br><img src="../img/ps4/guardian.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">The Last Guardian</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>
				
			<a href="fiche_horizon_ps4.php">	
				<div class="nail">
					</br><img src="../img/ps4/horizon.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Horizon Zero Dawn</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>
			
			<a href="fiche_uncharted_ps4.php">	
				<div class="nail">
					</br><img src="../img/ps4/uncharted.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Uncharted</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps4/last.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">The Last Of Us</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps4/final.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Final Fantasy X</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps4/wipeout.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Wipeout</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps4/tomb.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Tomb Raider</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps4/until.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Until Dawn</span>
					<p><span class="prix">19,99 €</span></p>
				</div>
			</a>

			<a href="deus.php">
				<div class="nail">
					</br><img src="../img/ps4/deus.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Deus Ex</span>
					<p><span class="prix">9,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps4/resident.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Resident Evil 7</span>
					<p><span class="prix">49,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps4/mass.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Mass Effect Andromeda</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>
				
		</div>
		<div class="table-container">
			
			<a href="aot.php">
				<div class="nail">
					</br><img src="../img/ps4/honor.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">For Honor</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>

			<a href="farcry.php">
				<div class="nail">
					</br><img src="../img/ps4/monster.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Monster Hunter World</span>
					<p><span class="prix">69,99 €</span></p>
				</div>
			</a>
				
			<a href="god_of_war.php">	
				<div class="nail">
					</br><img src="../img/ps4/dmc.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Devil May Cry</span>
					<p><span class="prix">34,99 €</span></p>
				</div>
			</a>
			
			<a href="detroit.php">	
				<div class="nail">
					</br><img src="../img/ps4/tom.jpg">
					<p><span class="console" style="color: white;">PS4</span></p>
					<span class="titre">Tom Clancy's</span>
					<p><span class="prix">29,99 €</span></p>
				</div>
			</a>
				
		</div>

		<footer>a</footer>

	</section>

	<div class="box">
		
	</div>

</body>

</html>