<?php include '_header.php' ?>
	<div class="well">if</div>
		<form action="calcula.php" method="post">
		
		<input type="number" name="a" placeholder="poner un número aquí"/><br />
		<input type="number" name="b" placeholder="poner otro número aquí"/><br />
		<input name="sum" type="checkbox" value="1"/>Sumar	<br />
		<input name="res" type="checkbox" value="1"/>Restar	<br />
		<input name="mul" type="checkbox" value="1"/>Multiplicar<br />
		<input name="div" type="checkbox" value="1"/>Dividir<br />		

			<input type="submit" name="submit" value="enviar"/>
		</form>

			
<?php include '_footer.php' ?>