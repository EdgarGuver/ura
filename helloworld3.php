
<?php
echo ("Hello World<br\>");

// Читаем страницу из интернета
$string = file_get_contents('https://habrahabr.ru/post/323152/');
echo($string);

?>