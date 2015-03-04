<?php 

if(isset($_POST["submit"]))		{

	if(($_POST["a"]) < 0 ) { $resultado = ""; }
	elseif(($_POST["a"]) >= 0 && ($_POST["a"])< 3 ) { $resultado = "Muy deficiente "; }
	elseif(($_POST["a"]) < 4 ) { $resultado = "Deficiente "; }
	elseif(($_POST["a"]) < 5 ) { $resultado = "Insuficiente "; }
	elseif(($_POST["a"]) < 6 ) { $resultado = "Suficiente "; }
	elseif(($_POST["a"]) < 7 ) { $resultado = "Bien "; }
	elseif(($_POST["a"]) > 6 && ($_POST["a"]) < 9 ) { $resultado = "Notable "; }
	elseif(($_POST["a"]) > 8 && ($_POST["a"]) < 11 ){ $resultado = "Sobresaliente";}

	if(($_POST["a"]) == "" ) { $resultado ="";}
								}
								
	if(isset($_POST["borrar"])) { $a = ""; }
 ?>

<?php include '_header.php' ?>
	<div class="well">calificaciones</div>
	
		<form action="calificaciones.php" method="post">

		Nota: <input type="number" name="a" value="<?php echo $a; ?>"/><br><br>

		<input type="submit" name="submit" value="evaluar"/><br><br>
		<input type="submit" name="borrar" value="borrar" />
		</form>

				<h3><?php echo $resultado ?></h3>
<?php include '_footer.php' ?>