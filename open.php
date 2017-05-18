<?php
//$f = fopen("quest.txt", "r"); // Открываем файл в режиме чтения
//if ($f)
//{
//	while (!feof($f))
//	{
//		$mytext = fgets($f, 999);
//		echo $mytext."<br />";
//	}
//}
//else echo "Ошибка при открытии файла";


$mysqli = new mysqli("localhost", "root", "", "quest");
$result_set = $mysqli->query("SELECT * FROM `quest`");
while ($row = $result_set->fetch_assoc()) {
	print_r($row);
	echo "<br />";
}

?>