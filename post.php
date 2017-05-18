<?php

$quest1=$_POST['quest1'];
$quest2=$_POST['quest2'];
$quest3=$_POST['quest3']; 

//$f = fopen("quest.txt", "a+");
//fwrite($f,"Ответ 1: $quest1 <br /><br />Ответ 2: $quest2 <br /><br />Ответ 3: $quest3");
//fclose($f);


$quest1 = htmlspecialchars($quest1);
$quest2 = htmlspecialchars($quest2);
$quest3 = htmlspecialchars($quest3);

$mysqli = new mysqli("localhost", "root", "", "quest");
$mysqli->query("INSERT INTO `quest` (`quest1`, `quest2`, `quest3`) VALUES ('$quest1', '$quest2', '$quest3')");
header('Location: /demo2/questionansver.html')
//echo "Ответы сохранены";
?>