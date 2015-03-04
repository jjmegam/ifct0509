<?php 

if(isset($_POST["submit"]))		{

$b = $_POST["a"];
$c = $_POST["mibotondeopcion"];
if ($c== 1) {$d="h6";}
	elseif ($c== 2) {$d="h4";}
	elseif ($c== 3) {$d="h3";}
	elseif ($c== 4) {$d="h1";}


}
?>

<?php include '_header.php' ?>
	<div class="well">Tablas de Multiplicar</div>

		<form action="tablamultiplicar.php" method="post">
		La tabla del Nº: <input type="number" name="a" value="<?php echo $a; ?>"/><br><br>


		<INPUT type="radio" name="mibotondeopcion" checked value="1">Minúsculo<br />
		<INPUT type="radio" name="mibotondeopcion" value="2">Pequeño<br />
		<INPUT type="radio" name="mibotondeopcion" value="3">Normal<br />
		<INPUT type="radio" name="mibotondeopcion" value="4">Grande<br>
		<input type="submit" name="submit" value=" GO "/><br><br>
		</form>

	<?php 




			
			echo "<" . $d . ">Tabla del: " . $b . "<" . $d . ">";
				    				
			for($i=1;$i<=10;$i++){ echo  "<" . $d . ">" . $b . "x" . $i . "=" . $i*$b .  "<" . $d . ">" ; }




	include '_footer.php' ?>