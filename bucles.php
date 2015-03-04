<?php include '_header.php' ?>
	<div class="well">BUCLES</div>

<div class="row">
		    		<div class="col-xs-2">
		    			<div class="alert alert-success">
		    				<h5>Tabla del UNO</h5>
<?php for($i=1;$i<=10;$i++){ echo  1 . "x" . $i . "=" . $i*1 . "<br>"; }?>
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="alert alert-danger">
		    				<h5>Tabla del DOS</h5>
<?php for($i=1;$i<=10;$i++){ echo  2 . "x" . $i . "=" . $i*2 . "<br>"; }?>	    			
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="alert alert-warning">
		    				<h5>Tabla del TRES</h5>
<?php for($i=1;$i<=10;$i++){ echo  3 . "x" . $i . "=" . $i*3 . "<br>"; }?>
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="alert alert-info">
		    				<h5>Tabla del CUATRO</h5>
<?php for($i=1;$i<=10;$i++){ echo  4 . "x" . $i . "=" . $i*4 . "<br>"; }?>	    			
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="well">
		    				<h5>Tabla del CINCO</h5>
<?php for($i=1;$i<=10;$i++){ echo  5 . "x" . $i . "=" . $i*5 . "<br>"; }?>	    			
		    			</div>
		    		</div>
		    	</div>
		    	<br>

<div class="row">
		    		<div class="col-xs-2">
		    			<div class="alert alert-info">
		    				<h5>Tabla del SEIS</h5>
<?php for($i=1;$i<=10;$i++){ echo  6 . "x" . $i . "=" . $i*6 . "<br>"; }?>
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="well">
		    				<h5>Tabla del SIETE</h5>
<?php for($i=1;$i<=10;$i++){ echo  7 . "x" . $i . "=" . $i*7 . "<br>"; }?>	    			
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="alert alert-success">
		    				<h5>Tabla del OCHO</h5>
<?php for($i=1;$i<=10;$i++){ echo  8 . "x" . $i . "=" . $i*8 . "<br>"; }?>
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="alert alert-warning">
		    				<h5>Tabla del NUEVE</h5>
<?php for($i=1;$i<=10;$i++){ echo  9 . "x" . $i . "=" . $i*9 . "<br>"; }?>	    			
		    			</div>
		    		</div>
		    		<div class="col-xs-2">
		    			<div class="alert alert-danger">
		    				<h5>Tabla del DIEZ</h5>
<?php for($i=1;$i<=10;$i++){ echo  10 . "x" . $i . "=" . $i*10 . "<br>"; }?>	    			
		    			</div>
		    		</div>
		    	</div>
		    	<br>


<?php 	 

for($i=1;$i<=10;$i++){ echo "<h2>" . 7 . "x" . $i . "=" . $i*7 . "</h2><br>"; }



?>
<!--//for($i=1;$i<=10;$i=$i+1){ echo "<h1>HOLA CARACOLA</h1> <br>";   -->
<?php include '_footer.php' ?>