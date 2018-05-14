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
	
	<div class="titre">
	<h1>The Elder Scrolls Online : Tamriel Unlimited PS4</h1>
	</div>

	<div class="titre2">
		
		<div class="infos">
			<span class="console2">PS4</span>
			<span class="date">Date de sortie : <b>09.06.2015</b></span>
			<span class="style">MMO</span>
		</div>	

	</div>

	<img class="couverture" src="../img/fiches/fiche_elder.jpg"/>
	
	<div class="container">
		
		<div class="infos2">
			<p><b>Editeur :</b> BETHESDA</p>
			<p><b>Genre :</b> MMO</p>
			<p><b>Date de sortie :</b> 9 juin 2015</p>
			<p><b>Multijoueur :</b> Oui</p>
			<p><b>Texte/Voix :</b> Français</p>
		</div>
			
	</div>

	<div class="container_prix">
		<div class="prix">
			<p>4,99 €</p>
		</div>
	</div>

	<button class="button_panier">
			
	<a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
			
	</button>	

	<div class="description">
		<div class="description1">
			<h2>Description</h2><br/><br/>
			
			<h3>AVENTURES ILLIMITÉES, AUCUN ABONNEMENT AU JEU REQUIS</h3>

			<p>The Elder Scrolls Online: Tamriel Unlimited est le premier jeu de rôle en ligne multijoueur de nouvelle génération, une expérience Elder Scrolls authentique dans un monde persistant en ligne. Devenez le héros que vous avez toujours voulu devenir et faites de cette expérience entièrement la VÔTRE. Concentrez-vous sur l'histoire héroïque ou prêtez main forte à votre alliance sur le champ de bataille. C'est à vous qu'appartient ce choix.</p>

			<h3>HISTOIRE</h3>

			<p>The Elder Scrolls Online se place chronologiquement environ 1 000 ans avant les évènements de The Elder Scrolls V: Skyrim et de l'Enfant de dragon, et juste avant l'ascension au pouvoir de Tiber Septim, le premier Empereur de Tamriel. Trois alliances rivalisent pour la suprématie et le contrôle du continent. Mais tandis que ces puissances ennemies s'affrontent pour le contrôle de la Cité Impériale, qui leur assurera la domination de Tamriel, des forces obscures sont en marche vers la destruction du monde.</p>

			<h3>THE ELDER SCROLLS ONLINE</h3>

			<p>Après 21 années de jeux de rôle à succès, maintes fois récompensés, la saga Elder Scrolls est désormais également accessible en ligne sur consoles.</p>

			<h3>FORGEZ VOTRE PROPRE EXPÉRIENCE</h3>

			<p>Combattez, fabriquez, pêchez, volez, assiégez ou explorez. Le choix vous appartient dans l'univers persistant d'Elder Scrolls.</p>

			<h3>UN JEU DE RÔLE MULTIJOUEUR</h3>

			<p>Partez seul à l'aventure, accomplissez des quêtes entre amis ou rejoignez une armée de plusieurs centaines de soldats dans des batailles JcJ épiques.</p>

			<h3>RACONTEZ VOTRE HISTOIRE</h3>

			<p>Découvrez les secrets de Tamriel tandis que vous essayez de retrouver votre âme et d'empêcher le monde de sombrer dans le Néant.</p>
		
		</div>
	</div>

		<footer>
			<p>a</p>
		</footer>	

	</section>
	
</body>

</html>