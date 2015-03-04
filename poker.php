<!--<?php 
				       $c1=rand(1, 13); $c2=rand(1, 13);
				       $p1=rand(1, 4); $p2=rand(1, 4);

				       for ($h=1;$h<=4;$h++){
				       		//for ($i=1;$i<=13;$i++){
								//if (($c1==$i) and ($p1==$h)) {$carta1= "<img src="carta_" .$c1."_".$h1.".png" width=100 height=100 alt="" >";}

				       		//};
				       		echo $h;
				   		}

				       //for ($h=1;$h<=4;$h++){
				       		for ($i=1;$i<=13;$i++){
								if (($c2==$i) and ($p2==$h)) {$carta2= "<img src="carta_" .$c1."_".$h1.".png" width=100 height=100 alt="" >";}
								echo $i;
				       		};
				       //	}




 ?> -->

<?php include '_header.php' ?>

	<div class="well">JUEGO DE POKER</div>

		    			<div class= "well">
		    				<h3>JUGADA</h3>
		    				<?php echo $carta1 , $carta2 ?>
		    			</div>
		    		
			
 			<form action="poker.php" method="post">
	
		    	<input type="submit" name="submit" value="repartir Cartas" size="45" />
		    </form>		    		    	

<?php include '_footer.php' ?>