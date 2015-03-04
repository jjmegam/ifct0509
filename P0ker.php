<?php 
				       


						if(isset($_POST["dar"])){

				       $c1=rand(1, 13); $c2=rand(1, 13);
				       $p1=rand(1, 4); $p2=rand(1, 4);

				  $carta1 = "<img src = carta_" . $c1 . "_" . $p1 . ".png>";
				  $carta2 = "<img src = carta_" . $c2 . "_" . $p2 . ".png>";			  

}

 ?>


<?php include '_header.php' ?>

	<div class="well">JUEGO DE POKER</div>

		    			<div class= "well">
		    				<h3>JUGADA</h3>
		    				<?php echo $carta1 , $carta2 ?>
		    			</div>
		    		
			<?php 	
					$carta1="<img src ="dorso.png">";
					$carta2="<img src ="dorso.png">";

			echo $carta1 , $carta2 ?>
 			<form action="P0ker.php" method="post">
			
		    	<input type="submit" name="dar" />
		    </form>		    		    	

<?php include '_footer.php' ?>