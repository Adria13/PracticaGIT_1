<?php
$num=17848600;
$cifras=8;
$cont=0;
while ($num > 0) {
	$num = (int)$num/10;
	$num = (int)$num;
	$cont++;
}
	if ($cifras==$cont) {
		echo "El numero es correcto";
	}else{
		echo "El numero es incorrecto";
	}
?>