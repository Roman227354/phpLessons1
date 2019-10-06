<?<?php 
$a=(int)-10;
$b=(int)-12;
echo "Первое задаени".PHP_EOL;
if ($a>=0&&$b>=0) echo $a-$b;
elseif ($a<0&&$b<0) {
	# code...
echo $a*$b;
}
else echo $a+$b;

echo PHP_EOL."Второе задание".PHP_EOL;
$a=7;
switch ($a) {
	case $a<=1:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=2:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=3:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=4:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=5:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=6:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=7:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=8:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=9:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=10:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=11:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=12:
		# code...
		echo $a.PHP_EOL;	
		$a++;
    case $a<=13:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=14:
		# code...
		echo $a.PHP_EOL;
		$a++;
	case $a<=15:
		# code...
		echo $a.PHP_EOL;		
		$a++;
		}

echo PHP_EOL."Третье задание".PHP_EOL;

function Plus($a1,$b1) {
  return $a1+$b1;
}
function Minus($a1,$b1) {
  return $a1-$b1;
}
function Divi($a1,$b1) {
  return $a1/$b1;
}
function Mult($a1,$b1) {
  return $a1*$b1;
}

echo "Четвертое задание".PHP_EOL;
echo mathOperation(10, 2, "Mult").PHP_EOL;



function mathOperation($arg1, $arg2, $operation){
	switch ($operation) {
		case $operation=="Plus":
			return Plus($arg1, $arg2); 
			break;
		case $operation=="Minus":	
		return Minus($arg1, $arg2); 
			break;
		case $operation=="Div":	
		return Divi($arg1, $arg2); 
			break;	
		case $operation=="Mult":	
		return Mult($arg1, $arg2); 
			break;
		
	}
	}

echo "Шестое задание".PHP_EOL;	
echo power(5,3);

function power($val, $pow) {
	if ($pow>1) {
       return $val*power($val,$pow-1);
	}
	elseif ($pow=0) {
		return 1;}
	elseif ($pow<0) {
			return 0;
		}	
	else return $val;
}


	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Вторая домашка</title>
 	
 </head>
 <body>
 
 </body>
 </html>
