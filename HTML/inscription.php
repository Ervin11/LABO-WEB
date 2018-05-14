<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Gaming</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/inscription.css"/>
	<script src="jquery.min.js"></script>

</head>

<body>

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
        <p>
			<a class="compte" href="connection.php">
				<img class="icon_compte" src="../img/picto.png" alt="icon compte"/>
				<span>Compte</span>
			</a>
		</p>

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


	<h1 style="margin-top: 50px; color: white ; text-shadow: 2px 2px #424242;">Inscription</h1>

	<form action="../BDD/signup.php" method="POST">
		<div class="input-box">
			<div class="box">
				<div class="colonne1">
				<label for="input-nom">Nom</label>
				<input align="left" class="input-nom" type="text" name="last">
				<br/>
				<br/>
				<label for="input-prenom">Prénom</label>
				<input align="right" class="input-prenom" type="text" name="first">
				<br/>
				<br/>
				<label for="input-adresse">Adresse</label>
				<input class="input-adresse" type="text" name="adress">
				<br/>
				<br/>
				<label for="input-cp">Code postal</label>
				<input class="input-cp" type="number" name="cp">
				<br/>
				<br/>
				</div>
				<div class="colonne2">
				<label for="input-ville">Ville</label>
				<input class="input-ville" type="text" name="city">
				<br/>
				<br/>
				<label for="input-mail">Adresse mail</label>
				<input class="input-mail" type="email" name="email">
				<br/>
				<br/>
				<label for="input-mdp">Mot de passe</label>
				<input class="input-mdp" type="password" name="pwd">
				<br/>
				<br/>
				<label for="input-mdp">Confirmation</label>
				<input class="input-mdp" type="password" name="pwdCheck">
				</div>
				<div class="colonne3">
				<button class="button" type="submit" name="submit"><span>Créer mon compte</span></button>
				</div>
			</div>
		</div>	
	</form>
		<!-- <footer>
			<p>a</p>
		</footer> -->	

	</section>

	
	
</body>

</html>