<html>
<head>
	<title>Find the Next Perfect Square!</title>
</head>
<body>
<!--Ejercicio-->
	<b>Encontrar el Siguiente Cuadrado Perfecto</b></body><br/>
	<p> Complete el metodo findNextSquare que encuentra el siguiente cuadrado perfecto de la integral despues del que se paso como parametro. Recuerde que un cuadrado perfecto integral es un entero n tal que sqrt (n) tambien es un entero.<br/><br/>
	 Si el parametro en si no es un cuadrado perfecto, se debe devolver -1. Puede asumir que el parametro es positivo.<br/><br/>
	<b>Ejemplos:</b><br/><br/>
	 findNextSquare (121) ... devuelve 144<br/>
	 findNextSquare (625) ... devuelve 676<br/>
	 findNextSquare (114) ... devuelve -1 ya que 114 no es perfecto </p>
<!--Formulario-->
	<form action="ejercicio_1.php" method="post">
		<label for="numero">Number:</label><input type="text" size="9 " id="numero" name="numero"></input>
		<input type="submit" name="boton" value="Siguiente Cuadrado"></input>
	</form>
	 <?php 

		//Funcion findNextSquare
		function findNextSquare($numero){									
			$raiz = sqrt($numero);							
			if(fmod($raiz,1) == 0)	return ($raiz+1) * ($raiz+1);
			else return -1;   
		}

		//Main
		if(isset($_POST['boton'])){
			$numero = $_POST['numero'];
			$siguiente_perfecto = findNextSquare($numero);
			if($siguiente_perfecto == -1)
				echo "<h4> El Numero $numero no es Cuadrado Perfecto</h4>";
			else
				echo "<h4> El Siguiente Cuadrado Perfecto de $numero es $siguiente_perfecto</h4>";	
		}
	?> 
</body>
</html>