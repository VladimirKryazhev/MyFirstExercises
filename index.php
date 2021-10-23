<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Урок 1</title>
</head>
<body>
	<p><i>Привет дружище!</i></p>
	<?php 
		echo '<p>Hello</p>';
		$var = 'hello world';
		$number = '456';
		const PAGE = '78';


		echo (5 + 3) * 2;
		
	 ?>

	<p><?php echo $var ?></p>
	<p><?php echo $number ?></p>
	<p><?php echo PAGE ?></p>

<?php 
	$light = 'yellow';

		if($light == 'green'){
			echo 'We may go';
		}elseif($light == 'yellow'){
			echo 'We may ready';
		}else{
			echo 'We must stop';
		}
		echo '<br>';

$x = 7;
if($x < 10){ 
	echo true;
}
else{
	echo false;
}
	echo '<br>';

$a = 5;
$b = 3;
if ($a < $b || $b == 3){
	echo 'Истина';
}else{
	echo 'Ложь';
}
 ?>

<div></div>

<?php 
	if(5>3){
		echo 'OK';
	}

	if(5!=5){
		echo 'OKE';
	}
 ?>
<br/>
<?php 
	var_dump(5<3);
 ?>
<br/>
<?php 
	$i=1;
	while ( $i<= 10) {
		echo $i++ . '<br>';

	}
 ?>

<?php 
	$year = 1900;
	echo '<select>';
	while ($year <= 2015) {
		echo "<option value = '$year'> $year </option>";
		$year++;
	}
	echo '</select>';
 ?>

<?php 
$i = 1;
echo "<table border='1'>";
while ($i <= 10) {
	echo "<tr>";
	$n = 1;
	while ($n <= 9) {
		$result=$i*$n;
		echo "<td>$i*$n = $result</td>";
		$n++;
	}
	echo "</tr>";
	$i++;
}
echo "</table>";
 ?>

<?php 
	$arr=[1,2,3,4,'apple', 5, ['cat', 'dog', 'mouse'], 7,];

	var_dump($arr);
	echo '<br/>';
	echo $arr[6][0];

	echo "<pre>";
	print($arr);
	echo "</pre>";

	echo '<br/>';
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i];
	}
	echo '<br/>';
 ?>


<?php 
$arr2=['Ivanov', 3=>'Petrov', 6=>'Sidorov'];

	var_dump($arr2);
	echo '<br/>';

 ?>


<?php 
$arr3=[2=>'Ivanov', 'Petrov', 'Sidorov'];
	var_dump($arr3);
	echo '<br/>';
	echo $arr3[4];
	echo '<br/>';
 ?>



<?php 
$goods=[1=>
	[
		'title'=>'Nokia',
		'price'=> 100,
		'color'=>'Green'],
	[
		'title'=>'Sony',
		'price'=>200,
		'color'=>'Red'
	]
];
	var_dump($goods);
	echo '<br/>';

	echo $goods[1]['price'];
	echo '<br/>';

	echo $goods[2]['price'];

	echo '<br/>';
	echo $goods[1]['title'].'-'.$goods[1]['price'];
	echo '<br>';
	echo $goods[2]['title'].'-'.$goods[2]['price'];
	echo '<br/>';

echo "<table border='1'>";
foreach ($goods as $key => $value) {
echo '<tr>';
	foreach ($value as $v) {
	echo "<td>$v</td>";
}
echo '</tr>';
}
echo "</table>";


	// echo $v . ' - ';


	echo '<br/>';

 ?>

<?php 
$i = 1;
echo "<table border='1'>";
while ($i <= 2) {
	echo "<tr>";
			echo "<td>";
			echo $goods[$i]['title'];
			echo "</td>";
			echo "<td>";
			echo $goods[$i]['price'];
			echo "</td>";
			echo "<td>";
			echo $goods[$i]['color'];
			echo "</td>";
	echo "</tr>";
	$i++;
}
echo "</table>";
 ?>


<?php 
$i = 1;
echo "<table border='1'>";
while ($i <= 3) {
	echo "<tr>";
	$n = 1;
	while ($n <= 1) {
		$result=$goods[$i]['title'].'-'.$goods[$i]['price'];
		echo "<td>$result</td>";
		$n++;
	}
	$c = 1;
	while ($c <= 1) {
		$result=$goods[$i]['color'];
		echo "<td>$result</td>";
		$c++;
	}
	echo "</tr>";
	$i++;
}
echo "</table>";
 ?>


