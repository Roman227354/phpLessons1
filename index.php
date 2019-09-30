<?php 
$a=26;
$b=13;
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
$data_1=date('jS F Y');
$title='<title>Это первая домашка</title>';
$h1='<h1>создаем р1</h1>';
?>
<!-- http://localhost/phpLessons/index.php -->
<!-- just comment -->
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?  ---- Сравнили как 2 числа
    var_dump((int)'012345');     // Почему 12345? ---- Тип инт, мы явно указали приведение типов
    var_dump((float)123.0 === (int)123.0); // Почему false? ------ ставнение с типами т.к 3 символа "="
    var_dump((int)0 === (int)'hello, world'); // Почему true? ----- потому что при преобразовании строки в число берутся первые числовые символы, а тут их нет, поэтому 0
?> 

<!DOCTYPE html>
<html>
<head>
	<?php echo $title ?>
	<?=$h1?>
</head>
<body>
<strong><?php echo $data_1?></strong>
</body>
</html>