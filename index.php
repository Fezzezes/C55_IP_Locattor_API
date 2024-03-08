<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Où suis-je?</title>
    <link rel="stylesheet" href="css/global.css">
    <script src="js/javascript.js"></script>
	<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
</head>
<body>
    <div class="container">
        <div class="result-container">--</div>
        <div class="lock"></div>
        <div class="input-container">
            <input type="text" id="ip" placeholder="xx.xx.xx.xx">
        </div>
    </div>
	<footer>
		<div>
			<h3>Utilisation d'un API + AJAX</h3>
			<p>L'idée est de faire une requête AJAX sur une page PHP qui appelle l'api : https://ip-api.com/docs/api:json. Les étapes : </p>
			<ol>
				<li>Créer le squelette de votre page ajax.php (et AjaxAction.php)</li>
				<li>Dans le fichier javascript.js (fonction lookupIp), appeler ajax.php avec l'adresse IP (valeur du champ texte) en paramètre (POST)</li>
				<li>Dans le contrôleur de ajax.php, appeler l'API en passant l'adresse IP. Par exemple : http://ip-api.com/json/24.48.0.1 </li>
				<li>Retourer la réponse de l'API à la vue, via un <code>echo</code> et <code>json_encode</code>.</li>
				<li>Dans la fonction javascript.js, utiliser le résultat de  l'appel AJAX afin d'extraire le nom de la ville puis utiliser DOM pour afficher la ville dans le div .result-container</li>
		</div>
	</footer>
</body>
</html>