<!-- Ici, on va mettre le code commun a chaque vues et on va inclure ($data['view']) pour inclure toutes les vues et choisir ce qu'on doit avoir au bon moment (connexion pour connecter, ajouter une tache pour ajouter ... ) selon le bon controller -->

<!doctype html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <title>Todolist</title>
	    <link rel="stylesheet"
	          href="./bower_components/cutestrap/dist/css/cutestrap.min.css">
	    <link rel="stylesheet"
	          href="./views/css/screen.css">
	</head>
	<body>
		<header class="wrapper grid">
		    <div id="branding" class=""><a href="index.php">Todolist</a></div>
		    </header>

		<?php include ($view); ?>


		<footer class="wrapper">
		    <p class="ta-right">Made by Dominique Vilain in 2016</p>
		</footer>

	</body>
</html>