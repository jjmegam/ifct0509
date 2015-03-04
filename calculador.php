<?php 
// ? para ejecutar código dentro de la misma pá0gina se llama a si misma?
			$a = $_POST["a"];
			$b = $_POST["b"];

if(isset($_POST["submit"])) {

			$resultado = "El resultado de A + B =" . ($a + $b);

}
if(isset($_POST["borrar"])) {

			$a = "";
			$b = "";
}
if(isset($_POST["coseno"])) {

			
			$resultado= "el coseno es = " . cos($_POST["a"]);
		}
 ?>




<?php include '_header.php' ?>
	<div class="well">calculador</div>
		<form action="calculador.php" method="post">
		
<!-- 		<input type="number" name="a" placeholder="<?php echo $a; ?>"/>
		<input type="number" name="b" placeholder="<?php echo $b; ?>"/> -->
<!-- placeholder para mantener el valor visible dentro del recuadro de la variable pero no es útil para posteriores operaciones -->
		<input type="number" name="a" value="<?php echo $a; ?>"/>
		<input type="number" name="b" value="<?php echo $b; ?>"/>



			<input type="submit" name="submit" value="sumar"/>
			<input type="submit" name="borrar" value="borrar" />
			<input type="submit" name="coseno" value="coseno" />

		</form>

		<h3><?php echo $resultado ?></h3>
<?php include '_footer.php' ?>