		 <img src="dadosanim.gif" border="0" alt="" >

				       	$puntosPC= $a1 + $a2;
				       	$puntosYO= $b1 + $b2;
				  		$acumuladosPC = $_POST["acumuladosPC"] + $puntosPC;
 						$acumuladosYO = $_POST["acumuladosYO"] + $puntosYO;

 						$colorganador = "alert alert-success";
 						$colorperdedor = "alert alert-danger";
 						$colorempate = "alert alert-warning";


 						if($puntosPC < $puntosYO) {$ganador = "Ganador Yo";$colorYO = "alert alert-success"; $colorPC = "alert alert-danger";}
			 	 		elseif ($puntosPC > $puntosYO) {$ganador = "Ganador PC";$colorPC = "alert alert-success"; $colorYO = "alert alert-danger";}
			 	 		elseif ($puntosPC == $puntosYO) {$ganador = "Empate"; $colorYO = "alert alert-warning"; $colorPC = "alert alert-warning";}

			 	 	 	if($acumuladosPC < $acumuladosYO) {$partida = "Ganador de la partida Yo";}
			 	 		elseif ($acumuladosPC > $acumuladosYO) {$partida = "Ganador de la partida PC";}
			 	 		elseif ($acumuladosPC == $acumuladosYO) {$partida = "Partida Empatada";}

			 	 		$npartida = $_POST["npartida"] + 1 ;


		    	<div class="row">
		    		<div class="col-xs-6">
		    			<div class= '<?php echo $colorPC ?>'>
		    				<h3>Computadora</h3>
		    				<?php echo $dado1 , $dado2 ?>
		    			</div>
		    		</div>
		    		<div class="col-xs-6">
		    			<div class= '<?php echo $colorYO ?>'>
		    				<h3>YO</h3>
		    				<?php echo $dado3 , $dado4 ?>		    			
		    			</div>
		    		</div>
		    	</div>
		    	<br>
 			
 			 			<form action="poker.php" method="post">
			<h1>Jugada nº: <?php echo $npartida . ", Puntos Jugada PC: " . $puntosPC . " Puntos Jugada YO: " . $puntosYO ;?> </h1>
			<h1>Puntos Acumulados PC: <?php echo $acumuladosPC . ", Puntos Acumulados YO: " . $acumuladosYO ;?></h1>
			<h1>Resultado jugada: <?php echo $ganador . ", Resultado partida: " . $partida ;?></h1>			
			<input type="hidden" name="acumuladosPC" value="<?php echo $acumuladosPC ?>" />
			<input type="hidden" name="acumuladosYO" value="<?php echo $acumuladosYO ?>" />
			<input type="hidden" name="npartida" value="<?php echo $npartida ?>" />			
		    <input type="submit" name="submit" value="Lanzar Dados" size="45" />
		    </form>		    		    	