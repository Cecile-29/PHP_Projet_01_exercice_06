<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>PHP Projet01 Exercice06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet01 Exercice06</h1>
            <h3 class="col-12 text-info text-center">Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.</h3>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
		<?php	
	        $magnitude = rand(1, 9);
			echo 'le sésisme à atteint la magnitude : '. $magnitude;
	        switch ($magnitude) {
	            case 1:
	                echo "  Micro-séisme impossible à ressentir";
	                break;
	            case 2:
	                echo "  Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
	                break;
	            case 3:
	                echo "  Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti";
	                break;
	            case 4:
	                echo " Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
	                break;
	            case 5:
	                echo "  Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts";
	                break;
	            case 6:
	                echo "  Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre";
	                break;
	            case 7:
	                echo "  Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance";
	                break;
	            case 8:
	                echo "  Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres";
	                break;
	            case 9:
	                echo "  Séisme capable de tout détruire sur une très vaste zone";
	                break;              
	        }
	    ?>
        </div>
    </div> 
</body>
</html>