<?php 
$i = 1;
echo "<table border='1'>";
while ($i <= 3) {
	echo "<tr>";
		$result=$goods[$i]['title'].'-'.$goods[$i]['price'];
		echo "<td>$result</td>";

	$c = 1;
	while ($c <= 4) {
		$result=$goods[$i]['color'];
		echo "<td>$result</td>";
		$c++;
	}
	echo "</tr>";
	$i++;
}
echo "</table>";
 ?>

<?php 
echo '<select>';
for($year = 2000; $year < 2015; $year++) { 
	echo "<option value = '$year'>$year</option>";
}
echo '</select>' . '<br>';
 ?>

<!-- Цикл foreach -->

<?php 
$names = [
	'Ivan' => 'Ivanov',
	'Petr' => 'Petrov',
	'Sidr' => 'Sidorov',
	];
echo '<select>';
foreach ($names as $key => $name) {
	echo "<option>$name</option>" . '<br>';

}
echo '</select>' . '<br>';

 ?>

<?php 
$items = [
	'Ivan' => 'Ivanov',
	'Petr' => 'Petrov',
	'Sidr' => 'Sidorov',
	];

foreach ($items as $key => $item) {
	echo "Name: $key, Surname:$item" . '<br>';
		echo '<br/>';
}


$darr = ['John', 'Jonson', 30, 'men'];
list($firstname, $surname, $age, $gender) = $darr;
echo "$firstname, $surname, $age, $gender";

		echo '<br/>';





//Функции для работы со строками

$str = 'Иванов Иван Иванович';
$data = explode(' ', $str);
print_r($data) . '<br>';
echo $data[1] . '<br>';

$massiv = ['Иванов', 'Иван', 'Иванович'];
$strok = implode('|', $massiv);
print_r($strok) . '<br>';



// trim Удаляет пробелы в конце и в начале строк

// replace Функции для поиска и замены

$str2 = 'Привет меня зовут [b]Вася[/b]';
$str2 = str_replace('[b]', '<b>', $str2);
$str2 = str_replace('[/b]', '</b>', $str2);
echo $str2 . '<br>';

$str3 = '[i]Привет[/i] меня зовут [b]Егор[/b]';
$search = ['[b]', '[/b]', '[i]', '[/i]'];
$replace = ['<b>', '</b>', '<i>', '</i>'];
$str3 = str_replace($search, $replace, $str3);
echo $str3 . '<br>';

// Функция учета символов в строке

$str4 = 'привет';
echo mb_strlen($str4) . '<br>';

// Функция с пом которой мы берем часть строки

$str5 = 'Привет мир!';
echo mb_substr($str5, 2) . '<br>';
echo mb_substr($str5, -4) . '<br>';
echo mb_substr($str5, 2, 8) . '<br>';


// Функции даты и врмени
echo date('Y-m-d H:i:s');
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
echo date_default_timezone_set('Europe/London');
echo '<br>';
echo date_default_timezone_get();
echo date('Y-m-d H:i:s');
echo '<br>';
// Передача данных GET POST

 ?>

<?php 
require_once 'funcs.php';

if (!empty($_POST)) {
	save_mess();

}

echo PHP_VERSION;

 ?>


<form action="index.php" method="post">
	<p>
		<label for="name">Имя:</label><br>
		<input type="text" name="name" id="name">
	</p>
	<p>
		<label for="name">Текст:</label><br>
		<textarea name="text" id="text"></textarea>
	</p>
	<button type="submit">Написать</button>

</form>

<?php 
echo '<br>';
$arr = array(
		 array(0, 5, -5),
		 array("hello", "world"),
		 array("name"=>"JIM", "age"=>27)
);

for ($i=0; $i < count($arr); $i++) { 
	for ($j=0; $j < count($arr[$i]); $j++) { 
		 
			echo $arr[$i][$j];
			echo '<br>';
		
	}
}
 ?>

<?php
	$arr=[1,2,3,4,'apple', 5, ['cat', 'dog', 'mouse'], 7,];
	var_dump($arr);
	echo '<br/>';
	echo $arr[6][0];

	echo '<br/>';
	print_r($arr);


	echo '<br/>';
	for ($i=0; $i < count($arr); $i++){ 
		
		echo $arr[$i];
		echo '<br>';
		
	}
	echo '<br/>';



 ?>





</body>
</html>