<html>
<head>
	<title>Simple Removedor de Letras</title>
</head>
<body>
<!--Ejercicio-->
	<b>Simple Removedor de Letras</b></body><br/><br/>
	<p> Se le dará una cadena en minusculas y su tarea sera eliminar k caracteres de esa cadena usando la siguiente regla:<br/><br/>
	- Primero elimine toda la letra 'a', seguida de la letra 'b', luego 'c', etc ...<br/>
	- Elimina primero el caracter de la izquierda.<br/><br/>
	<b>Por ejemplo:</b> <br/><br/>
	solve('abracadabra', 1) = 'bracadabra' # elimina el extremo izquierdo 'a'.<br/>
	solve('abracadabra', 2) = 'brcadabra'  # eliminar 2 'a' desde la izquierda.<br/>
	solve('abracadabra', 6) = 'rcdbr'      # eliminar 5 'a', eliminar 1 'b'.<br/>
	solve('abracadabra', 8) = 'rdr'<br/>
	solve('abracadabra',50) = ''<br/>
	</p>
<!--Formulario-->
	<form action="ejercicio_2.php" method="post">
		<label for="palabra">Palabra:</label><input type="text" size="9" id="palabra" name="palabra"></input>
		<label for="numero">Numero:</label><input type="text" size="3" id="numero" name="numero"></input>
		<input type="submit" name="boton" value="Remover"></input>
	</form>

	 <?php 

		//Funcion solve
		function solve($palabra, $numero){	
			$longitud = strlen($palabra);
			$letra = ord('a');
			$arr = str_split($palabra);
			for($i=0;$i<$numero;$i++){
				for($j=0,$b=0;$j<$longitud;$j++){
					if($arr[$j] == chr($letra)){ //chr, devuelve una cadena de un caracter que contiene el carácter especificado por ascii
						$arr[$j] = ' ';
						$b = 1;
						break; 
					} 						
				}
				if(!$b){ 
					$letra++;
					$i--;
				}
			}
			$palabra = "";
			for($i=0;$i<$longitud;$i++){
				if($arr[$i] != ' ')
					$palabra .= $arr[$i];			
			}
			return $palabra;
		}

		//Main
		if(isset($_POST['boton'])){
			$numero = $_POST['numero'];
			$palabra = $_POST['palabra'];
			$nueva_palabra = solve($palabra, $numero);
			echo "<h4> Palabra Resultante: $nueva_palabra</h4>";
		}
	?> 
</body>
</html>