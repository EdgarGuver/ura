<?php
$f = fopen("quest.txt", 'a');
ftruncate($f, 0) ;
header('Location: /demo2/questionansver.html')
//echo "Ответы очищены";
?>