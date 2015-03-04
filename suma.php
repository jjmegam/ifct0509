<?php include "_header.php" ?>
	<div class="well">Suma</div>

			<?php 	
				$a = $_POST["numero_1"];
				$b = $_POST["numero_2"];
				$nuevo = $_POST["aceptar"];

			 ?>
			 	<!-- PHP dentro de html -->
			 <p>La suma de los dos números es = <?php echo $a + $b; ?></p>
			 	<!-- html dentro de php -->
			 <?php 	echo "<p>La suma de los dos numeros es = " . $a + $b . "<p>" ?>

			 <!-- mi primer condicional -->
			 <?php if ($a < $b) echo " {$a} el primer número es menor que {$b}";
			 ?>

			 <?php if ($aceptar == "on"){echo " Hola juanjo";}; 

			  ?>

	<?php include "_footer.php" ?>