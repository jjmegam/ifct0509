

<?php include '_header.php' ?>

	<div class="well">JUEGO DE POKER</div>

<?php

	if(isset($_POST["dar"])){

		$c1=rand(1,13);
		$p1=rand(1,4);
		$c2=rand(1,13);
		$p2=rand(1,4);

		$carta1 ="carta_" . $c1 . "_" . $p1 . ".png";
		$carta2 ="carta_" . $c2 . "_" . $p2 . ".png";		
	}
	?>

	 		<form action="pokerok.php" method="post">
			    <input type="submit" name="dar" />
		    </form>

	<img src="<?php echo $carta1;?>">	    		    	
	<img src="<?php echo $carta2;?>">	
<?php include '_footer.php' ?>
