<?php
$f = fopen("quest.txt", "r"); // Открываем файл в режиме чтения
if ($f)
{
	while (!feof($f))
	{
		$mytext = fgets($f, 999);
		echo $mytext."<br />";
	}
}
else echo "Ошибка при открытии файла";


?>