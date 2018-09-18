<?php
	$entero = 10; //int
	$flotante = 12.34; //float
	$cadena = "clase HCI"; //string
	$arreglo = array("key1" => "hola", "key2" => "mundo"); //array(mapa(elemento que almaceno con clave y valor))
	$arreglo2 = array("key1", "hola", "key2", "mundo"); //array(normal)
	$verdadero = true; //bool true
	$falso = false; //bool false
	echo "<br/>"; //Espacio <br>

	class StrValTest 
	{
		private $miVar = "clase1";
		public $miVar2 = "clase2";
		public function __toString()
		{
			return __CLASS__;
		}

		public function example(){
			return "esto es una prueba";
		}
	}
	//TOMA EL VALOR EN ENTERO DE UNA VARIABLE
	echo "entero" ." ".intval($entero). "<br/>";
	echo "float" ." ".intval($flotante). "<br/>";
	echo "string" ." ".intval($cadena). "<br/>";
	echo "boolean verdadero" ." ".intval($verdadero). "<br/>";
	echo "boolean falso" ." ".intval($falso). "<br/>";
	echo "hex-dec " .intval(0x165). "<br/>";
	//TOMA EL VALOR EN STRING DE UNA VARIABLE
	echo "float string " .strval($flotante) ."<br/>";
	$floatString = strval($flotante);
	echo "floatString" .gettype($floatString). "<br/>"; //Obtener tipo de la variable
	echo "verdadero string " .strval($verdadero) ."<br/>";
	echo "falso string " .strval($falso) ."<br/>";
	echo "class string " .strval(new StrValTest) . "<br/>"; //Obtener tipo de la clase
	//FORZAR LA VARIABLE A SER UN ENTERO
	echo "array int " .(int)$arreglo. "<br/>"; //Si está lleno es 1 si no, nada
	echo "verdadero float " .(float)$verdadero. "<br/>";
	//FORZAR LA VARIABLE A SER UN STRING

	//FORZAR LA VARIABLE A SER UN ARRAY

	var_dump((array) new StrValTest());
	echo "<br/>";
	//FORZAR LA VARIABLE A SER UN OBJETO
	$ejemplo = (object) $flotante;
	var_dump($ejemplo);

?>