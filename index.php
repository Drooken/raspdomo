<?php 
require_once('configuration.php');
require_once('fonctions.php');
?>

<!DOCTYPE html>
<html>

 <head>
  <title>Raspdomo</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">	 
 </head>

 <body>
 
  <div class="titre">
   <i class="material-icons">home</i>
   <h1>Projet Domotique</h1>
  </div>

  <div class="tuiles">

	<?php
	$i= 0;
	foreach($lampes as $lampe){
		echo
		"<div class=\"tuile ".etatLampe($i)."\" onclick=\"changerEtat(".$i.",this)\"><h2>".$lampe."</h2>
		<h3>GPIO ".$i."</h3>
		<i class=\"material-icons\">lightbulb_outline</i>
		<p>L'interrupteur est sur ".etatLampe($i)."</p>
		</div>";

	$i = $i + 1;
	}	
	?>

  </div>
  
  <div class="pied">
	<p>Premier projet web fait par mwa ! (Drooken)</p>
  </div>

  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='js/main.js'></script>

 </body>

</html>
