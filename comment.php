<?php

$name = $_POST["name"];
$comment = $_POST["comment"];
$name = htmlspecialchars($name);
$comment = htmlspecialchars($comment);
$mysqli = new mysqli("localhost", "root", "", "com");
$mysqli->query("INSERT INTO `com` (`name`, `comment`) VALUES ('$name', '$comment')");
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>
