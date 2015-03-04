<?php include '_header.php' ?>
	<div class="well">if</div>
		<form action="suma.php" method="post">
		
		<input name="aceptar" type="checkbox" value="1"/>Aceptar condiciones	<br />
		<input type="number" name="numero_1" placeholder="poner un número aquí"/><br />
		<input type="number" name="numero_2" placeholder="poner otro número aquí"/><br />

			<input type="submit" name="submit" value="enviar"/>
		</form>

			
<?php include '_footer.php' ?>