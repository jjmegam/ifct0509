<?php 

if(isset($_POST["submit"]))		{

	if(($_POST["a"]) <= 12 ) { $resultado = "Tarifa gratuita "; }
	if(($_POST["a"]) > 12 && ($_POST["a"]) < 17 ) { $resultado = "Tarifa 4 € "; }
	if(($_POST["a"]) > 16 && ($_POST["a"]) < 66 ) { $resultado = "Tarifa 8 € "; }
	if(($_POST["a"]) > 65 ) { $resultado = "Tarifa 4 € "; }
	if(($_POST["a"]) == "" ) { $resultado ="";}
							 
								}


	if(isset($_POST["borrar"])) { $a = ""; }

 ?>

<?php include '_header.php' ?>
	<div class="well">TARIFA_CINE</div>
	
		<form action="tarifacine.php" method="post">

		EDAD: <input type="number" name="a" value="<?php echo $a; ?>"/><br><br>

		<input type="submit" name="submit" value="pagar"/><br><br>
		<input type="submit" name="borrar" value="borrar" />
		</form>

				<h3><?php echo $resultado ?></h3>
<?php include '_footer.php' ?>