<?php

$quest1=$_POST['quest1'];
$quest2=$_POST['quest2'];
$quest3=$_POST['quest3']; 

$f = fopen("quest.txt", "a+");
fwrite($f,"Ответ 1: $quest1 <br /><br />Ответ 2: $quest2 <br /><br />Ответ 3: $quest3");
fclose($f);

echo "Ответы сохранены";
?>