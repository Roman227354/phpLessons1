<?<?php 
echo "Task 1".PHP_EOL;

Show_Num_divs_num(3,5,15);

function Show_Num_divs_num(int $num1, int $Low_border,int $High_border){
	if ($Low_border>$High_border) return false;
	else {
		while ($Low_border<=$High_border) {
			if ($Low_border % $num1==0) echo $Low_border.PHP_EOL;
			$Low_border++;
		} 
	}
	return true;
}

echo PHP_EOL."Task 2".PHP_EOL;

one_to_ten();

function one_to_ten(){
	$i=1;
	do 
	{
		echo $i.PHP_EOL;
		$i++;}

		while ($i <= 10);
	}

	echo "Task 3".PHP_EOL;

	$Region_City = GET_region_city();

	function GET_region_city()
	{
		return [
			"Республика Адыгея"=>"Майкоп",
			"Республика Алтай"=>"Горно-Алтайск",
			"Республика Башкортостан"=>" Уфа",
			"Республика Бурятия"=>"Улан-Удэ",
			"Республика Дагестан"=>"Махачкала",
			"Республика Ингушетия"=>"Магас",
			"Кабардино-Балкарская Республика"=>"Нальчик",
			"Республика Калмыкия"=>"Элиста",
			"Карачаево-Черкесская Республика"=>"Черкесск",
			"Республика Карелия"=>"Петрозаводск",
			"Республика Коми"=>"Сыктывкар",
			"Республика Крым"=>"Симферополь",
		    "Краснодарский край"=>"Краснодар"];
		} 

		print_r($Region_City).PHP_EOL;

		echo "Task 4".PHP_EOL;

		$Equivalence_rus_en_symbols = GET_Equivalence_rus_en_symbols(); 

		function GET_Equivalence_rus_en_symbols()
		{
			return [
				'а' => 'a',   'б' => 'b',   'в' => 'v',
				'г' => 'g',   'д' => 'd',   'е' => 'e',
				'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
				'и' => 'i',   'й' => 'y',   'к' => 'k',
				'л' => 'l',   'м' => 'm',   'н' => 'n',
				'о' => 'o',   'п' => 'p',   'р' => 'r',
				'с' => 's',   'т' => 't',   'у' => 'u',
				'ф' => 'f',   'х' => 'h',   'ц' => 'c',
				'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
				'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
				'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

				'А' => 'A',   'Б' => 'B',   'В' => 'V',
				'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
				'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
				'И' => 'I',   'Й' => 'Y',   'К' => 'K',
				'Л' => 'L',   'М' => 'M',   'Н' => 'N',
				'О' => 'O',   'П' => 'P',   'Р' => 'R',
				'С' => 'S',   'Т' => 'T',   'У' => 'U',
				'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
				'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
				'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
				'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya'];

			}

			print_r($Equivalence_rus_en_symbols);

			echo "Task 5".PHP_EOL;

			echo Str_change_space("Это строка для замены проблов на подчеркивания");

			function Str_change_space(string $s) {
				return implode("_", explode(" ", $s));
			}

			echo "Task 6".PHP_EOL;

			function GET_Menu(){
				$ar = ["one"=>[],"two"=>["21","22"],"three"=>["31","32","33"]];



				$String_Menu =	"<ul class=\"nav nav-pills\">";
				foreach ($ar as $key => $value) {
					if (count($value)==0) {
						$String_Menu = $String_Menu."<li class=\"nav-item dropdown\">
						<li class=\"nav-item\">
						<a class=\"nav-link active\" href=\"#\">".$key."</a>
						</li>";
					}
					if (count($value)>0){
						$String_Menu = $String_Menu."<li class=\"nav-item dropdown\">".PHP_EOL;
						$String_Menu = $String_Menu."<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">".$key."</a>".PHP_EOL."<div class=\"dropdown-menu\">";

						foreach ($value as $key_nested => $value_nested) {
							$String_Menu = $String_Menu."<a class=\"dropdown-item\" href=\"#\">".$value_nested."</a>".PHP_EOL;
						}

						$String_Menu = $String_Menu."</div>";
						$String_Menu = $String_Menu."</li>";
					}
				}
				
				$String_Menu=$String_Menu.PHP_EOL."</ul>";
				return $String_Menu;
			}

			echo "Task 7".PHP_EOL;
            for ($i=0;check_and_printi($i);$i++){};
            function check_and_printi(int & $i){echo $i.PHP_EOL;return $i<9;}	

            echo "Task 8".PHP_EOL;
            foreach ($Region_City as $key => $value) {
             	if (mb_substr($value,0,1)=="К"||mb_substr($value,0,1)=="к") echo $value;
             } 
			?>

			<!doctype html>
			<html lang="en">
			<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

				<title>Третья домашка</title>
			</head>
			<body>

				<!-- =========================================-->
				<!-- =========================================-->
				<!-- -->
				<!-- =========================================-->
				<!-- =========================================-->

				<?php echo GET_Menu(); ?>

				<!-- =========================================-->
				<!-- =========================================-->
				<!-- =========================================-->



				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			</body>
			</html>
