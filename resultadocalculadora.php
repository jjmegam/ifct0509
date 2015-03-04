<?php include '_header.php' ?>

	<div class="well">procesa</div>
<!--
<?php 
	$a = $_POST["a"]; echo $a
	$b = $_POST["b"]; echo $b

 	if($_POST["suma"]) { echo "La suma de a+b = " . $a + $b; }
 	if($_POST["resta"]) { echo "La diferencia de a-b = " . $a - $b; }
 	if($_POST["multi"]) { echo "El producto de a*b = " . $a * $b; }
 	if($_POST["divi"]) { echo "La division de a/b = " . $a / $b; }
 ?><?php echo $_POST["a"] + $_POST["b"];?>
-->


	<p>El valor de sumar A+B =    </p><br><br>
<!--	
	<p>El valor de restar A-B = <?php if ( $resta ){echo  $_POST["a"] - $_POST["b"];}; ?>  </p><br><br>
	<p>El valor de multiplicar A*B = <?php if ( $multi ){echo  $_POST["a"] * $_POST["b"];}; ?> </p><br><br>
	<p>El valor de dividir A/B = <?php if ( $divi ){echo  $_POST["a"] / $_POST["b"];}; ?> </p><br><br>

		<p>La fecha de hoy es: <?php echo $fecha=date("d-m-Y",time())?></p><br><br><br>

	<p>¿Las condiciones han sido aceptadas? <?php echo $_POST["aceptar"] ?> </p>
	<p>La fecha de hoy es: <?php echo $_POST["fecha"]?></p><br>
	<p>Tu nombre tiene : <?php echo strlen($_POST["nombre"]); ?>  caracteres</p><br>
	<p>Te llamas : <?php echo strtoupper ($_POST["nombre"])?></p><br>
	<p>Tienes: <?php echo  $_POST["fecha"] -  $_POST["fnacimiento"]?>  años</p><br><br><br>

	<p>Tienes: <?php echo  $fecha1 = time() -  $_POST["fnacimiento"]?>  años</p>
		<p>	tienes: <?php date("d-m-Y", $fecha1) ?></p>
	<p>Tienes: <?php echo $fecha ?>  años</p><br>	


	<pre>
		<?php
			print_r($_POST);


			echo $_POST["fecha"] . " " . $_POST["nombre"];
		?>
	</pre>	-->
<?php include '_footer.php' ?>