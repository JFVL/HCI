<?php 
function rgb ($r,$g,$b){
	echo "Calculando el valor Hexadecimal de los valores RGB";
	echo "<br>";
	if($r>255){
		$r = 255;
	}
	if($g>255){
		$g = 255;
	}
	if($b>255){
		$b = 255;
	}
	while($r>0){
		$calc=$r%16;
		if($calc<10){
			echo $calc;
		}elseif ($calc==10) {
			echo "A";
		}elseif ($calc==11) {
			echo "B";
		}elseif ($calc==12) {
			echo "C";
		}elseif ($calc==13) {
			echo "D";
		}elseif ($calc==14) {
			echo "E";
		}elseif ($calc==15) {
			echo "F";
		}

		$r=(int)$r/16;
	}

	while($g>0){
		$calc2=$g%16;
		if($calc2<10){
			echo $calc2;
		}elseif ($calc2==10) {
			echo "A";
		}elseif ($calc2==11) {
			echo "B";
		}elseif ($calc2==12) {
			echo "C";
		}elseif ($calc2==13) {
			echo "D";
		}elseif ($calc2==14) {
			echo "E";
		}elseif ($calc2==15) {
			echo "F";
		}

		$g=(int)$g/16;
	}

	while($b>0){
		$calc3=$b%16;
		if($calc3<10){
			echo $calc3;
		}elseif ($calc3==10) {
			echo "A";
		}elseif ($calc3==11) {
			echo "B";
		}elseif ($calc3==12) {
			echo "C";
		}elseif ($calc3==13) {
			echo "D";
		}elseif ($calc3==14) {
			echo "E";
		}elseif ($calc3==15) {
			echo "F";
		}

		$b=(int)$b/16;
	}
	
}

rgb(3,11,12);

?>