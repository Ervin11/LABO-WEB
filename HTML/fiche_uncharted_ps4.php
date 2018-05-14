<?php 
	session_start();
?>

<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Gaming</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css"/>
	<link rel="stylesheet" type="text/css" href="../CSS/fiche_elder_ps4.css"/>	
	<script src="jquery.min.js"></script>
	<script type="text/javascript" src="../js/slider.js"></script>
</head>

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

<body>

	<section style="height: 1250px;">

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
	
	<div class="titre">
	<h1>Uncharted : The Lost Legacy PS4</h1>
	</div>

	<div class="titre2">
		
		<div class="infos">
			<span class="console2">PS4</span>
			<span class="date">Date de sortie : <b>23.08.2017</b></span>
			<span class="style">Action / Aventure</span>
		</div>	

	</div>

	<img class="couverture" src="../img/fiches/fiche_uncharted_ps4.jpg"/>
	
	<div class="container">
		
		<div class="infos2">
			<p><b>Editeur :</b> SONY</p>
			<p><b>Genre :</b> Action / Aventure</p>
			<p><b>Date de sortie :</b> 23 août 2017</p>
			<p><b>Multijoueur :</b> Oui</p>
			<p><b>Texte/Voix :</b> Français</p>
		</div>
			
	</div>

	<div class="container_prix">
		<div class="prix">
			<p>19,99 €</p>
		</div>
	</div>

	<button class="button_panier">
			
	<a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
			
	</button>	

	<div class="description">
		<div class="description1">
			<h2>Description</h2><br/><br/>
			
			<h3>Uncharted : The Lost Legacy vous donnera accès aux modes multijoueur et Survie d'Uncharted 4 : A Thief’s End.</h3>

			<p>L'excellent studio de développement Naughty Dog nous livre la première aventure indépendante de l'histoire de la franchise Uncharted, conduite par Chloe Frazer.</p>

			<p>Afin de récupérer un antique et légendaire artefact indien et l'empêcher de tomber aux mains d'un impitoyable profiteur de guerre, Chloe Frazer doit demander l’aide de la célèbre mercenaire Nadine Ross (déjà croisée dans Uncharted 4 : A Thief's End).</p>

			<p>S'aventurant profondément dans les Ghats occidentaux d'Inde, Chloe et Nadine devront apprendre à travailler en équipe pour mettre la main sur l'artefact, affronter de féroces adversaires et empêcher la région de sombrer dans le chaos.</p>

			<p>Le multijoueur en ligne sur PS4 nécessite un abonnement à PlayStation Plus.</p>
		
		</div>
	</div>

		<footer style="margin-top: 38%;">
			<p>a</p>
		</footer>	

	</section>
	
</body>

</html>